<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 p-6">
        <!-- Header Section -->
        <div class="mb-4">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ __('Course Recordings') }}</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Access recorded lectures and video materials.</p>
        </div>

        <!-- Recordings Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Introduction to Programming Recording -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-red-500 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-500">
                        <x-flux.icon name="video-camera" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Introduction to Programming</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Lecture 1</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Basic concepts and introduction to programming fundamentals.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Duration: 1h 15m</span>
                    <button class="px-4 py-2 text-sm font-medium text-red-600 hover:text-red-500 dark:text-red-400 dark:hover:text-red-300">
                        Watch Now
                    </button>
                </div>
            </div>

            <!-- Data Structures Recording -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                        <x-flux.icon name="video-camera" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Data Structures</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Lecture 2</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Understanding arrays, linked lists, and basic data structures.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Duration: 1h 30m</span>
                    <button class="px-4 py-2 text-sm font-medium text-orange-600 hover:text-orange-500 dark:text-orange-400 dark:hover:text-orange-300">
                        Watch Now
                    </button>
                </div>
            </div>

            <!-- Web Development Recording -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-indigo-500 bg-indigo-100 rounded-full dark:text-indigo-100 dark:bg-indigo-500">
                        <x-flux.icon name="video-camera" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Web Development</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Lecture 3</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Introduction to HTML, CSS, and JavaScript basics.</p>
                <div class="mt-4 flex justify-between items-center">
                    <span class="text-sm text-gray-600 dark:text-gray-400">Duration: 1h 45m</span>
                    <button class="px-4 py-2 text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300">
                        Watch Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>