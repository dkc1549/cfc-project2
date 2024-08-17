@extends('app')
@section('title', 'Blog/Index')
@section('main-section')
    <header>
        <h1 class="text-center text-primary">Blogs</h1>
    </header>
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset($blog->feature_image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{{ $blog->highlight }}</p>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{route('blogs.delete',$blog->id)}}" class="d-inline-block" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onsubmit="confirm('Are you sure ?')" class="btn btn-danger">
                                Delete
                            </button>

                        </form>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
