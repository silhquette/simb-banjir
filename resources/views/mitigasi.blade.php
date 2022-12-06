<x-guest-layout>
    <div class="min-h-screen">
        @include('layouts.navigation')

        {{-- title --}}
        <x-carousel title="INFORMASI BENCANA GEMPA BUMI"></x-carousel>

        <div class="w-2/3 m-10 rounded-xl overflow-hidden shadow-lg mx-auto">
            {{-- <img src="{{ asset('assets/images/mitigasi/WhatsApp-Image-2022-06-17-at-09.26.07-1024x576.jpeg') }}" alt="" class="w-full mt-[-100px]"> --}}
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/G61B0FVeyZA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div class="flex w-full justify-center items-stretch p-10 pt-0 gap-6">
            {{-- definisi bencana --}}
            <div class="mx-auto overflow-hidden flex justify-between items-start rounded-xl bg-white p-4 shadow-lg">
                <div class="container mx-auto pb-6 px-4">
                    <h1 class="text-3xl py-4 border-b mb-8">Apa Itu Bencana?</h1>
                    <article>
                        Bencana adalah peristiwa atau rangkaian peristiwa yang mengancam dan mengganggu kehidupan dan penghidupan masyarakat yang disebabkan, baik oleh faktor alam dan/atau faktor nonalam maupun faktor manusia sehingga mengakibatkan timbulnya korban jiwa manusia, kerusakan lingkungan, kerugian harta benda, dan dampak psikologis. Definisi tersebut menyebutkan bahwa bencana disebabkan oleh faktor alam, non alam, dan manusia. Oleh karena itu, Undang-Undang Nomor 24 Tahun 2007 tersebut juga mendefinisikan mengenai bencana alam, bencana nonalam, dan bencana sosial.
                    </article>
                </div>
            </div>
    
            {{-- gempa bumi --}}
            <div class="mx-auto overflow-hidden flex justify-between items-start rounded-xl bg-white p-4 shadow-lg">
                <div class="container mx-auto pb-6 px-4">
                    <h1 class="text-3xl py-4 border-b mb-8">Kenalan Yuk Sama Gempa Bumi</h1>
                    <article>
                        Gempa bumi adalah getaran atau guncangan yang terjadi di permukaan bumi yang disebabkan oleh tumbukan antar lempeng bumi, patahan aktif, akitivitas gunung api atau runtuhan batuan.
                    </article>
                </div>
            </div>        
        </div>

        {{-- poster gempa bummi --}}
        <div class="w-2/3 m-10 mt-0 rounded-xl overflow-hidden shadow-lg mx-auto">
            <img src="{{ asset('assets/images/mitigasi/fa2747b1d021f087c244cc2f5a0979a5.png') }}" alt="" class="w-full -ml-1">
        </div>

    </div>
</x-guest-layout>