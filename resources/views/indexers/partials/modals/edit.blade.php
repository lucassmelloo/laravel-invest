@foreach ( $indexers as $indexer )
<x-modal name="edit-indexer-{{$indexer->id}}" focusable>
    <form method="post" action="{{ route('indexers.update', $indexer->id) }}" class="space-y-6 px-6 pb-6">
        @csrf
        @method('patch')
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Are you sure you want to this prouct type?') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once the product type has been deleted, it will not be possible to recover it. Please type, the product type abbreviation to confirm you would like to permanently delete it.') }}
        </p>

        <div class="mt-6">

            <div>
                <x-input-label for="abbreviation" :value="__('Abbreviation')" />
                <x-text-input
                id="abbreviation"
                name="abbreviation"
                type="text"
                class="mt-1 block w-full"
                autocomplete="name"
                value="{{$indexer->abbreviation}}"
                required autofocus />
            </div>
        </div>

            <div>
                <x-input-label for="description" :value="__('Description')" />
                <x-text-input
                id="description"
                name="description"
                type="text"
                class="mt-1 block w-full"
                autocomplete="description"
                value="{{$indexer->description}}"
                required autofocus />
            </div>


        <div class="mt-6 flex justify-end">
            <div class="ml-3">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>
            </div>
            <div class="flex items-center gap-4 ml-3">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
            </div>
        </div>
    </form>
</x-modal>
@endforeach
