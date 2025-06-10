<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return Transaction::all();
    }

    public function show($id)
    {
        return Transaction::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'transaction_date' => 'required',
            'amount' => 'required',
            'customer_id' => 'required|exists:users,id',
            'buyer_id' => 'required|exists:users,id',
            'status' => 'required|string',
            'payment_method' => 'required|string',
            'type' => 'required|string',
        ]);
        $transaction = Transaction::create($validatedData);

        return response()->json([
            'message' => 'Transaction created successfully',
            'transaction' => $transaction
        ], 201);

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'customer_id' => 'sometimes|exists:users,id',
            'buyer_id' => 'sometimes|exists:users,id',

            'type' => 'sometimes|string',
            'amount' => 'sometimes|numeric',
            'transaction_date' => 'sometimes|date',
            'status' => 'sometimes|string',
            'payment_method' => 'sometimes|string',
        ]);

        $transaction = Transaction::findOrFail($id);


        $transaction->update($validated);
        return response()->json([
            'message' => 'Transaction updated successfully',
            'transaction' => $transaction
        ], 200);

    }


    public function destroy($id)
    {
        return Transaction::destroy($id);
    }

    public function getTransactions()
    {
        $transactions = Transaction::with(['buyer', 'customer'])->get();


        return response()->json($transactions);
    }



    public function search(Request $request)
    {
        $status = $request->status;
        $id=$request->id;
        $type=$request->type;
        $amount=$request->amount;
        $transactions_date=$request->transacyion_date;
        $payment_method=$request->payment_method;

        $query = Transaction::where('id','>',0);

        if ($status !=null) {
            $query->where('status', 'like', '%' .$status . '%');
        }
        if($id!=null){
            $query->where('id',$id );
        }
        if($type!=null) {
            $query->where('type', 'like', '%' . $type . '%');
        }

        if($amount!=null){
            $query->where('amount',$amount );
        }
        if($transactions_date!=null){
            $query->where('transaction_date', $transactions_date);
        }
        if($payment_method!=null){
            $query->where('payment_method', '=', '%' .$payment_method . '%');
        }

        $transactions = $query->get();

        return response()->json($transactions,200);
    }


}
