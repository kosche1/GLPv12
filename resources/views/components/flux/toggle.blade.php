<button
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center rounded-md p-2.5 text-zinc-700 hover:bg-zinc-100 hover:text-zinc-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-zinc-500 dark:text-zinc-400 dark:hover:bg-zinc-800 dark:hover:text-zinc-200'
    ]) }}
>
    <x-heroicon-o-{{ $icon ?? 'bars-3' }} class="h-6 w-6" />
    <span class="sr-only">Toggle sidebar</span>
</button>