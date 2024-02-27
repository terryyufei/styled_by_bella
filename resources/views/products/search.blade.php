<x-app-layout>
    <div class="m-5">
        <h2 class="p-5 text-lg text-yellow-900 font-bold">Search Results</h2>

        @if ($results->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($results as $product)
                    <div>
                        <div class="bg-white shadow-lg hover:shadow-lg rounded-lg overflow-hidden h-full">
                            @if ($product->image)
                                <img src="{{ asset('img/' . $product->image) }}"
                                    class="w-full h-56 object-cover object-center" alt="{{ $product->name }}">
                            @endif
                            <div class="p-4">
                                <h5 class="font-bold text-lg mb-2">{{ $product->name }}</h5>
                                <p class="text-purple-600 font-extrabold text-base">$ {{ $product->price }}</p>
                                <p class="text-gray-700 text-base">Size: {{ $product->size }}</p>
                                <a href="{{ route('products.show', $product->id) }}" class="mt-4 block w-full bg-gradient-to-r from-purple-600 to-purple-900 hover:from-purple-900 hover:to-purple-500 text-white font-bold py-2 px-4 rounded text-center">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No products found!</p>
        @endif
    </div>
</x-app-layout>
