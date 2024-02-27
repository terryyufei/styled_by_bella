@if(session('success') || session('error'))
<div
    class="fixed top-24 right-16 sm:right-24 pl-5 text-sm md:text-lg flex items-center justify-center rounded-lg"
    x-data="{ show: true }"
    x-show="show"
    x-init="setTimeout(() => show = false, 5000)"
>
    <div class="{{ session('success') ? 'bg-gradient-to-r from-green-400 to-green-900 border-green-600' : 'bg-gradient-to-r from-red-400 to-red-900 border-red-600' }} border px-2 py-3 flex rounded-lg text-white">
        <p class="mr-4 font-bold">
            {{ session('success') ? session('success') : session('error') }}
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white cursor-pointer" x-on:click="show = false">
            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
        </svg>
    </div>
</div>
@endif

