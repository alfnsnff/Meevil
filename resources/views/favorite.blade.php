
@extends('layouts.app')

@section('container')
    
<div class="w-full text-white text-[22px] bg-zinc-800 font-bold p-4" style="background-color: #161B22">
    {{-- Page Tittle --}} Favorite
</div>
<div class="border-gray-800 border-b w-full">
    {{--  --}}
</div>
    <div class="py-10 px-16">
                {{-- Main Column --}}
                <div class="space-y-3 mb-16">
                    <div class="flex items-center space-x-4 px-1">
                        <div class="flex-shrink-0">
                            <img class="w-11 h-11 rounded-full" src="/imgs/testimg.jpg" alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-md font-medium text-gray-900 truncate dark:text-white">
                                Neil Sims
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                email@windster.com
                            </p>
                        </div>
                        <div class="inline-flex px-1 items-center text-base font-semibold text-gray-900 dark:text-white">
                            {{--  --}}
                            <i class="fa-solid fa-circle-chevron-down text-2xl" style="color: #ffffff;"></i>
                        </div>
                    </div>
                    
                    <img class="h-auto w-full rounded-lg" src="/imgs/testimg.jpg" alt="image description">

                    <div class="flex items-center space-x-4 px-4">
                        <i class="fa-solid fa-comments" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-thumbs-up" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                    </div>
                </div>

                
            </div>

            @endsection
