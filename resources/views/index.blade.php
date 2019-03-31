@extends('layouts.app')

@section('content')
    <h1 class="display-4">Welcome to <a class="text-light" href="{{ route('index') }}">NesoHost</a>!👾</h1>
    <p class="lead">Please select image to upload. Allowed extensions: <b>{{ str_replace(',', ' ,', config('app.allowed_extensions')) }}</b>. Maximum size: <b>{{ config('app.max_size') / 1024 }}MB</b>.</p>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Well💩. We have some errors here!</h4>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <p>What you gonna to do with this?</p>
        </div>
    @endif

    <div class="row justify-content-center mt-5">
        <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="image" class="form-control-file">

                @csrf
                @method('POST')

                <div class="custom-control custom-checkbox mt-4">
                    <input type="checkbox" name="image_jump" class="custom-control-input" id="image_jump">
                    <label class="custom-control-label" for="image_jump">Jump directly into the image after upload</label>
                </div>
            </div>

            <button class="mt-4 btn btn-lg btn-primary">Upload!</button>
        </form>
    </div>
@endsection
