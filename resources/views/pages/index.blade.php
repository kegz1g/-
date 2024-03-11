@extends('layouts.app')
@section('title', 'Главная')
@section('content')
    <div>
        @if(session('success'))
            <div style="color: green">{{ session('success') }}</div>
        @endif
        <h1>Керил пидор</h1>
        <form action="{{route('add.product')}}" method="post">
            @csrf
            <input type="text" class="" name="name" id="name" value="{{ old('name') }}">
            @error('name')  <label for="name">{{$message}}</label> @enderror
            <input type="text" name="price" id="price" value="{{ old('price') }}">
            @error('price')  <label for="price">{{$message}}</label> @enderror
            <input type="text" name="text" id="text" value="{{ old('text') }}">
            @error('text')  <label for="text">{{$message}}</label> @enderror
            <select name="category_id" id="">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
            <button type="submit">Создать</button>
        </form>
        @foreach($products as $product)
            {{$product->name}}
            {{$product->price}}
            {{$product->text}}
            {{$product->category->name}}
            <a href="{{ route('product.show', $product->id) }}">сюда тыкать</a>
            <hr>
        @endforeach


        <br>
        <h1>Категории</h1>

    </div>
@endsection

