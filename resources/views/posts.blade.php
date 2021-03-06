@extends('components.layout')

@section('content')

@foreach ($posts as $post)
    <article>
        <h1><a href="/post/{{$post->slug}}">{{$post->title}}</a></h1> 

        <p>
            Por <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> em <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>

        <div>
            {!!$post->excerpt!!}
        </div>     
    </article>
@endforeach

@endsection