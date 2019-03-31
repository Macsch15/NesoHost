@extends('layouts.app')

@section('content')
    <h1 class="mb-5 display-4">Yup! Here is your image!🎉</h1>

    <div class="row justify-content-center">
        <div class="col-8">
            <img class="img-fluid img-thumbnail" src="/images/{{ $image->filename }}.{{ $image->extension }}" alt="{{ $image->filename }}" />
        </div>
    </div>

    <h3 class="mt-3 mb-2">This could be useful👍</h3>

    <div class="mt-4">
        <div class="form-group">
            <label for="helper1">Direct Link</label>
            <input type="text" class="form-control" id="helper1" value="{{ $directLink }}">
        </div>
        <div class="form-group">
            <label for="helper2">Thumbnail</label>
            <input type="text" class="form-control" id="helper2" value="{{ $directThumbnailLink }}">
        </div>
        <div class="form-group">
            <label for="helper3">Markdown</label>
            <input type="text" class="form-control" id="helper3" value="[![Image: {{ $image->filename }}]({{ $directLink }})]({{ $directLink }})">
        </div>
        <div class="form-group">
            <label for="helper4">Markdown Thumbnail</label>
            <input type="text" class="form-control" id="helper4" value="[![Image: {{ $image->filename }}]({{ $directThumbnailLink }})]({{ $directLink }})">
        </div>
        <div class="form-group">
            <label for="helper5">HTML</label>
            <input type="text" class="form-control" id="helper5" value='<img src="{{ $directLink }}" alt="Image" />'>
        </div>
        <div class="form-group">
            <label for="helper6">HTML Thumbnail</label>
            <input type="text" class="form-control" id="helper6" value='<a href="{{ $directLink }}"><img src="{{ $directThumbnailLink }}" alt="Image" /></a>'>
        </div>
    </div>

    <div class="mt-5">
        <a class="btn btn-primary" href="{{ config('app.url') }}">Return to homepage</a>
    </div>
@endsection
