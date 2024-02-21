<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-r from-purple-400 via-sky-400 to-sky-600  rounded-md font-semibold text-sm text-white uppercase tracking-widest shadow-sm hover:from-purple-500 hover:to-sky-500 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
