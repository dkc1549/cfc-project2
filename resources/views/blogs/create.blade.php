@extends('app')
@section('title', 'Blogs / Create')
@section('main-section')
    <header>
        <h1 class="text-center text-primary">Blogs</h1>
    </header>

    <main>
        <div class="container">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label text-capitalize"><span class="text-danger">* </span>title</label>
                    <input type="text" class="form-control" name="title" id="title" />
                    @error('title')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label text-capitalize"><span class="text-danger">* </span>author</label>
                    <input type="text" class="form-control" name="author" id="author" />
                    @error('author')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Feature Image" class="form-label text-capitalize"><span class="text-danger">* </span>Feature Image</label>
                    <input type="text" class="form-control" name="Feature Image" id="Feature Image" />
                    @error('Feature Image')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="highlight" class="form-label text-capitalize"><span class="text-danger">* </span>highlight</label>
                    <textarea name="highlight" id="highlight" cols="30" rows="5" class="form-control"></textarea>
                    @error('highlight')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-capitalize"><span class="text-danger">* </span>description</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
                    @error('description')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

            </form>
        </div>
    </main>
@endsection
