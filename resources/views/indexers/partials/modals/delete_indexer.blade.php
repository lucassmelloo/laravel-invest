@foreach ( $indexers as $indexer )
<x-modal name="confirm-indexer-deletion-{{$indexer->id}}" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('product_type.destroy', $indexer->id) }}" class="p-6">
        @csrf
        @method('delete')
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Are you sure you want to delete this prouct type?') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once the product type has been deleted, it will not be possible to recover it. Please type, the product type abbreviation to confirm you would like to permanently delete it.') }}
        </p>

        <div class="mt-6">
            <x-input-label for="abreviation" value="{{ __('Abreviation') }}" class="sr-only" />

            <x-text-input
                id="abreviation"
                name="abreviation"
                type="text"
                class="mt-1 block w-3/4"
                placeholder="{{ $indexer->abreviation}}"
            />

            <x-input-error :messages="$errors->userDeletion->get('abreviation')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3">
                {{ __('Delete Product Type') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>    
@endforeach