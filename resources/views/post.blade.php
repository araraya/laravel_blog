@extends('layouts/main')


@section('container')  

@if($isCategories === false)
<h2>{{$title}}</h2>
@if($posts->count())
<form action="/posts">
  <div class="input-group mb-3">
    
    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{request('search')}}">
    @if(request('category'))
    <input type="hidden" name="category" value="{{request('category')}}">
    @endif
    @if(request('author'))
    <input type="hidden" name="author" value="{{request('author')}}">
    @endif
    <button class="btn btn-outline-secondary" type="submit" >Search</button>
  </div>
</form>
<div class="card mb-3">
    @if($posts[0]->image)
    <img class="img-fluid rounded" src="{{asset('storage/' . $posts[0]->image)}}" alt="{{$posts[0]->category->name}}">
    @else
    <img src="https://source.unsplash.com/1200x400/?{{$posts[0]->category->name}}" class="card-img-top" alt="...">
    @endif
    <div class="card-body text-center">
      <h3 class="card-title">{{$posts[0]->title}}</h3>

        <p class="fs-5 fw-normal"> 
        Created by <a href="/posts?author={{$posts[0]->user->username}}" class="text-decoration-none">{{$posts[0]->user->name}} </a> 
        in <a class="text-decoration-none" href="/posts?category={{$posts[0]->category->slug}}">{{$posts[0]->category->name}}</a>
            {{$posts[0]->created_at->diffForHumans()}}
        </p>
        <p class="fs-5 fw-normal">{{$posts[0]->excerpt}}</p> 
      <a href="/blog/{{$posts[0]->slug}}" class="btn btn-primary">Read More</a>
    </div>
  </div>
@else
<p class="text-center">Posts not found.</p>
@endif


  <div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.469)">
                    <a class="text-decoration-none text-white" href="/posts?category={{$post->category->slug}}">{{$post->category->name}}</a>
                </div>
                
                @if($post->image)
                <img class="img-fluid rounded" src="{{asset('storage/' . $post->image)}}" alt="{{$post->category->name}}">
                @else
                <img src="https://source.unsplash.com/500x400/?{{$post->category->name}}" class="card-img-top" alt="...">
                @endif
                <div class="card-body text-center">
                  <h3 class="card-title">{{$post->title}}</h3>
            
                    <p class="fs-5 fw-normal"> 
                    Created by <a href="/posts?author={{$post->user->username}}" class="text-decoration-none">{{$post->user->name}} </a> 
                        {{$post->created_at->diffForHumans()}}
                    </p>
                    <p class="fs-5 fw-normal">{{$post->excerpt}}</p> 
                  <a href="/blog/{{$post->slug}}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
  </div>
  <div class="d-flex justify-content-center mt-4">
    {{$posts->links()}}
  </div>

@elseif($isCategories === true)
<h2>{{$title}}</h2>
    <div class="container">
      <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4 mb-3">
         
            <div class="card">
              <div class="position-absolute px-3 py-2 fs-4 fw-semibold" >
                  <a class="text-decoration-none text-white" href="/posts?category={{$category->slug}}">{{$category->name}}</a>
              </div>
              <a href="/category/{{$category->slug}}">
              <img src="https://source.unsplash.com/500x400/?{{$category->name}}" class="card-img-top" alt="...">
              </a> 
            </div>   
            
        </div>
            @endforeach
      </div>
    </div>

@endif





@endsection