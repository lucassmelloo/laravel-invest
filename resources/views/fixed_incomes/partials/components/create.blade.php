<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
    <div class="max-w-xl">
        <section class="space-y-6">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Create your own fixed income investments.') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('You can register your fidex incomes and filter then.') }}
                </p>
            </header>
            <form method="POST" action="{{ route('fixed_incomes.store') }}" class="mt-6 space-y-6">
                @csrf
                @method('POST')
                <div >
                    <x-input-label for="Title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="block w-full" required autofocus autocomplete="description" />
                </div>
                <div class="flex space-x-3">
                    <div class="w-1/2">
                        <x-input-label for="applicationDate" :value="__('Application date')" />
                        <x-text-input id="applicationDate" name="application_date" type="date" class="block w-full" required autofocus autocomplete="description" />
                    </div>

                    <div class="w-1/2">
                        <x-input-label for="dueDate" :value="__('Due date')" />
                        <x-text-input id="dueDate" name="due_date" type="date" class="block w-full" required autofocus autocomplete="description" />
                    </div>
                </div>
                <div class="flex space-x-3">

                    <div class="w-1/2">
                        <x-input-label for="appliedValue" :value="__('Applied value')" />
                        <x-text-input id="appliedValue" name="applied_value" type="number" step="0.01" class="block w-full" required autofocus autocomplete="description" />
                    </div>
                    <div class="w-1/2">
                        <x-input-label for="productType" :value="__('Product Type')" />
                        <select id="productType" name="product_type_id" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose Product Type</option>
                            @foreach ( $product_types as $product_type)
                            <option value="{{$product_type->id}}">{{$product_type->abbreviation}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex space-x-3">
                    <div class="w-3/4">
                        <x-input-label for="indexers[firstIndexer][id]" :value="__('First Indexer')" />
                        <select id="indexers[firstIndexer][id]" name="indexers[firstIndexer][id]" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose Indexer</option>
                            @foreach ( $indexers as $indexer)
                            <option value="{{$indexer->id}}">{{$indexer->abbreviation}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-1/4">
                        <x-input-label for="indexers[firstIndexer][value]" :value="__('Value')" />
                        <x-text-input id="indexers[firstIndexer][value]" name="indexers[firstIndexer][value]" type="number" step="0.01" class="block w-full" required autofocus autocomplete="description" />
                    </div>
                </div>
                <div class="flex space-x-3">
                    <div class="w-3/4">
                        <x-input-label for="indexers[secondIndexer][id]" :value="__('Second Indexer')" />
                        <select id="indexers[secondIndexer][id]" name="indexers[secondIndexer][id]" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected value="" >Choose Indexer</option>
                            @foreach ( $indexers as $indexer)
                            <option value="{{$indexer->id}}">{{$indexer->abbreviation}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-1/4">
                        <x-input-label for="indexers[secondIndexer][value]" :value="__('Value')" />
                        <x-text-input id="indexers[secondIndexer][value]" name="indexers[secondIndexer][value]" type="number" step="0.01" class="block w-full" autofocus autocomplete="description" />
                    </div>
                </div>

                <div class="items-center gap-4 mt-5 pr-3">
                    <x-primary-button>{{ __('New') }}</x-primary-button>
                </div>
            </form>
        </section>
    </div>
</div>
