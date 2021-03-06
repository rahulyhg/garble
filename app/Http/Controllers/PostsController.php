<?php

namespace Garble\Http\Controllers;

use Garble\Post;
use Garble\Http\Requests\PostsRequest;

class PostsController extends TextController
{
    /**
     * Name of the affected Eloquent model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Garble\Http\Requests\PostsRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        return parent::storeModel($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Garble\Http\Requests\PostsRequest $request
     * @param  string                             $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, $slug)
    {
        return parent::updateModel($request, $slug);
    }
}
