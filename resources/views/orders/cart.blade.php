<x-app-layout>
    <div class="m-5 md:m-10 ">

        <h2
            class="flex justify-center items-center gap-2 text-xl font-extrabold text-yellow-900 border-b-2 border-yellow-900 pb-2">
            My Cart
            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="22.5"
                viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path fill="#8e7f48"
                    d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
            </svg>
        </h2>


        @if (session('cart'))
            <div class="mt-5">

                @php $total = 0; @endphp
                @foreach (session('cart') as $id => $details)
                    @php $total += $details['quantity'] * $details['price']; @endphp
                    <div class="md:flex justify-between border-b-2 border-yellow-900 pb-4">

                        {{-- pic and name  --}}
                        <div class="flex">
                            <div class="mt-2">
                                @if (isset($details['image']) && !empty($details['image']))
                                    <img src="{{ asset('img/' . $details['image']) }}" alt="{{ $details['name'] }}"
                                        style="width: 200px; height: auto;">
                                @endif
                            </div>
                            <div class="mt-20 md:mt-24 ml-2 md:ml-5 text-yellow-900 md:w-48">
                                {{ $details['name'] }}
                            </div>
                        </div>

                        <div class="pt-5 md:mt-20 font-bold text-lg text-center text-purple-700">
                            {{ $details['quantity'] }} <span class="text-gray-900">x</span> ${{ $details['price'] }}
                        </div>

                        {{-- plus minus --}}
                        <div class="flex justify-between  pt-2 md:mt-20">


                            <form action="{{ route('cart.add', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="p-2 md:mr-5 bg-green-300 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </button>
                            </form>

                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="p-2 bg-rose-300 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                    </svg>
                                </button>
                            </form>


                        </div>
                    </div>
                @endforeach
                <div class="mt-5 text-center bg-red-500 p-4 text-lg text-white rounded-xl md:w-1/2 mx-auto">
                    <strong>Total: ${{ $total }}</strong>
                </div>

                <div class="mt-5 text-center p-4 text-lg text-white">


                    <a href="{{ route('products.index') }}">
                        <x-third-button class="ms-3 md:mt-5">Continue shopping
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>

                        </x-third-button>
                    </a>

                    <a href="{{ route('checkout.show')}}">
                        <x-secondary-button class="ms-3 mt-5">
                            Proceed to Checkout
                        </x-secondary-button>
                    </a>

                </div>
            </div>
        @else
            <div class="mt-10">
                <p>Your cart is empty :( </p>
                <a href="{{ route('products.index') }}" class="text-yellow-700 underline hover:text-purple-600">Start
                    Shopping!</a>
            </div>
        @endif
    </div>
</x-app-layout>
