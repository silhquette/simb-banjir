<x-guest-layout>
    <div class="min-h-screen">
        @include('layouts.navigation')

        {{-- title --}}
        <x-carousel title="Kontak Kami"></x-carousel>

        <div class="flex p-10">
            <div class="rounded-xl bg-white p-4 shadow-lg w-1/2 flex flex-col gap-4">
                <p class="font-semibold text-lg">Tentang Kami</p>
                <p>Pusat Informasi Gempa Bumi merupakan lembaga penanggulangan bencana yang berkedudukan di bawah dan bertanggung jawab kepada Gubernur. BPBD dipimpin oleh seorang kepala, yang dijabat secara ex officio oleh Sekretaris Daerah (Sekda), yang berkedudukan di bawah dan bertanggung jawab kepada Gubernur.</p>
                <p>Email : simb.pusatiinformasigempa@jogjakota.go.id</p>
            </div>
    
            <form action="{{ route('kontak') }}" method="POST" class="w-full">
                @csrf
                <div class="flex flex-col w-full justify-center items-stretch p-10 pt-0 gap-4">
    
                    <!-- Name -->
                    <div class="w-full">
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    
                    <!-- Email Address -->
                    <div class="w-full">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
    
                    <!-- Email Address -->
                    <div class="w-full">
                        <x-input-label for="telp" :value="__('Nomor telpon')" />
                        <x-text-input id="telp" class="block mt-1 w-full" type="text" name="telpon" :value="old('telp')" required />
                        <x-input-error :messages="$errors->get('telp')" class="mt-2" />
                    </div>
                    
                    <!-- Judul -->
                    <div class="w-full">
                        <x-input-label for="judul" :value="__('Judul')" />
                        <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul" :value="old('judul')" required />
                        <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                    </div>
                    
                    <!-- Pesan -->
                    <div class="w-full">
                        <x-input-label for="pesan" :value="__('Pesan')" />
                        <textarea name="pesan" id="pesan" rows="5" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"></textarea>
                        <x-input-error :messages="$errors->get('pesan')" class="mt-2" />
                    </div>
    
                    {{-- button --}}
                    <x-primary-button class="w-1/2 mx-auto justify-center">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

    </div>
</x-guest-layout>