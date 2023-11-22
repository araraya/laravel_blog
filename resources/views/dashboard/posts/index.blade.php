@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{auth()->user()->name}} Posts</h1>
    </div> 

    
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif

    <div class="table-responsive col-lg-8">
        <div class="my-2">
            <a href="/dashboard/posts/create" class="btn bg-primary text-white">
                Create New Post
            </a>
        </div>
        <table class="table table-striped table-sm">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>
                        <a class="badge bg-info" href="/dashboard/posts/{{$post->slug}}">
                            <span data-feather="eye"></span>
                        </a>
                        <a class="badge bg-warning" href="">
                            <span data-feather="edit"></span>
                        </a>
                        <a class="badge danger" href="">
                            <span data-feather="x-circle"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
