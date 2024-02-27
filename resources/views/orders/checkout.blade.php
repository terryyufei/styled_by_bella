<x-guest-layout>
    <div class="container">
        <h2>Checkout</h2>
        <form action="{{ route('checkout.process') }}" method="POST">
            @csrf
            <!-- Add form fields for shipping address, payment details, etc. -->
            {{-- Name --}}
            <div class="pb-2">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            {{-- Email --}}
            <div class="pb-2">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="email" :value="old('email')"
                    required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            {{-- Billing address --}}
            <div class="pb-2">
                <x-input-label for="billing_address" :value="__('Address')" />
                <x-text-input id="billing_address" class="block mt-1 w-full" type="text" name="billing_address" :value="old('billing_address')"
                    required autofocus autocomplete="billing_address" />
                <x-input-error :messages="$errors->get('billing_address')" class="mt-2" />
            </div>

            {{-- City --}}
            <div class="pb-2">
                <x-input-label for="billing_city" :value="__('City')" />
                <x-text-input id="billing_city" class="block mt-1 w-full" type="text" name="billing_city" :value="old('billing_city')"
                    required autofocus autocomplete="billing_city" />
                <x-input-error :messages="$errors->get('billing_city')" class="mt-2" />
            </div>

             {{-- Postal Code --}}
             <div class="pb-2">
                <x-input-label for="billing_postalcode" :value="__('Postal Code')" />
                <x-text-input id="billing_postalcode" class="block mt-1 w-full" type="text" name="billing_postalcode" :value="old('billing_postalcode')"
                    required autofocus autocomplete="billing_postalcode" />
                <x-input-error :messages="$errors->get('billing_postalcode')" class="mt-2" />
            </div>

              {{-- Payment Method --}}
            <div class="pb-4">
                <x-input-label for="payment_method" :value="__('Payment Method')" />
                <select class="block mt-1 w-full border-gray-300 focus:border-yellow-800 focus:ring-yellow-800 rounded-md shadow-sm" id="payment_method" name="payment_method">
                    <option value="Mpesa">Mpesa</option>
                    <option value="Equity">Equity</option>
                    <option value="Co-op">Co-op</option>
                    <option value="Absa">Absa</option>
                    <option value="KCB">KCB</option>
                </select>
            </div>
            
    
            <x-primary-button>Place Order</x-primary-button>
        </form>
    </div>
</x-guest-layout>
