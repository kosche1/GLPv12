<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 p-6">
        <!-- Header Section -->
        <div class="mb-4">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ __('Courses') }}</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Explore available courses and track your progress.</p>
        </div>

        <!-- Course Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Programming Languages Course Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                        <flux:icon name="code-bracket" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Programming Languages</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">CS201</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Learn modern programming languages including Python, JavaScript, and Java.</p>
                <div class="mt-4 space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600 dark:text-gray-400">Progress</span>
                        <span class="font-medium text-gray-700 dark:text-gray-200">60%</span>
                    </div>
                    <div class="h-2 w-full rounded-full bg-blue-100 dark:bg-blue-800">
                        <div class="h-2 rounded-full bg-blue-500" style="width: 60%"></div>
                    </div>
                </div>
            </div>

            <!-- Web Development Course Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">
                        <flux:icon name="globe-alt" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Web Development</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">CS202</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Master HTML, CSS, JavaScript, and modern web frameworks.</p>
                <div class="mt-4 space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600 dark:text-gray-400">Progress</span>
                        <span class="font-medium text-gray-700 dark:text-gray-200">45%</span>
                    </div>
                    <div class="h-2 w-full rounded-full bg-purple-100 dark:bg-purple-800">
                        <div class="h-2 rounded-full bg-purple-500" style="width: 45%"></div>
                    </div>
                </div>
            </div>

            <!-- Data Structures Course Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                        <flux:icon name="squares-2x2" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Data Structures</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">CS203</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Understand fundamental data structures and algorithms.</p>
                <div class="mt-4 space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600 dark:text-gray-400">Progress</span>
                        <span class="font-medium text-gray-700 dark:text-gray-200">75%</span>
                    </div>
                    <div class="h-2 w-full rounded-full bg-green-100 dark:bg-green-800">
                        <div class="h-2 rounded-full bg-green-500" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>