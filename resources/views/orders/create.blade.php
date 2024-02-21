<x-app-layout>
    <div class="container">
        <h2>Create New Order</h2>
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <p>Add products to your cart to create an order.</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Browse Products</a>
        </form>
    </div>
</x-app-layout>
