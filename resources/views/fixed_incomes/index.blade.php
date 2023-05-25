<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fixed Incomes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl max-h mx-auto sm:px-6 lg:px-8 space-y-6">
            @include('components.error-card')
            @include('fixed_incomes.partials.components.create')
            @include('fixed_incomes.partials.components.filter')
            @include('fixed_incomes.partials.components.cards')
        </div>
    </div>
    @livewireScripts
    @livewireStyles
    <livewire:modals.audit/>
</x-app-layout>
