
<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Indexers Resgisters') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('These are the records of registered Indexers.') }}
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
                    @foreach ($indexers as $key => $index)
                        <tr class="bg-white border-b hover:bg-gray-100">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$index->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{$index->abreviation}}
                            </td>
                            <td class="px-6 py-4">
                                {{$index->description}}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex ">
                                    <button  
                                    title="Edit"
                                    x-data="{index: {{$index}}}"
                                    x-on:click.prevent="$dispatch('open-modal', 'edit-indexer-{{$index->id}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:bg-amber-300 hover:fill-amber-300 rounded-lg p-0.5 transition duration-300">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
            
                                    <button 
                                    title="Trace"
                                    x-data="{index: {{$index}}}"
                                    x-on:click.prevent="$dispatch('open-modal', 'audit-indexer-{{$index->id}}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:bg-amber-300 hover:fill-amber-300 rounded-lg p-0.5 transition duration-300">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                        </svg>
                                    </button>
                                    <button  
                                    title="Delete" 
                                    x-data="{index: {{$index}}}"
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-indexer-deletion-{{$index->id}}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:bg-amber-300 hover:fill-amber-300 rounded-lg p-0.5 transition duration-300">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>                                          
                                    <button  
                                    title="Delete" 
                                    x-data="{index: {{$index}}}"
                                    wire:click="openAuditModal">
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
            <livewire:modals.audit-modal>
            @include('indexers.partials.modals.delete')
            @include('indexers.partials.modals.edit')
            @include('indexers.partials.modals.audit')
            @livewire('modals.audit-modal')
        </section>
    </div>
