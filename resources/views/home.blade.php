<x-guest-layout>
    <div class="min-h-screen ">
        @include('layouts.navigation')

        {{-- title --}}
        <x-carousel title="PUSAT INFORMASI GEMPA BUMI"></x-carousel>

        {{-- content --}}
        <div class="w-max-[1440px] mx-auto h-fit overflow-hidden flex justify-between items-center">
            <div class="container mx-auto py-6 px-4" x-data="datatables()" x-cloak>
                <h1 class="text-3xl py-4 border-b mb-8">Gempa Terkini</h1>
        
                <div x-show="selectedRows.length" class="bg-teal-200 fixed top-0 left-0 right-0 z-40 w-full shadow">
                    <div class="container mx-auto px-4 py-4">
                        <div class="flex md:items-center">
                            <div class="mr-4 flex-shrink-0">
                                <svg class="h-8 w-8 text-teal-600"  viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                            </div>
                            <div x-html="selectedRows.length + ' rows are selected'" class="text-teal-800 text-lg"></div>
                        </div>
                    </div>
                </div>
        
                <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
                    style="height: 405px;">
                    <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                        <thead>
                            <tr class="text-left">
                                <template x-for="heading in headings">
                                    <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 text-gray-600 font-bold tracking-wider uppercase text-sm py-4"
                                        x-text="heading.value" :x-ref="heading.key" :class="{ [heading.key]: true }"></th>
                                </template>
                            </tr>
                        </thead>
                        <tbody>
                            <template x-for="user in users" :key="user.userId">
                                <tr>
                                    <td class="border-dashed border-t border-gray-200 userId">
                                        <span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.userId"></span>
                                    </td>
                                    <td class="border-dashed border-t border-gray-200 firstName">
                                        <span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.firstName"></span>
                                    </td>
                                    <td class="border-dashed border-t border-gray-200 lastName">
                                        <span class="text-gray-700 px-6 py-3 flex items-center" x-text="user.lastName"></span>
                                    </td>
                                    <td class="border-dashed border-t border-gray-200 emailAddress">
                                        <span class="text-gray-700 px-6 py-3 flex items-center"
                                            x-text="user.emailAddress"></span>
                                    </td>
                                    <td class="border-dashed border-t border-gray-200 gender">
                                        <span class="text-gray-700 px-6 py-3 flex items-center"
                                            x-text="user.gender"></span>
                                    </td>
                                    <td class="border-dashed border-t border-gray-200 phoneNumber">
                                        <span class="text-gray-700 px-6 py-3 flex items-center"
                                            x-text="user.phoneNumber"></span>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- card --}}
        @if (empty($post))
        <div class="w-max-[1440px] mx-auto h-fit overflow-hidden flex justify-between items-center">
          <div class="container mx-auto py-6 px-4">
            <h1 class="text-3xl py-4 border-b mb-8">Berita Hangat</h1>
            
            <div class="grid grid-cols-4">
                  @foreach ($posts as $post)
                  <div class="w-full p-4 rounded-xl shadow-lg">
                      <a class="relative block h-48 overflow-hidden rounded">
                        <img alt="ecommerce" class="block h-full w-full object-cover object-center cursor-pointer" src="https://dummyimage.com/420x260" />
                      </a>
                      <div class="mt-4">
                          <h2 class="title-font text-lg font-medium text-gray-900 mb-1">{{ $post->judul }}</h2>
                          <h3 class="title-font text-sm text-gray-600 mb-1">{{ $post->excerpt }}</h3>
                          <a class="title-font text-sm mb-1 text-sky-800" href="{{ $post->references }}">Read more</a>
                          <p class="mb-1">01/09/2022</p>
                          <h3 class="title-font text-xs tracking-widest text-gray-500">{{ $post->author }}</h3>
                      </div>
                  </div> 
                  @endforeach
                </div>
            </div>
        </div>            
        @endif

        <div class="w-max-[1440px] mx-auto h-fit overflow-hidden flex justify-between items-center">
            <div class="container mx-auto py-6 px-4" x-data="datatables()" x-cloak>
                <h1 class="text-3xl py-4 border-b mb-8">Layanan</h1>
                <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 w-2/3 mx-auto">

                    {{-- card --}}
                    <a href="{{ route('laporan') }}">
                      <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                          </svg>
                        </div>
                  
                        <div class="ml-4">
                          <h2 class="font-semibold">Laporan Gempa Bumi</h2>
                          <p class="mt-2 text-sm text-gray-500">Ada gempa? Segera laporkan!</p>
                        </div>
                      </div>
                    </a>
                
                    <a href="{{ route('mitigasi') }}">
                      <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-red-100 bg-red-50">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                          </svg>
                        </div>
                  
                        <div class="ml-4">
                          <h2 class="font-semibold">Edukasi Bencana</h2>
                          <p class="mt-2 text-sm text-gray-500">Pelajari gempa bumi lebih lanjut</p>
                        </div>
                      </div>
                    </a>

                    <a href="{{ route('kontak') }}">
                      <div class="flex items-start rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-orange-100 bg-orange-50">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                          </svg>
                        </div>
                  
                        <div class="ml-4">
                          <h2 class="font-semibold">Kontak</h2>
                          <p class="mt-2 text-sm text-gray-500">Butuh kami? Hubungi segera</p>
                        </div>
                      </div>
                    </a>
                  </div>
            </div>
        </div>
    </div>
</x-guest-layout>