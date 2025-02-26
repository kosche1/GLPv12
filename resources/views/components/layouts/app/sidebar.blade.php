<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('admin.dashboard') }}" class="mr-5 flex items-center space-x-2" wire:navigate>
                <x-app-logo class="size-8" href="#"></x-app-logo>
            </a>

            <flux:navlist variant="outline">
                <flux:navlist.group heading="Platform" class="grid gap-1" collapsible icon="chevron-down" class-icon="ml-auto h-4 w-4 shrink-0 transition-transform duration-200">
                    <flux:navlist.item icon="home" :href="route('admin.dashboard')" :current="request()->routeIs('admin.dashboard')" wire:navigate>{{ __('Admin Dashboard') }}</flux:navlist.item>
                    <flux:navlist.item icon="academic-cap" :href="route('student.dashboard')" :current="request()->routeIs('student.dashboard')" wire:navigate>{{ __('Student Dashboard') }}</flux:navlist.item>
                    <flux:navlist.item icon="academic-cap" :href="route('teacher.dashboard')" :current="request()->routeIs('teacher.dashboard')" wire:navigate>{{ __('Teacher Dashboard') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            <flux:navlist variant="outline">
                <flux:navlist.group heading="Learning" class="grid gap-1" collapsible icon="chevron-down" class-icon="ml-auto h-4 w-4 shrink-0 transition-transform duration-200">
                    <flux:navlist.item icon="book-open" :href="route('courses')" :current="request()->routeIs('courses')" wire:navigate>{{ __('Courses') }}</flux:navlist.item>
                    <flux:navlist.item icon="clipboard" :href="route('assignments')" :current="request()->routeIs('assignments')" wire:navigate>{{ __('Assignments') }}</flux:navlist.item>
                    <flux:navlist.item icon="calendar" :href="route('schedule')" :current="request()->routeIs('schedule')" wire:navigate>{{ __('Schedule') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            <flux:navlist variant="outline">
                <flux:navlist.group heading="Communication" class="grid gap-1" collapsible icon="chevron-down" class-icon="ml-auto h-4 w-4 shrink-0 transition-transform duration-200">
                    <flux:navlist.item icon="chat-bubble-left-right" :href="route('messages')" :current="request()->routeIs('messages')" wire:navigate>{{ __('Messages') }}</flux:navlist.item>
                    <flux:navlist.item icon="bell" :href="route('notifications')" :current="request()->routeIs('notifications')" wire:navigate>{{ __('Notifications') }}</flux:navlist.item>
                    <flux:navlist.item icon="users" :href="route('forum')" :current="request()->routeIs('forum')" wire:navigate>{{ __('Forum') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            <flux:navlist variant="outline">
                <flux:navlist.group heading="Resources" class="grid gap-1" collapsible icon="chevron-down" class-icon="ml-auto h-4 w-4 shrink-0 transition-transform duration-200">
                    <flux:navlist.item icon="document-text" :href="route('materials')" :current="request()->routeIs('materials')" wire:navigate>{{ __('Study Materials') }}</flux:navlist.item>
                    <flux:navlist.item icon="video-camera" :href="route('recordings')" :current="request()->routeIs('recordings')" wire:navigate>{{ __('Recordings') }}</flux:navlist.item>
                    <flux:navlist.item icon="book-open" :href="route('library')" :current="request()->routeIs('library')" wire:navigate>{{ __('Library') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            <flux:navlist variant="outline">
                <flux:navlist.group heading="Settings" class="grid gap-1" collapsible icon="chevron-down" class-icon="ml-auto h-4 w-4 shrink-0 transition-transform duration-200">
                    <flux:navlist.item icon="cog" :href="route('settings.general')" :current="request()->routeIs('settings.general')" wire:navigate>{{ __('General Settings') }}</flux:navlist.item>
                    <flux:navlist.item icon="shield-check" :href="route('admin.dashboard')" :current="request()->routeIs('permissions')" wire:navigate>{{ __('Roles & Permissions') }}</flux:navlist.item>
                </flux:navlist.group>
            </flux:navlist>

            <flux:spacer />

            <!-- <flux:navlist variant="outline">
                <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
                {{ __('Repository') }}
                </flux:navlist.item>

                <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits" target="_blank">
                {{ __('Documentation') }}
                </flux:navlist.item>
            </flux:navlist> -->

            <!-- Desktop User Menu -->
            <flux:dropdown position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-left text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item href="/settings/profile" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-left text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item href="/settings/profile" icon="cog" wire:navigate>Settings</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>