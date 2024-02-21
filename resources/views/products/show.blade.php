<x-app-layout>
    <div class="md:m-10 md:flex justify-center items-center md:bg-white rounded-lg shadow-lg">

        <div class="m-5 p-5 bg-gray-100 rounded-lg shadow-lg md:flex gap-10 md:w-11/12">

            @if ($product->image)
                <div class="rounded-lg">
                    <img class="rounded-lg" src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
            @endif

            <div class="pt-5 md:mt-60 text-gray-700">
                <h1 class="font-bold text-yellow-900 md:text-lg">{{ $product->name }}</h1>
                <div class="text-purple-600 font-extrabold mt-2">
                    <strong>$</strong> {{ $product->price }}
                </div>
                <div>
                    <strong>Size:</strong> {{ $product->size }}
                </div>
                <div>
                    <strong>Category:</strong>
                    @if ($product->category)
                        <a class="text-pink-600 underline" href="/categories/{{ $product->category->id }}">
                            {{ $product->category->name }}
                        </a>
                    @else
                        N/A
                    @endif
                </div>


                <div class="md:flex gap-8 pt-5">

                    <a href="{{ route('products.index') }}">
                        <x-third-button class="ms-3 md:mt-5">Shop More
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>

                        </x-third-button>
                    </a>



                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <x-secondary-button class="ms-3 mt-5">
                            Add to Cart
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </x-secondary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
