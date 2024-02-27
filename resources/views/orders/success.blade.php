<x-app-layout>
    <div class="flex justify-center items-center">
        <div class="mt-20 text-center text-yellow-900 font-bold">
            <img class="h-40 mx-auto" src="/img/tick.png" alt="tick">
            <p>Your order has been placed successfully!.</p>
            <p class="pt-2 pb-4">Thank You for shopping with Styled By Bella 💜</p>
            <a href="{{ route('products.index') }}">
                <x-third-button class="ms-3 md:mt-5 py-3">
                    Continue shopping
                </x-third-button>
            </a>
        </div>
    </div>
</x-app-layout>
