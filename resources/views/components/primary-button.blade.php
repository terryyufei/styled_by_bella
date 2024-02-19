<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-r from-yellow-600 to-yellow-900 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:from-yellow-900 hover:to-yellow-500  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
