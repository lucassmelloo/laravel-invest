<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Product Type Registration') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('You can register all kinds of products and indexes of your investments.') }}
        </p>
    </header>
    <form method="GET" action="{{ route('product_type.create') }}" class="mt-6 space-y-6">
        @csrf
        @method('GET')
        <div>
            <x-input-label for="abreviation" :value="__('Abreviation')" />
            <x-text-input id="abreviation" name="abreviation" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('abreviation')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" required autofocus autocomplete="description" />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Create') }}</x-primary-button>

            @if (session('status') === 'productType-created')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Created.') }}</p>
            @endif
        </div>
    </form>
</section>
