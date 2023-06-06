<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Indexers') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @include('components.error-card')

            @include('indexers.partials.components.create')

            @include('indexers.partials.components.list')

            <livewire:modals.audit-modal/>

        </div>
    </div>
</x-app-layout>
