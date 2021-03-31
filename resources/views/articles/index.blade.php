@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl mb-4">文章列表</h1>
    <a href="{{route('articles.create')}}">新增文章</a>

    <h1 class="font-thin text-4xl">$articles:</h1>
    <?php
    print_r($articles);
    ?>

    @foreach($articles as $article)
        <div class="border-t border-gray-300 my-1 p-2">
            <h2 class="font-bold text-lg">{{$article->title}}</h2>
            <p>
                {{$article->created_at}} 由 {{$article->user->name}} 分享
            </p>
            <a href="{{route('articles.edit',['article'=>$article->id])}}" class="">編輯</a>
        </div>
    @endforeach
    {{$articles->links()}}
@endsection
