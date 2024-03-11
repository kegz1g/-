<div>
    <div>{{ $product->id }}</div>
    <div>{{ $product->name }}</div>
    <div>{{ $product->text }}</div>
    <div>{{ $product->price }}</div>
    <a href="{{ route('product.edit', $product->id) }}">update</a>
    <form action="" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
</div>
