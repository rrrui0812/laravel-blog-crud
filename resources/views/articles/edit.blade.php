@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl">文章列表=〉編輯文章</h1>

    @if($errors->any())
        <div class="errors p-3 bg-red-500 text-red-100 font-thin rounded">
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 class="font-thin text-4xl">$article:</h1>
    <?php
    print_r($article);
    ?>

    <form action="{{route('articles.update',$article)}}" method="post" class="mt-6">
        @csrf
        @method('patch')
        <div class="field my-2">
            <label for="title">標題</label>
            <input type="text" value="{{$article->title}}" name="title" class="border border-gray-300 p-2">
        </div>
        <div class="field my-2">
            <label for="content">內文</label>
            <textarea name="content" cols="30" rows="10"
                      class="border border-gray-300 p-2">{{$article->content}}</textarea>
        </div>
        <div class="actions my-2">
            <button type="submit" class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-400">更新文章</button>
        </div>
    </form>
@endsection
