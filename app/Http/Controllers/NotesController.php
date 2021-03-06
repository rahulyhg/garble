<?php

namespace Garble\Http\Controllers;

use Garble\Note;
use Garble\Http\Requests\NotesRequest;

class NotesController extends TextController
{
    /**
     * Name of the affected Eloquent model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Garble\Http\Requests\NotesRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(NotesRequest $request)
    {
        return parent::storeModel($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Garble\Http\Requests\NotesRequest $request
     * @param  string                             $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function update(NotesRequest $request, $slug)
    {
        return parent::updateModel($request, $slug);
    }
}
