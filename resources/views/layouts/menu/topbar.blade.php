<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white" x-data="{open:false}">
    <div class=" px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start  lg:flex-1 items-center ">
            <a href="#">
                <x-logo class="h-8 w-auto sm:h-14" />
            </a>
            <h1 class="ml-2 text-lg font-semibold">Farmasi Al-arif Report System</h1>
            </div>
            <!--- content -->
        </div>
    </div>

    <div class="px-4 sm:px-6 my-2">
        <div>
            <button
                x-on:click="open = !open" 
                class="inline-flex items-center px-4 py-2 font-semibold text-white bg-yellow-500 rounded hover:bg-yellow-600 focus:outline-none" >
                <x-heroicon-o-document-duplicate class="w-6 h-6 mr-2"/>
                <span>Type Of Report</span>
            </button>
        </div>
    </div>

    <div style="display: none;" x-show="open" class="fixed inset-0 overflow-hidden z-50" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
        <div class="absolute inset-0 overflow-hidden" x-on:click="open = false" >
            <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <div class="pointer-events-none fixed inset-y-0 left-0 flex max-w-full">
                <div class="pointer-events-auto relative w-screen max-w-md">
                    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl animate__animated animate__fadeInLeft">
                        <div class="px-4 sm:px-6 flex justify-between items-center bg-yellow-500 p-4">
                            <div>
                                <h2 class="text-lg font-medium text-white" id="slide-over-title">Type Of Report</h2>
                            </div>
                            <div>
                                <button
                                    x-on:click="open = false"  
                                    class="text-xl font-medium  bg-red-500 px-4 py-1 text-white rounded-md" id="slide-over-title">
                                    X
                                </button>
                            </div>
                        </div>
                        <div class="relative mt-2 flex-1 px-4 sm:px-6">
                            <!-- Replace with your content -->
                            <div class="absolute inset-0 px-4 sm:px-6">
                                <div class="h-full border-2 border-dashed border-gray-200" aria-hidden="true">
                                    <div class="pt-2">
                                        <ul id="myList"> 
                                            <li>
                                                <a href="{{route('report')}}" class="text-sm text-gray-500 font-semibold py-2 px-4  inline-flex items-center w-full hover:text-yellow-500">
                                                    <x-heroicon-o-document-text  class="w-4 h-4 mr-2"/>
                                                    <span>SALES LISTING</span>
                                                </a>
                                            </li>
                                            {{-- <li>
                                                <a href="#" class="text-sm text-gray-500 font-semibold py-2 px-4  inline-flex items-center w-full hover:text-yellow-500">
                                                    <x-heroicon-o-document-text  class="w-4 h-4 mr-2"/>
                                                    <span>Report 2</span>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
