@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categories Post</h1>
    </div> 

    
    @if(session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
        {{session('success')}}
    </div>
    @endif

    <div class="table-responsive col-lg-6">
        <div class="my-2">
            <a href="/dashboard/posts/create" class="btn bg-primary text-white">
                Create New Category
            </a>
        </div>
        <table class="table table-striped table-sm mt-3">
            <thead>
                <th>#</th>
                <th>Category</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a class="badge bg-info" href="/dashboard/category/{{$category->slug}}">
                            <span data-feather="eye"></span>
                        </a>
                        <a class="badge bg-warning" href="/dashboard/category/{{$category->slug}}/edit">
                            <span data-feather="edit"></span>
                        </a>
                        <form method="post" action="/dashboard/category/{{$category->slug}}" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge badge-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
