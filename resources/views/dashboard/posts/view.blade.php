

@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{auth()->user()->name}} Posts</h1>
    </div> 


    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-3">{{$post->title}}</h2>
                @if($post->image)
                <img class="img-fluid rounded" src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}">
                @else
                <img class="img-fluid rounded" src="https://source.unsplash.com/800x400/?{{$post->category->name}}" alt="{{$post->category->name}}">
                @endif

                <div class="mt-3">
                    <a class="btn btn-sm btn-info" href='/dashboard/posts'>
                        <span data-feather="arrow-left"></span>
                        Back to all posts
                    </a>
                    <a class="btn btn-sm btn-warning" href="/dashboard/posts/{{$post->slug}}/edit">
                        Edit
                    </a>
                    <form method="post" action="/dashboard/posts/{{$post->slug}}" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
                <div class="mt-3 fs-5">
                    <p>{!!$post->body!!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
