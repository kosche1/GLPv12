<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 p-6">
        <!-- Header Section -->
        <div class="mb-4">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ __('Account Management') }}</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Manage your profile, settings, and account preferences.</p>
        </div>

        <!-- Profile Card Section -->
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-6 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex flex-col items-center">
                    <div class="mb-4 relative flex h-24 w-24 shrink-0 overflow-hidden rounded-full">
                        <span class="flex h-full w-full items-center justify-center rounded-full bg-neutral-200 text-2xl font-semibold text-black dark:bg-neutral-700 dark:text-white">
                            {{ auth()->user()->initials() }}
                        </span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ auth()->user()->name }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ auth()->user()->email }}</p>
                </div>
            </div>

            <!-- Account Settings Section -->
            <div class="lg:col-span-2 relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-6 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <h3 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">{{ __('Account Settings') }}</h3>
                <div class="space-y-4">
                    <!-- Password Change -->
                    <div class="flex items-center justify-between p-4 rounded-lg bg-neutral-50 dark:bg-zinc-700">
                        <div>
                            <h4 class="font-medium text-gray-900 dark:text-white">{{ __('Password') }}</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Change your account password') }}</p>
                        </div>
                        <button class="px-4 py-2 text-sm font-medium text-teal-600 hover:text-teal-500 dark:text-teal-400 dark:hover:text-teal-300">
                            {{ __('Update') }}
                        </button>
                    </div>

                    <!-- Email Preferences -->
                    <div class="flex items-center justify-between p-4 rounded-lg bg-neutral-50 dark:bg-zinc-700">
                        <div>
                            <h4 class="font-medium text-gray-900 dark:text-white">{{ __('Email Preferences') }}</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Manage your email notifications') }}</p>
                        </div>
                        <button class="px-4 py-2 text-sm font-medium text-teal-600 hover:text-teal-500 dark:text-teal-400 dark:hover:text-teal-300">
                            {{ __('Configure') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Roles and Permissions Section -->
        <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-6 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
            <h3 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">{{ __('Roles & Permissions') }}</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 rounded-lg bg-neutral-50 dark:bg-zinc-700">
                    <div>
                        <h4 class="font-medium text-gray-900 dark:text-white">{{ __('Current Role') }}</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ auth()->user()->roles->pluck('name')->implode(', ') ?: __('No roles assigned') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>