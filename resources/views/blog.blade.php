@extends('layouts/main')


@section('container')  





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3">{{$blog->title}}</h3>
                <img class="img-fluid rounded" src="https://source.unsplash.com/800x400/?{{$blog->category->name}}" alt="">
            <p class="mt-3 mb-2 fs-5">By <a class="text-decoration-none" href="/posts?author={{$blog->user->username}}">{{$blog->user->name}}</a> in <a class="text-decoration-none" href="/posts?category={{$blog->category->slug}}">{{$blog->category->name}}</a></p>
            
            <div class="mt-3 fs-5">
                <p>{!!$blog->body!!}</p>
            </div>
            <a class="text-decoration-none fs-5" href="/posts">Back To Posts</a>
        </div>
        
    </div>
   
</div>
@endsection