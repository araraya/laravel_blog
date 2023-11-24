@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Posts</h1>
    </div> 


    <div class="col-lg-8">
        <form method="post" action="/dashboard/posts/{{$post->slug}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title" value="{{old('title', $post->title)}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" name="slug" value="{{old('slug', $post->slug)}}">
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
                    @if(old('category_id', $post->category_id) == $category->id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="image">Image</label>
                @if($post->image)
                <img src="{{asset('storage/' . $post->image)}}" class="img-preview img-fluid d-block mb-3" alt="preview">
                @else
                <img class="img-preview img-fluid d-none mb-3" alt="preview">
                @endif
                <input type="file" accept="image/png, image/jpeg" class="form-control-file  @error('image') is-invalid @enderror"
                 id="image" name="image" onchange="imagePreview()">
                @error('image')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{old('body', $post->body)}}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Update Post</button>
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


        function imagePreview() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview')

            imgPreview.classList.add('d-block')
            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(ofrEvent) {
                imgPreview.src = ofrEvent.target.result;
            }
        }
    </script>
@endsection
