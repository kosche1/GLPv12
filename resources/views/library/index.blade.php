<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 p-6">
        <!-- Header Section -->
        <div class="mb-4">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ __('Library') }}</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Browse through our collection of educational resources and references.</p>
        </div>

        <!-- Library Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Programming Books Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-cyan-500 bg-cyan-100 rounded-full dark:text-cyan-100 dark:bg-cyan-500">
                        <flux:icon name="book-open" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Programming Books</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Digital Collection</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Access our collection of programming textbooks and reference materials.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">25 Books Available</span>
                    <button class="px-4 py-2 text-sm font-medium text-cyan-600 hover:text-cyan-500 dark:text-cyan-400 dark:hover:text-cyan-300">
                        Browse Books
                    </button>
                </div>
            </div>

            <!-- Research Papers Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-rose-500 bg-rose-100 rounded-full dark:text-rose-100 dark:bg-rose-500">
                        <flux:icon name="document" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Research Papers</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Academic Articles</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Latest research papers and academic publications in computer science.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">50+ Papers</span>
                    <button class="px-4 py-2 text-sm font-medium text-rose-600 hover:text-rose-500 dark:text-rose-400 dark:hover:text-rose-300">
                        View Papers
                    </button>
                </div>
            </div>

            <!-- Online Resources Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-amber-500 bg-amber-100 rounded-full dark:text-amber-100 dark:bg-amber-500">
                        <flux:icon name="globe-alt" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Online Resources</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Web References</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Curated collection of online tutorials, documentation, and learning resources.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">100+ Links</span>
                    <button class="px-4 py-2 text-sm font-medium text-amber-600 hover:text-amber-500 dark:text-amber-400 dark:hover:text-amber-300">
                        Explore
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>