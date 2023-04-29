@foreach ( $product_types as $product_type )
<x-modal name="audit-productType-{{$product_type->id}}" focusable>
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
            @foreach ($product_type->audits as $audit)
                <h1>{{ucfirst( $audit->getMetadata()['audit_event']) . ' at: ' . $audit->getMetadata()['audit_created_at']}}</h1>
            @endforeach
        </div>
        
        <div class="mt-6 flex justify-end">
            <x-primary-button x-on:click="$dispatch('close')">
                {{ __('Back') }}
            </x-primary-button>
        </div>
    </div>
</x-modal>    
@endforeach