<?php

namespace NesoHost\Http\Controllers;

use Illuminate\Support\Str;
use NesoHost\Models\Image;
use NesoHost\Http\Requests\NesoRequest;

class ImageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \NesoHost\Models\Image $image
     * @return \Illuminate\Http\Response
     */
    public function store(NesoRequest $request, Image $image)
    {
        $filename = Str::random(30);
        $extension = $request->image->getClientOriginalExtension();

        $request->image->move(public_path('images'), $filename . '.' . $extension);

        $image->filename = $filename;
        $image->extension = $request->image->getClientOriginalExtension();
        $image->destroy_token = Str::random(60);
        $image->save();

        if ($request->image_jump === 'on') {
            return redirect('/images/' . $filename . '.' . $extension);
        }

        return redirect()->route('image.show', ['image' => $filename]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $filename
     * @return \Illuminate\Http\Response
     */
    public function show($filename)
    {
        $file = Image::where('filename', $filename)->firstOrFail();

        $directLink = sprintf('%s/%s/%s.%s',
            env('APP_URL'),
            config('app.images_path'),
            $file->filename,
            $file->extension
        );

        return view('show')
            ->withImage($file)
            ->withDirectLink($directLink);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NesoRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
