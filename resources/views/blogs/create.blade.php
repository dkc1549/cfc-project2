@extends('app')
@section('title', 'Blogs / Create')
@section('main-section')
    <header>
        <h1 class="text-center text-primary">Blogs create</h1>
    </header>

    <main>
        <div class="container">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label text-capitalize"><span class="text-danger">* </span>title</label>
                    <input type="text" class="form-control" name="title" id="title" />
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label text-capitalize"><span class="text-danger">*
                        </span>author</label>
                    <input type="text" class="form-control" name="author" id="author" />
                    @error('author')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="eature_image" class="form-label text-capitalize"><span class="text-danger">* </span>Feature
                        Image</label>
                    <input type="file" class="form-control" name="feature_image" id="feature_image" />
                    @error('Feature Image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="highlight" class="form-label text-capitalize">highlight</label>
                    <textarea name="highlight" id="highlight" cols="30" rows="5" class="form-control"></textarea>
                    @error('highlight')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-capitalize">description</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>

                </div>
            </form>
        </div>
    </main>
@endsection
