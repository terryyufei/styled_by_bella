<div class="container">
    <h2>Products</h2>
    <a href="{{ route('products.create') }}">Add New Product</a>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($product->img)
                        <img src="{{ asset('storage/' . $product->img) }}" class="card-img-top" alt="{{ $product->name }}" style="object-fit: cover; height: 200px;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">${{ $product->price }}</p>
                        <p class="card-text">Size: {{ $product->size }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
</div>
