<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('drinks.store') }}">
                        @csrf
                        @method('post')
                        <div></div>
                        <div class="pt-4 pl-4">Pealkiri</div>
                        <input type="text" name="title" required/> 
                        <div>Kirjeldus</div>
                        <input type="text" name="description" required/>
                        <div>Pildi aadress</div>
                        <input type="text" name="image" required/> 
                        <div>Hind</div>
                        <input type="number" name="price" placeholder="1.1" required/> 
                        <div>Suurus</div>
                        <input type="text" name="size" required/>
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                            <x-input-error :messages="$errors->get('size')" class="mt-2" />
                        <div class="mt-4 space-x-2">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <a href="{{ route('drinks.index') }}">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
