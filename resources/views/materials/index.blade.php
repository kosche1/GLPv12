<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 p-6">
        <!-- Header Section -->
        <div class="mb-4">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ __('Study Materials') }}</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Access and manage your course study materials.</p>
            <div class="mt-4">
                <flux:button icon="plus" variant="outline">{{ __('Upload Material') }}</flux:button>
            </div>
        </div>

        <!-- Materials Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Study Material Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                        <flux:icon name="document-text" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Python Basics Guide</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">CS101</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Comprehensive guide to Python programming fundamentals.</p>
                <div class="mt-4 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <span class="text-sm text-gray-600 dark:text-gray-400">PDF - 2.5MB</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">•</span>
                        <flux:badge variant="outline" color="green">Available</flux:badge>
                    </div>
                    <button class="px-4 py-2 text-sm font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
                        Download
                    </button>
                </div>
            </div>

            <!-- Add more study material cards here -->
        </div>
    </div>
</x-layouts.app.sidebar>