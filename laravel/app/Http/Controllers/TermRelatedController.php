<?php

namespace App\Http\Controllers;

use App\Models\termRelated;
use App\Http\Requests\Storeterm_relatedRequest;
use App\Http\Requests\Updateterm_relatedRequest;

class TermRelatedController extends Controller
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
     * @param  \App\Http\Requests\Storeterm_relatedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeterm_relatedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\termRelated  $term_related
     * @return \Illuminate\Http\Response
     */
    public function show(termRelated $term_related)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\termRelated  $term_related
     * @return \Illuminate\Http\Response
     */
    public function edit(termRelated $term_related)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateterm_relatedRequest  $request
     * @param  \App\Models\termRelated  $term_related
     * @return \Illuminate\Http\Response
     */
    public function update(Updateterm_relatedRequest $request, termRelated $term_related)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\termRelated  $term_related
     * @return \Illuminate\Http\Response
     */
    public function destroy(termRelated $term_related)
    {
        //
    }
}
