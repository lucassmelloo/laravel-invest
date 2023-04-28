@foreach ( $product_types as $product_type )
<x-modal name="audit-productType-{{$product_type->id}}" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <div class="p-6">
        @csrf
        @method('delete')
        <h2 class="text-lg font-medium text-gray-900">
            <strong>{{ __('Audit: ') }}</strong>{{__($product_type->description)}}
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
                placeholder="{{ $product_type->abreviation}}"
            />

            <x-input-error :messages="$errors->userDeletion->get('abreviation')" class="mt-2" />
        </div>
        
        <div class="mt-6 flex justify-end">
            <x-primary-button x-on:click="$dispatch('close')">
                {{ __('Back') }}
            </x-primary-button>
        </div>
    </div>
</x-modal>    
@endforeach