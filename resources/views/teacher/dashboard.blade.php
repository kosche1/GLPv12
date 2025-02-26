<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 p-6">
        <!-- Welcome Section -->
        <div class="mb-4">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Welcome back, {{ auth()->user()->name }}!</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Here's your teaching dashboard overview.</p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
            <!-- Total Classes Card -->
            <div class="sm:col-span-2 md:col-span-1 relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Classes</p>
                        <p class="text-2xl font-semibold text-gray-700 dark:text-gray-200">8</p>
                    </div>
                </div>
            </div>

            <!-- Active Students Card -->
            <div class="sm:col-span-2 md:col-span-1 relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Active Students</p>
                        <p class="text-2xl font-semibold text-gray-700 dark:text-gray-200">156</p>
                    </div>
                </div>
            </div>

            <!-- Assignments Card -->
            <div class="sm:col-span-2 md:col-span-1 relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full dark:text-purple-100 dark:bg-purple-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Assignments</p>
                        <p class="text-2xl font-semibold text-gray-700 dark:text-gray-200">32</p>
                    </div>
                </div>
            </div>

            <!-- Average Performance Card -->
            <div class="sm:col-span-2 relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-yellow-500 bg-yellow-100 rounded-full dark:text-yellow-100 dark:bg-yellow-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Average Class Performance</p>
                        <p class="text-2xl font-semibold text-gray-700 dark:text-gray-200">85%</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Middle Section Grid -->
        <div class="grid gap-4 md:grid-cols-2">
            <!-- Class Progress -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <h2 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Class Progress</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Class A Progress</span>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">92%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 92%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">Class B Progress</span>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-300">78%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 78%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Classes -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <h2 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Upcoming Classes</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-white">Advanced Mathematics</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Class A</p>
                            </div>
                        </div>
                        <span class="text-xs font-medium text-red-500">In 1 hour</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0">
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-white">Physics Lab</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">Class B</p>
                            </div>
                        </div>
                        <span class="text-xs font-medium text-yellow-500">Tomorrow</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="relative flex-1 overflow-hidden rounded-xl border border-neutral-200 bg-white p-6 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Recent Activity</h2>
                <button class="text-sm text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">View all</button>
            </div>
            <div class="space-y-4">
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-100 text-blue-500 dark:bg-blue-500 dark:text-blue-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 space-y-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white">New Assignment Submitted</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">John Doe submitted Physics Assignment #3</p>
                        <p class="text-xs text-gray-400 dark:text-gray-500">2 hours ago</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="flex-shrink-0">
                        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-green-100 text-green-500 dark:bg-green-500 dark:text-green-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex-1 space-y-1">
                        <p class="text-sm font-medium text-gray-900 dark:text-white">Class Materials Updated</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Updated materials for Advanced Mathematics</p>
                        <p class="text-xs text-gray-400 dark:text-gray-500">5 hours ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>