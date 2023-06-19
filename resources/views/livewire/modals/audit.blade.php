<div class="">
    <button
        title="Audit"
        wire:click="$set('modal', true)"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:bg-amber-300 hover:fill-amber-300 rounded-lg p-0.5 transition duration-300">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
        </svg>
    </button>

    <x-modal wire:model="modal"  title="Audit: {{$indexer->description}}" :scrollable="true" >
        <div class="p-6">
            @csrf
            @method('delete')
            <h2 class="text-lg font-medium text-gray-900">
                <strong>{{ __('Audit: ') }}</strong>{{__($indexer->description)}}
            </h2>

            <p class="my-1 text-sm text-gray-600">
                {{
                    __('Once the product type has been deleted, it will not be possible to recover it.
                    Please type, the product type abbreviation to confirm you would like to permanently delete it.')
                }}
            </p>
            <div>
                @foreach ($indexer->audits->reverse() as $audit)
                    @if($audit->event !== 'created')
                        <h1 class="mt-5"><strong>{{ucfirst($audit->event) . ' by: ' }}</strong>
                            {{$audit->user->name .  ' (' .date_format($audit->created_at,'Y/m/d h:m:s') . ')'}}
                        </h1>

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
                                <tr class="bg-white border-b hover:bg-gray-200">
                                    <td class="px-6 py-4"><strong>{{$key}}</strong></td>
                                    <td class="px-6 py-4">{{$content['new']}}</td>
                                    <td class="px-6 py-4">{{data_get($content,'old')}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h1 class="my-3">
                            <strong>{{ucfirst($audit->event)}}</strong>
                            {{' at: ' . date_format($audit->created_at,'Y/m/d h:m:s')}}
                        </h1>
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
</div>
