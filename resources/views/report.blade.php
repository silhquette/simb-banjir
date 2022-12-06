<x-guest-layout>
    <div class="min-h-screen">
        @include('layouts.navigation')

        {{-- title --}}
        <x-carousel title="Kirim Laporan Kebencanaan"></x-carousel>

        <div class="flex p-10">
            <div class="rounded-xl bg-white p-4 shadow-lg w-1/2 flex flex-col gap-4">
                <p class="font-semibold text-lg">Kontak Darurat - BNPB Yogyakarta</p>
                <p>Meneguhkan Kota Yogyakarta sebagai kota nyaman huni dan pusat pelayanan jasa yang berdaya saing kuat untuk keberdayaan masyarakat dengan berpijak pada nilai keistimewaan</p>
                <p class="">Call Center : +62 811-2828-911</p>
                <p>Website : <a href="http://http://bpbd.jogjakota.go.id">http://bpbd.jogjakota.go.id</a></p>
                <p>Email : bpbd@jogjakota.go.id</p>
            </div>
    
            <form action="{{ route('laporan') }}" method="POST" class="w-full">
                @csrf
                <div class="flex flex-col w-full justify-center items-stretch p-10 pt-0 gap-4">
    
                    <!-- Name -->
                    <div class="w-full">
                        <x-input-label for="nama" :value="__('Nama')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>
                    
                    <!-- Email Address -->
                    <div class="w-full">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div> 
                    
                    <!-- lokasi -->
                    <div class="w-full">
                        <x-input-label for="lokasi" :value="__('Lokasi')" />
                        <x-text-input id="lokasi" class="block mt-1 w-full" type="text" name="lokasi" :value="old('lokasi')" required />
                        <x-input-error :messages="$errors->get('lokasi')" class="mt-2" />
                    </div>
                    
                    <!-- korban -->
                    <div class="w-full">
                        <x-input-label for="korban" :value="__('Korban Jiwa')" />
                        <x-text-input id="korban" class="block mt-1 w-full" type="number" name="korban" :value="old('korban')" />
                        <x-input-error :messages="$errors->get('lokasi')" class="mt-2" />
                    </div>

                    <!-- deskripsi -->
                    <div class="w-full">
                        <x-input-label for="deskripsi" :value="__('Deskripsi Kerusakan')" />
                        <textarea name="deskripsi" id="deskripsi" rows="5" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"></textarea>
                        <x-input-error :messages="$errors->get('deskripsi')" class="mt-2" />
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