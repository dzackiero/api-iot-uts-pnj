<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Http\Resources\Member\MemberResource;
use App\Models\Member;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $data = Member::all();
        $data = MemberResource::collection($data);
        return $this->successResponse($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        $member = Member::create($data);
        $data = new MemberResource($member);

        return $this->successResponse($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member): \Illuminate\Http\JsonResponse
    {
        $data = new MemberResource($member);
        return $this->successResponse($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member): \Illuminate\Http\JsonResponse
    {
        $data = $request->validated();

        $member->update($data);
        $member->refresh();

        $data = new MemberResource($member);
        return $this->successResponse($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member): \Illuminate\Http\JsonResponse
    {
        $member->deleteOrFail();
        return $this->successResponse();
    }
}
