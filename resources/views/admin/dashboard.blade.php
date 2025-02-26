<x-layouts.app>
    <div class="p-6">
        <!-- Dashboard Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Admin Dashboard</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Manage your application's key metrics and resources</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <!-- Users Card -->
            <div class="p-4 bg-white rounded-lg shadow-xs dark:bg-zinc-800">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                        <flux:icon name="users" class="w-5 h-5" />
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Total Users
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            {{ App\Models\User::count() }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Revenue Card -->
            <div class="p-4 bg-white rounded-lg shadow-xs dark:bg-zinc-800">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                        <flux:icon name="currency-dollar" class="w-5 h-5" />
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Revenue
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            $46,760.89
                        </p>
                    </div>
                </div>
            </div>

            <!-- New Orders -->
            <div class="p-4 bg-white rounded-lg shadow-xs dark:bg-zinc-800">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                        <flux:icon name="shopping-cart" class="w-5 h-5" />
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            New orders
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            376
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pending Contacts -->
            <div class="p-4 bg-white rounded-lg shadow-xs dark:bg-zinc-800">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                        <flux:icon name="envelope" class="w-5 h-5" />
                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Pending contacts
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            35
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="grid gap-6 mb-8 md:grid-cols-2">
            <!-- Bar Chart -->
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-zinc-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Revenue
                </h4>
                <div class="h-64">
                    <!-- Add your chart component/library here -->
                    <div class="flex items-center justify-center h-full text-gray-500 dark:text-gray-400">
                        Chart placeholder
                    </div>
                </div>
            </div>

            <!-- Doughnut Chart -->
            <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-zinc-800">
                <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                    Traffic
                </h4>
                <div class="h-64">
                    <!-- Add your chart component/library here -->
                    <div class="flex items-center justify-center h-full text-gray-500 dark:text-gray-400">
                        Chart placeholder
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-zinc-800">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Recent Activity
            </h4>
            <div class="w-full overflow-hidden rounded-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-zinc-800">
                                <th class="px-4 py-3">Client</th>
                                <th class="px-4 py-3">Amount</th>
                                <th class="px-4 py-3">Status</th>
                                <th class="px-4 py-3">Date</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-zinc-800">
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <div class="absolute inset-0 rounded-full shadow-inner"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">John Doe</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    $ 863.45
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        Approved
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    6/10/2024
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
