<x-app-layout>
    <div class="min-h-screen">
        @include('layouts.navigation')

        {{-- title --}}
        <x-carousel title="Tambah Berita"></x-carousel>

        <div class="flex p-10">    
            <form action="/berita" method="POST" class="w-1/2 mx-auto">
                @csrf
                <div class="flex flex-col w-full justify-center items-stretch p-10 pt-0 gap-4">
                    
                    <!-- author -->
                    <div class="w-full">
                        <x-input-label for="author" :value="__('Author')" />
                        <x-text-input id="author" class="block mt-1 w-full" type="text" name="author" :value="old('author')" required/>
                        <x-input-error :messages="$errors->get('author')" class="mt-2" />
                    </div>
                    
                    <!-- Judul -->
                    <div class="w-full">
                        <x-input-label for="judul" :value="__('Judul')" />
                        <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul" :value="old('judul')" required />
                        <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                    </div>
                    
                    <!-- references -->
                    <div class="w-full">
                        <x-input-label for="references" :value="__('References')" />
                        <x-text-input id="references" class="block mt-1 w-full" type="text" name="references" :value="old('references')" required />
                        <x-input-error :messages="$errors->get('references')" class="mt-2" />
                    </div>

                    <!-- excerpt -->
                    <div class="w-full">
                        <x-input-label for="excerpt" :value="__('Excerpt')" />
                        <textarea name="excerpt" id="excerpt" rows="5" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"></textarea>
                        <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
                    </div>
    
                    {{-- button --}}
                    <x-primary-button class="w-1/2 mx-auto justify-center">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>