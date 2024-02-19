<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-7 py-2 bg-gradient-to-r from-purple-600 to-purple-900 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:from-purple-900 hover:to-purple-500  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
