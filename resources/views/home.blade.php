<x-guest-layout>
    <div class="min-h-screen ">
        @include('layouts.navigation')

        {{-- hero content --}}
        <div class="w-[1440px] mx-auto lg:h-[450px] h-fit overflow-hidden flex justify-between items-center">
            <span class="text-md font-bold flex flex-col space-y-5">
                <div>
                    <p class="font-normal">SISTEM INFORMASI MANAJEMEN BENCANA </p>
                    <h1 class="text-5xl">Pusat Informasi</h1>
                    <h1 class="text-5xl">Gempa Bumi</h1>
                    <p class="font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto nam ratione perferendis dolorem! Tenetur, amet! Autem, numquam nisi incidunt ex molestiae id expedita natus culpa quisquam aliquam velit aperiam, est consequatur quos dicta voluptatibus enim quasi! Eum inventore odio expedita!</p>
                </div>
            </span>
            <img src="{{ asset('assets/images/home/22178554_2112.w015.n001.646A.p30.646 [Converted].png') }}" width="600px" alt="foto gempa bumi">
        </div>
    </div>
</x-guest-layout>