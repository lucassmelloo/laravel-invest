<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
    <div class="x-full">
        <section class="space-y-6">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Filter your fixed incomes.') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('You can register your fidex incomes and filter then.') }}
                </p>
            </header>
            <div class="flex">
                <form method="GET" action="{{ route('fixed_incomes.index') }}" class="flex w-full">
                    @csrf
                    @method('GET')
                    <div class="w-3/5 pr-3">
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" name="description" type="text" class="block w-full" required autofocus autocomplete="description" />
                    </div>
                    <div class="w-1/5 pr-3">
                        <x-input-label for="indexer" :value="__('Indexers')" />
                        <select id="indexer" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose indexer</option>
                            @foreach ( $indexers as $indexer)
                                <option value="{{$indexer->id}}">{{$indexer->abbreviation}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-1/5 pr-3">
                        <x-input-label for="productType" :value="__('Product Type')" />
                        <select id="productType" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose product type</option>
                            @foreach ( $product_types as $product_type)
                                <option value="{{$product_type->id}}">{{$product_type->abbreviation}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center gap-4 mt-5 pr-3">
                        <x-secondary-button>{{ __('Filter') }}</x-primary-button>
                    </div>
                </form>
                <div class="flex items-center gap-4 mt-5 pr-3">
                    <x-primary-button>{{ __('New') }}</x-primary-button>
                </div>
            </div>
        </section>
    </div>
</div>
