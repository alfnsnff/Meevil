<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-amber-300 dark:bg-amber-300 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-amber-500 dark:hover:bg-amber-500 focus:bg-amber-500 dark:focus:bg-amber-500 active:bg-amber-500 dark:active:bg-amber-300 focus:outline-none transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
