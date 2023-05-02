@foreach ( $product_types as $product_type )
<x-modal name="audit-productType-{{$product_type->id}}" title="Audit: {{$product_type->description}}" :scrollable="true" >
    <div class="p-6">
        @csrf
        @method('delete')
        <h2 class="text-lg font-medium text-gray-900">
            <strong>{{ __('Audit: ') }}</strong>{{__($product_type->description)}}
        </h2>

        <p class="my-1 text-sm text-gray-600">
            {{ __('Once the product type has been deleted, it will not be possible to recover it. Please type, the product type abbreviation to confirm you would like to permanently delete it.') }}
        </p>
        <div>
            @foreach ($product_type->audits->reverse() as $audit)
                @if($audit->event != 'created')
                    <h1 class="mt-5"><strong>{{ucfirst($audit->event)}}</strong> {{' at: ' . date_format($audit->created_at,'Y/m/d h:m:s')}}</h1>
                    <table class="w-full text-sm text-left text-gray-500 table-fixed">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="w-1/5 px-6 py-3">
                                    Column
                                </th>
                                <th scope="col" class="w-2/5 px-6 py-3">
                                    New value
                                </th>
                                <th scope="col" class="w-2/5 px-6 py-3">
                                    Old value
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($audit->getModified() as $key => $content)
                            {{-- @dd($content) --}}
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4"><strong>{{$key}}</strong></td>
                                <td class="px-6 py-4">{{$content['new']}}</td>
                                <td class="px-6 py-4">{{data_get($content,'old')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h1 class="my-3"><strong>{{ucfirst($audit->event)}}</strong> {{' at: ' . date_format($audit->created_at,'Y/m/d h:m:s')}}</h1>
                    <table class="w-full text-sm text-left text-gray-500 table-fixed">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="w-1/5 px-6 py-3">
                                    Column
                                </th>
                                <th scope="col" class="w-4/5 px-6 py-3">
                                    New value
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($audit->getModified() as $key => $content)
                            {{-- @dd($content) --}}
                            <tr class="bg-white border-b hover:bg-gray-100">
                                <td class="px-6 py-4"><strong>{{$key}}</strong></td>
                                <td class="px-6 py-4">{{$content['new']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                
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