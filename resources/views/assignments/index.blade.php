<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 p-6">
        <!-- Header Section -->
        <div class="mb-4">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ __('Assignments') }}</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">View and manage your course assignments.</p>
        </div>

        <!-- Assignment Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Assignment Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                        <flux:icon name="clipboard" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Programming Assignment 1</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">CS101</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Implement a basic calculator using Python.</p>
                <div class="mt-4 space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600 dark:text-gray-400">Due Date</span>
                        <span class="font-medium text-gray-700 dark:text-gray-200">March 15, 2024</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600 dark:text-gray-400">Status</span>
                        <span class="font-medium text-green-600 dark:text-green-400">In Progress</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>