
@extends('layouts.app')

@section('container')
    
<div class="w-full text-white text-[22px] bg-zinc-800 font-bold p-4 sticky top-0 border-gray-800 border-b" style="background-color: #161B22">
    {{-- Page Tittle --}} Favorites
</div>
    <div class="py-10 px-16">
                {{-- Main Column --}}
                <div class="space-y-3 px-16 py-5 border-b border-gray-800">
                    <div class="flex items-center space-x-4 px-1">
                        <div class="flex-shrink-0">
                            <img class="w-11 h-11 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-md font-medium text-white truncate dark:text-white">
                                Neil Sims
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                email@windster.com
                            </p>
                        </div>
                        <div class="inline-flex px-1 items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{--  --}}
                            <i class="fa-solid fa-bars text-2xl" style="color: #ffffff;"></i>
                        </div>
                    </div>
                    
                    <img class="h-auto w-full rounded-lg" src="/imgs/testimg.jpg" alt="image description">

                    <div class="flex items-center space-x-4 px-4">
                        
                    <!-- Modal toggle -->
                    
                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-1 py-0.5 text-center " type="button">
                        <i class="fa-solid fa-comments text-xl" style="color: #ffffff;"></i>
                    </button>
                        @include('components.postmodal')
                        <i class="fa-solid fa-thumbs-up text-xl" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-star text-xl" style="color: #ffffff;"></i>
                    </div>
                </div>
                <div class="space-y-3 px-16 py-5 border-b border-gray-800">
                    <div class="flex items-center space-x-4 px-1">
                        <div class="flex-shrink-0">
                            <img class="w-11 h-11 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-md font-medium text-white truncate dark:text-white">
                                Neil Sims
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                email@windster.com
                            </p>
                        </div>
                        <div class="inline-flex px-1 items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{--  --}}
                            <i class="fa-solid fa-bars text-2xl" style="color: #ffffff;"></i>
                        </div>
                    </div>
                    
                    <img class="h-auto w-full rounded-lg" src="/imgs/testimg.jpg" alt="image description">

                    <div class="flex items-center space-x-4 px-4">
                        
                    <!-- Modal toggle -->
                    
                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-1 py-0.5 text-center " type="button">
                        <i class="fa-solid fa-comments text-xl" style="color: #ffffff;"></i>
                    </button>
                        @include('components.postmodal')
                        <i class="fa-solid fa-thumbs-up text-xl" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-star text-xl" style="color: #ffffff;"></i>
                    </div>
                </div>
                
            </div>

            @endsection
