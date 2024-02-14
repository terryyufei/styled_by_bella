<x-app-layout>
    <h1>{{ $category->name }} Products</h1>
    <div class="products">
        @foreach ($category->products as $product)
            <div class="product">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Size: {{ $product->size }}</p>
                <p>Price: ${{ $product->price }}</p>
                {{-- Optional: Display product image if exists --}}
                @if ($product->img)
                    <img src="{{ asset('storage/' . $product->img) }}" alt="{{ $product->name }}" style="width: 100px; height: auto;">
                @endif
            </div>
        @endforeach
    </div>
</x-app-layout>
