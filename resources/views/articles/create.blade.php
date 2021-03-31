@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl">文章列表=〉新增文章</h1>

    @if($errors->any())
        <div class="errors p-3 bg-red-500 text-red-100 font-thin rounded">
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('articles.store')}}" method="post" class="mt-6">
        @csrf
        <div class="field my-2">
            <label for="title">標題</label>
            <input type="text" value="{{old('title')}}" name="title" class="border border-gray-300 p-2">
        </div>
        <div class="field my-2">
            <label for="content">內文</label>
            <textarea name="content" cols="30" rows="10" class="border border-gray-300 p-2">{{old('content')}}</textarea>
        </div>
        <div class="actions my-2">
            <button type="submit" class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-400">新增文章</button>
        </div>
    </form>
@endsection
