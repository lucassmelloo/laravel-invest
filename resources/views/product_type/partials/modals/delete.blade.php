@foreach ( $product_types as $product_type )
<x-modal name="confirm-productType-deletion-{{$product_type->id}}" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('product_type.destroy', $product_type->id) }}" class="p-6">
        @csrf
        @method('delete')
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Are you sure you want to delete this prouct type?') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once the product type has been deleted, it will not be possible to recover it. Please type, the product type abbreviation to confirm you would like to permanently delete it.') }}
        </p>

        <div class="mt-6">
            <x-input-label for="abbreviation" value="{{ __('Abbreviation') }}" class="sr-only" />

            <x-text-input
                id="abbreviation"
                name="abbreviation"
                type="text"
                class="mt-1 block w-3/4"
                placeholder="{{ $product_type->abbreviation}}"
            />

            <x-input-error :messages="$errors->userDeletion->get('abbreviation')" class="mt-2" />
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
