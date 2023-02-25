<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function create(Request $request)
    {
        $invoice = new Invoice;
        $invoice->customer_name = $request->input('customer_name');
        $invoice->amount = $request->input('amount');
        $invoice->save();
        return response()->json(['status' => 'success', 'data' => $invoice]);
    }

    public function update(Request $request, $id)
    {
        $invoice = Invoice::find($id);
        $invoice->customer_name = $request->input('customer_name');
        $invoice->amount = $request->input('amount');
        $invoice->save();
        return response()->json(['status' => 'success', 'data' => $invoice]);
    }

    public function delete($id)
    {
        $invoice = Invoice::find($id);
        $invoice->delete();
        return response()->json(['status' => 'success']);
    }

    public function show($id)
    {
        $invoice = Invoice::find($id);
        return response()->json(['status' => 'success', 'data' => $invoice]);
    }
}
