@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{auth()->user()->name}} Posts</h1>
    </div> 


    <div class="col-lg-8">
        <form action="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title">
              </div>
            <div class="mb-3">
              <label for="slug">Slug</label>
              <input type="text" class="form-control" id="slug" placeholder="Slug">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Select</label>
                <select class="form-select form-control" aria-label="Default select example">
                    @foreach($categories as $category)
                    <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Select</label>
                <select class="form-select form-control" aria-label="Default select example">
                    @foreach($categories as $category)
                    <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="content">
                <trix-editor input="body"></trix-editor>
            </div>
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
