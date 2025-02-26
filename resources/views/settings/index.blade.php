<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 p-6">
        <!-- Header Section -->
        <div class="mb-4">
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ __('Settings') }}</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Manage your account preferences and configurations.</p>
        </div>

        <!-- Settings Grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Profile Settings Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-violet-500 bg-violet-100 rounded-full dark:text-violet-100 dark:bg-violet-500">
                        <flux:icon name="user-circle" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Profile Settings</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Personal Information</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Update your personal information and profile details.</p>
                <div class="mt-4 flex justify-end">
                    <button class="px-4 py-2 text-sm font-medium text-violet-600 hover:text-violet-500 dark:text-violet-400 dark:hover:text-violet-300">
                        Edit Profile
                    </button>
                </div>
            </div>

            <!-- Notification Settings Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-fuchsia-500 bg-fuchsia-100 rounded-full dark:text-fuchsia-100 dark:bg-fuchsia-500">
                        <flux:icon name="bell" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Notifications</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Alert Preferences</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Configure your notification preferences and alerts.</p>
                <div class="mt-4 flex justify-end">
                    <button class="px-4 py-2 text-sm font-medium text-fuchsia-600 hover:text-fuchsia-500 dark:text-fuchsia-400 dark:hover:text-fuchsia-300">
                        Configure
                    </button>
                </div>
            </div>

            <!-- Privacy Settings Card -->
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-zinc-800 transition-all duration-300 ease-in-out hover:shadow-lg hover:scale-105 hover:border-neutral-300 dark:hover:border-neutral-600 hover:bg-neutral-50 dark:hover:bg-zinc-700">
                <div class="flex items-center gap-4">
                    <div class="p-3 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                        <flux:icon name="shield-check" class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-700 dark:text-gray-200">Privacy & Security</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">Security Settings</p>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">Manage your privacy settings and security preferences.</p>
                <div class="mt-4 flex justify-end">
                    <button class="px-4 py-2 text-sm font-medium text-teal-600 hover:text-teal-500 dark:text-teal-400 dark:hover:text-teal-300">
                        Manage
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>