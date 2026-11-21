<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::with(['product', 'customer', 'staff'])->latest()->get();
        return view('sales.index', compact('sales'));
    }

    public function create()
    {
        return view('sales.create', ['products' => Product::where('stock_quantity', '>', 0)->orderBy('name')->get(), 'customers' => Customer::orderBy('full_name')->get()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => ['required', 'exists:products,id'],
            'customer_id' => ['nullable', 'exists:customers,id'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        $sale = DB::transaction(function () use ($data, $request) {
            $product = Product::whereKey($data['product_id'])->lockForUpdate()->firstOrFail();
            if ($data['quantity'] > $product->stock_quantity) {
                return null;
            }
            $product->decrement('stock_quantity', $data['quantity']);
            return Sale::create([
                'product_id' => $product->id,
                'customer_id' => $data['customer_id'] ?? null,
                'sold_by' => $request->user()->id,
                'quantity' => $data['quantity'],
                'total_price' => $product->price * $data['quantity'],
            ]);
        });

        if (! $sale) return back()->withInput()->withErrors(['quantity' => 'The requested quantity exceeds available stock.']);
        return redirect()->route('sales.index')->with('success', 'Sale recorded and inventory updated.');
    }
}
