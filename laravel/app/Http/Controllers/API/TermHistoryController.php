<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoretermhistoryRequest;
use App\Http\Requests\UpdatetermhistoryRequest;
use App\Models\termhistory;

class TermHistoryController extends Controller
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
     * @param  \App\Http\Requests\StoretermhistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretermhistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\termhistory  $termhistory
     * @return \Illuminate\Http\Response
     */
    public function show(termhistory $termhistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\termhistory  $termhistory
     * @return \Illuminate\Http\Response
     */
    public function edit(termhistory $termhistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetermhistoryRequest  $request
     * @param  \App\Models\termhistory  $termhistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetermhistoryRequest $request, termhistory $termhistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\termhistory  $termhistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(termhistory $termhistory)
    {
        //
    }
}
