<x-guest-layout>
    <div class="min-h-screen ">
        @include('layouts.navigation')

        {{-- hero content --}}
        <div class="w-full mx-auto lg:h-[250px] h-fit overflow-hidden flex justify-between items-center bg-black">
            <div class="text-4xl font-bold text-white text-center w-full">PUSAT INFORMASI GEMPA BUMI</div>
        </div>

        {{-- content --}}
        <div class="w-[1440px] mx-auto h-fit overflow-hidden flex justify-between items-center">
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
                                    <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-sm py-4"
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

        <div class="w-[1440px] mx-auto h-fit overflow-hidden flex justify-between items-center">
            <div class="container mx-auto py-6 px-4" x-data="datatables()" x-cloak>
                <h1 class="text-3xl py-4 border-b mb-8">Berita Hangat</h1>
        
                <div class="grid grid-cols-4">
                    <div class="w-full p-4">
                        <a class="relative block h-48 overflow-hidden rounded">
                          <img alt="ecommerce" class="block h-full w-full object-cover object-center cursor-pointer" src="https://dummyimage.com/420x260" />
                        </a>
                        <div class="mt-4">
                            <h2 class="title-font text-lg font-medium text-gray-900 mb-1">The Catalyzer</h2>
                            <h3 class="title-font text-sm text-gray-600 mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi explicabo accusamus rem fuga iusto molestias illo corrupti odit voluptas enim!</h3>
                            <a class="title-font text-sm mb-1 text-sky-800" href="#">Read more</a>
                            <p class="mb-1">01/09/2022</p>
                            <h3 class="title-font text-xs tracking-widest text-gray-500">PROJECT</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>