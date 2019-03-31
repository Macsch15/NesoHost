<?php

namespace NesoHost\Http\Controllers;

use Illuminate\Support\Str;
use NesoHost\Models\Image;
use NesoHost\Http\Requests\NesoRequest;
use Intervention\Image\ImageManagerStatic as ImageManager;

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

        ImageManager::make($request->image)
            ->resize(300, 200)
            ->save(public_path(config('app.thumbnails_path')) . '/' . $filename . '.' . $extension);

        $request->image->move(public_path(config('app.images_path')), $filename . '.' . $extension);

        $image->filename = $filename;
        $image->extension = $request->image->getClientOriginalExtension();
        $image->destroy_token = Str::random(60);
        $image->save();

        if ($request->image_jump === 'on') {
            return redirect('/' . config('app.images_path') .'/' . $filename . '.' . $extension);
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

        $directThumbnailLink = sprintf('%s/%s/%s.%s',
            env('APP_URL'),
            config('app.thumbnails_path'),
            $file->filename,
            $file->extension
        );

        return view('show')
            ->withImage($file)
            ->withDirectLink($directLink)
            ->withDirectThumbnailLink($directThumbnailLink);
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
