@extends('layouts.app')

@section('content')
    <h1 class="mb-5 display-4">Yup! Here is your image!🎉</h1>

    <div class="row justify-content-center">
        <div class="col-8">
            <img class="img-fluid img-thumbnail" src="/images/{{ $image->filename }}.{{ $image->extension }}" alt="{{ $image->filename }}" />
        </div>
    </div>

    <div class="mt-4">
        <div class="form-group">
            <label for="helper1">Direct Link</label>
            <input type="text" class="form-control" id="helper1" value="{{ $directLink }}">
        </div>
        <div class="form-group">
            <label for="helper2">Markdown</label>
            <input type="text" class="form-control" id="helper2" value="[![Image: {{ $image->filename }}]({{ $directLink }})]({{ $directLink }})">
        </div>
        <div class="form-group">
            <label for="helper3">HTML</label>
            <input type="text" class="form-control" id="helper3" value='<img src="{{ $directLink }}" alt="Image" />'>
        </div>
    </div>
@endsection
