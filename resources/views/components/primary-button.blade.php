<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-r from-yellow-400 to-yellow-900 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:from-purple-500 hover:to-yellow-500  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
