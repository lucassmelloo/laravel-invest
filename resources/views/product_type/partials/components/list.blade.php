
<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Product Type Resgisters') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('These are the records of registered product types.') }}
        </p>
    </header>
        @csrf
        @method('PATCH')
        <div class="flex overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Abreviation
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product_types as $key => $product_type)
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$product_type->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$product_type->abreviation}}
                            </td>
                            <td class="px-6 py-4">
                                {{$product_type->description}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex ">
                                    <button  
                                    title="Edit"
                                    x-data="{product_type: {{$product_type}}}"
                                    x-on:click.prevent="$dispatch('open-modal', 'edit-productType-{{$product_type->id}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:bg-amber-300 hover:fill-amber-300 rounded-lg p-0.5 transition duration-300">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
            
                                    <button title="Informations">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:bg-amber-300 hover:fill-amber-300 rounded-lg p-0.5 transition duration-300">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                        </svg>
                                    </button>
                                    <button  
                                    title="Delete" 
                                    x-data="{product_type: {{$product_type}}}"
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-productType-deletion-{{$product_type->id}}')">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:bg-amber-300 hover:fill-amber-300 rounded-lg p-0.5 transition duration-300">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>                                          
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('product_type.partials.modals.delete_product_type')
            @include('product_type.partials.modals.edit_product_type')
        </section>
    </div>
