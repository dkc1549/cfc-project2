@extends('app')
@section('title', 'Blogs / Create')
@section('main-section')
    <header>
        <h1 class="text-center text-primary">Blogs View</h1>
    </header>

    <main>
        <div class="container">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label text-capitalize"><span class="text-danger">* </span>title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $blog->title }}" />
            </div>
            <div class="mb-3">
                <label for="author" class="form-label text-capitalize"><span class="text-danger">*
                    </span>author</label>
                <input type="text" class="form-control" name="author" id="author" value="{{ $blog->author }}" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Current Image</label>
                <div>
                    <img src="{{ asset($blog->feature_image) }}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="mb-3">
                <label for="highlight" class="form-label text-capitalize">highlight</label>
                <textarea name="highlight" id="highlight" cols="30" rows="5" class="form-control">{{ $blog->highlight }}</textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-capitalize">description</label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $blog->description }}</textarea>
            </div>
        </div>
    </main>
@endsection
