@extends('layouts.app')
@section('title', 'Редактирование')
@section('content')

    <form action="{{route('product.update', $product->id)}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="" value="{{ $product->name }}">
        <input type="text" name="price" id="" value="{{ $product->price }}">
        <input type="text" name="text" id="" value="{{ $product->text }}">
        <select name="category_id" id="">
            @foreach($categories as $category)
                <option value="{{$category->id}}">
                    {{$category->name}}
                </option>
            @endforeach
        </select>
        <button type="submit">Создать</button>
    </form>
@endsection
