
    @extends('layouts.app')

    @section('container')
        
    <div class="w-full text-white text-[22px] bg-zinc-800 font-bold p-4 sticky top-0 border-gray-800 border-b" style="background-color: #161B22">
        {{-- Page Tittle --}} Home
    </div>
    <div class="border-gray-800 border-b w-full px-4 py-3">
        <div class="flex items-start space-x-2 px-1">
            <div class="flex-shrink-0">
                <img class="w-11 h-11 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Neil image">
            </div>
            <div class="flex-1 min-w-0">
                <form>
                    <div class="w-full">
                        <div class="px-1 py-2 rounded-t-lg">
                            <label for="comment" class="sr-only">Your comment</label>
                            <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 border-0 bg-transparent focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
                        </div>
                        <div class="flex items-center justify-between py-2 border-t dark:border-gray-600">
                            <div class="flex space-x-1">
                                <button type="button" class="inline-flex justify-center text-gray-500 rounded cursor-pointer hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Attach file</span>
                                </button>
                                <button type="button" class="inline-flex justify-center text-gray-500 rounded cursor-pointer hover:text-gray-900 0 dark:text-gray-400 dark:hover:text-white ">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Set location</span>
                                </button>
                                <button type="button" class="inline-flex justify-center text-gray-500 rounded cursor-pointer hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Upload image</span>
                                </button>
                            </div>
                            <div class="flex space-x-1">
                                <button type="submit" class="inline-flex items-center py-1 px-4 text-sm font-medium text-center text-white bg-amber-500 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                    Pop
                                </button>
                            <</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="py-10 px-16">
                    {{-- Main Column --}}
                    <div class="space-y-3 mb-16">
                        <div class="flex items-center space-x-4 px-1">
                            <div class="flex-shrink-0">
                                <img class="w-11 h-11 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Neil image">
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
                    {{-- <!-- --}}
                    <div class="space-y-3">
                        <div class="flex items-center space-x-4 px-1">
                            <div class="flex-shrink-0">
                                <img class="w-11 h-11 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Neil image">
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
                {{-- --> --}}

                    
                </div>

                @endsection
