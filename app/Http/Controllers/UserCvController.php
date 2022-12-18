<?php

namespace App\Http\Controllers;

use App\Models\UserCv;
use App\Http\Requests\StoreUserCvRequest;
use App\Http\Requests\UpdateUserCvRequest;

class UserCvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserCvRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserCvRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCv  $userCv
     * @return \Illuminate\Http\Response
     */
    public function show(UserCv $userCv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCv  $userCv
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCv $userCv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserCvRequest  $request
     * @param  \App\Models\UserCv  $userCv
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserCvRequest $request, UserCv $userCv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCv  $userCv
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCv $userCv)
    {
        //
    }
}
