<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Http\Resources\Member\MemberResource;
use App\Http\Resources\Transaction\TransactionResource;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaction::all();
        $data = TransactionResource::collection($data);

        return $this->successResponse($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        $transaction = Transaction::createTransaction($data);
        $data = new TransactionResource($transaction);

        return $this->successResponse($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction): \Illuminate\Http\JsonResponse
    {
        $data = new MemberResource($transaction);
        return $this->successResponse($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        $transaction->update($data);
        $transaction->refresh();

        $data = new TransactionResource($transaction);
        return $this->successResponse($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction): \Illuminate\Http\JsonResponse
    {
        $transaction->deleteOrFail();
        return $this->successResponse();
    }
}
