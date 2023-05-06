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
            <form method="GET" action="{{ route('fixed_incomes.create') }}" class="mt-6 space-y-6">
                @csrf
                @method('GET')
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
                            <option value="{{$product_type->id}}">{{$product_type->abreviation}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="flex space-x-3">
                    <div class="w-1/2">
                        <x-input-label for="indexer" :value="__('Indexers')" />
                        <select id="indexer" name="indexer" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose Indexer</option>
                            @foreach ( $indexers as $indexer)  
                            <option value="{{$indexer->id}}">{{$indexer->abreviation}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-1/2">
                    {{-- <x-input-label for="indexer" :value="__('Indexers')" />
                        <select id="indexer" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option selected>Choose Indexer</option>
                            @foreach ( $indexers as $indexer)  
                            <option value="{{$indexer->id}}">{{$indexer->abreviation}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                </div>

                <div class="flex items-center gap-4 mt-5 pr-3">
                    <x-primary-button>{{ __('New') }}</x-primary-button>
                </div>
            </form>
        </section>
    </div>
</div>