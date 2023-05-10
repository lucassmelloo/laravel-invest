<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
    <div class="max-w-xl">
        <section class="space-y-6">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Product Type Registration') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('You can register all kinds of products and indexes of your investments.') }}
                </p>
            </header>
            <form method="GET" action="{{ route('product_type.store') }}" class="mt-6 space-y-6">
                @csrf
                @method('GET')
                <div>
                    <x-input-label for="abreviation" :value="__('Abreviation')" />
                    <x-text-input id="abreviation" name="abreviation" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" required autofocus autocomplete="description" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Create') }}</x-primary-button>
                </div>
            </form>
        </section>
    </div>
</div>