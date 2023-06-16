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
            <form method="POST" action="{{ route('product_type.store') }}" class="mt-6 space-y-6">
                @csrf
                @method('POST')
                <div>
                    <x-input-label for="abbreviation" :value="__('Abbreviation')" />
                    <x-text-input id="abbreviation" name="abbreviation" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
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
