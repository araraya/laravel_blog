

@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{auth()->user()->name}} Posts</h1>
    </div> 


    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-3">{{$post->title}}</h2>
                <img class="img-fluid rounded" src="https://source.unsplash.com/800x400/?{{$post->category->name}}" alt="{{$post->category->name}}">
                <div class="mt-3">
                    <button class="btn btn-sm btn-info" href='/dashboard/posts'>
                        <span data-feather="arrow-left"></span>
                        Back to all posts
                    </button>
                    <button class="btn btn-sm btn-warning">
                        Edit
                    </button>
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
