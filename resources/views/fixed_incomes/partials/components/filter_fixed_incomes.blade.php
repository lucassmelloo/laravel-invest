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
            <form method="GET" action="{{ route('product_type.create') }}" class="flex ">
                @csrf
                @method('GET')
                <div class="w-1/2 px-3">
                    <x-input-label for="indexer" :value="__('Indexers')" />
                    <select id="indexer" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option selected>Choose indexer</option>
                        @foreach ( $indexers as $indexer)  
                            <option value="{{$indexer->id}}">{{$indexer->abreviation}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/2 px-3">
                    <x-input-label for="productType" :value="__('Product Type')" />
                    <select id="productType" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                        <option selected>Choose product type</option>
                        @foreach ( $product_types as $product_type)  
                            <option value="{{$product_type->id}}">{{$product_type->abreviation}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" required autofocus autocomplete="description" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Filter') }}</x-primary-button>
                </div>
            </form>
        </section>
    </div>
</div>