@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Posts</h1>
    </div> 

    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{old('title')}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" name="slug" value="{{old('slug')}}">
                @error('slug')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Select</label>
                <select class="form-select form-control" aria-label="Default select example" name="category_id">
                    @foreach($categories as $category)
                    @if(old('category_id') == $category->id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="file" accept="image/png, image/jpeg" class="form-control-file  @error('image') is-invalid @enderror" id="image" name="image">
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{old('body')}}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Create Post</button>
        </form>
    </div>


    <script>
        const title = document.getElementById('title');
        const slug = document.getElementById('slug');

        title.addEventListener('change', () => {
            fetch('/dashboard/posts/generateSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
        })

        document.addEventListener('trix-file-accept', () => {
            e.preventDefault();
        })
    </script>
@endsection
