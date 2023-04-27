
@if ($errors->isNotEmpty())
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            <section class="space-y-6">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Errors') }}
                    </h2>
                </header>
                @foreach ($errors->all() as $error )
                        <strong class="text-red-600">{{ $error }}</strong>
                @endforeach
            </section>
        </div>
    </div>

@endif
