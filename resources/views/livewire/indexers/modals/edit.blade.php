<div>
    <button
        title="Edit"
        wire:click="openModal"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 hover:bg-amber-300 hover:fill-amber-300 rounded-lg p-0.5 transition duration-300">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
    </button>

    <x-modal wire:model="modal" name="indexer-edit"  :show="$modal" focusable>
        <div class="space-y-6 px-6 pb-6">

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Are you sure you want to this prouct type?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Once the product type has been deleted, it will not be possible to recover it. Please type, the product type abbreviation to confirm you would like to permanently delete it.') }}
            </p>
            {{-- @if($indexer)
                @dd($modal, $indexer)
            @endif --}}
            <div class="mt-6">

                <div>
                    <x-input-label for="abbreviation" :value="__('Abbreviation')" />
                    <x-text-input
                        id="abbreviation"
                        name="abbreviation"
                        type="text"
                        class="mt-1 block w-full"
                        autocomplete="name"
                        value="{{data_get($indexer,'abbreviation')}}"
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
                    value="{{data_get($indexer,'description')}}"
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
        </div>
    </x-modal>

</div>
