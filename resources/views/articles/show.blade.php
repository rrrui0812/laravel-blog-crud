@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl mb-4">{{$article->title}}</h1>
    <h1 class="font-thin text-4xl">$articles:</h1>
    <?php
    print_r($article);
    ?>
    <p class="text-lg text-gray-700 p-6">{{$article->content}}</p>

    <a href="{{route('articles.index')}}">〈＝回到文章列表</a>
@endsection
