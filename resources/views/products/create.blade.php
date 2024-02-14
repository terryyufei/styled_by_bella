<x-guest-layout>
    
        <h2 class="text-center p-2 text-yellow-800 font-bold text-lg">Add New Product</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Name --}}
            <div class="pb-2">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            {{-- Image Upload --}}
            <div class="pb-2">
                <x-input-label for="image" :value="__('Image')" />
                <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" required
                    autofocus />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div class="pb-2">

            {{-- Size --}}
            <div class="pb-2">
                <x-input-label for="size" :value="__('Size')" />
                <select class="block mt-1 w-full border-gray-300 focus:border-yellow-800 focus:ring-yellow-800 rounded-md shadow-sm" id="size" name="size">
                    <option value="xs">XS</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>
            </div>

            {{-- Price --}}
            <div class="pb-2">
                <x-input-label for="price" :value="__('Price')" />
                <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')"
                    required autofocus />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>

            {{-- Category --}}
            <div class="pb-2">
                <x-input-label for="category_id" :value="__('Category')" />
                <select class="block mt-1 w-full border-gray-300 focus:border-yellow-800 focus:ring-yellow-800 rounded-md shadow-sm" id="category_id" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <x-primary-button class="ms-4 mt-4">
                {{ __('Add a Product') }}
            </x-primary-button>
        </form>

</x-guest-layout>
