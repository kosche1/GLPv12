<x-settings.layout>
    <x-slot:heading>{{ __('General Settings') }}</x-slot:heading>
    <x-slot:subheading>{{ __('Configure your general application preferences.') }}</x-slot:subheading>

    <div class="space-y-6">
        <flux:card>
            <flux:card.header>
                <flux:card.title>{{ __('Notifications') }}</flux:card.title>
                <flux:card.description>{{ __('Manage your notification preferences.') }}</flux:card.description>
            </flux:card.header>

            <flux:card.content>
                <div class="space-y-4">
                    <flux:toggle label="{{ __('Email Notifications') }}" description="{{ __('Receive email notifications for important updates.') }}" wire:model="emailNotifications" />
                    <flux:toggle label="{{ __('Browser Notifications') }}" description="{{ __('Receive browser notifications when you are online.') }}" wire:model="browserNotifications" />
                </div>
            </flux:card.content>
        </flux:card>

        <flux:card>
            <flux:card.header>
                <flux:card.title>{{ __('Language & Region') }}</flux:card.title>
                <flux:card.description>{{ __('Set your preferred language and regional settings.') }}</flux:card.description>
            </flux:card.header>

            <flux:card.content>
                <div class="space-y-4">
                    <flux:select label="{{ __('Language') }}" wire:model="language">
                        <option value="en">{{ __('English') }}</option>
                        <option value="es">{{ __('Spanish') }}</option>
                        <option value="fr">{{ __('French') }}</option>
                    </flux:select>

                    <flux:select label="{{ __('Time Zone') }}" wire:model="timezone">
                        <option value="UTC">UTC (Coordinated Universal Time)</option>
                        <option value="America/New_York">Eastern Time (ET)</option>
                        <option value="Europe/London">London (GMT)</option>
                        <option value="Asia/Tokyo">Japan (JST)</option>
                        <option value="Asia/Shanghai">China (CST)</option>
                    </flux:select>

                    <flux:select label="{{ __('Date Format') }}" wire:model="dateFormat">
                        <option value="Y-m-d">YYYY-MM-DD</option>
                        <option value="d/m/Y">DD/MM/YYYY</option>
                        <option value="m/d/Y">MM/DD/YYYY</option>
                    </flux:select>
                </div>
            </flux:card.content>
        </flux:card>

        <div class="flex justify-end">
            <flux:button type="submit" wire:click="save">{{ __('Save Changes') }}</flux:button>
        </div>
    </div>
</x-settings.layout>