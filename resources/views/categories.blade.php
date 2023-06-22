@extends('layouts/main')


@section('container')  

<h2>{{$title}}</h2>
<ul>
@foreach ($categories as $category)
    <li>
        <a class="text-decoration-none" href="/category/{{$category->slug}}">{{$category->name}}</a>
    </li>
@endforeach
</ul>
@endsection