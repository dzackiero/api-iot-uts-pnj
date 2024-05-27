<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrashRequest;
use App\Http\Requests\UpdateTrashRequest;
use App\Http\Resources\Trash\TrashResource;
use App\Models\Trash;

class TrashController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $data = Trash::all();
        $data = TrashResource::collection($data);
        return $this->successResponse($data);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrashRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        $trashes = Trash::create($data);
        $data = TrashResource::collection($trashes);

        return $this->successResponse($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trash $trash): \Illuminate\Http\JsonResponse
    {
        $data = new TrashResource($trash);
        return $this->successResponse($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrashRequest $request, Trash $trash): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        $trash->update($data);
        $trash->refresh();

        $data = new TrashResource($trash);
        return $this->successResponse($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trash $trash): \Illuminate\Http\JsonResponse
    {
        $trash->deleteOrFail();
        return $this->successResponse();
    }
}
