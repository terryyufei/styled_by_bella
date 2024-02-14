<x-app-layout>
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <div>
            <strong>Price:</strong> ${{ $product->price }}
        </div>
        <div>
            <strong>Size:</strong> {{ $product->size }}
        </div>
        <div>
            <strong>Category:</strong> {{ $product->category->name ?? 'N/A' }}
        </div>
        <div>
            <strong>Description:</strong> {{ $product->description ?? 'No description provided.' }}
        </div>
        @if($product->image)
        <div>
            <strong>Image:</strong>
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 100%; height: auto;">
        </div>
        @endif
        <a href="{{ route('products.index') }}">Back to list</a>
    </div>
</x-app-layout>
