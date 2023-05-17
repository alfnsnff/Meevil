
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
                <form action="{{ url('/dashboard') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full">
                            <div class="px-1 py-2 rounded-t-lg">
                                <label for="tweet" class="sr-only">Your comment</label>
                                <textarea id="tweet" name="tweet" rows="3" class="resize-none w-full px-0 text-md text-gray-900 border-0 bg-transparent focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="What's funny now?" required></textarea>
                            </div>
                            <div class="flex items-center justify-between py-2 border-t dark:border-gray-600">
                                <div class="flex space-x-1">
                                    {{-- <button type="button" class="inline-flex justify-center text-gray-500 rounded cursor-pointer hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Attach file</span>
                                    </button> --}}

                                    <input class="" name="file" id="file_input" type="file">
                                    {{-- <button type="button" class="inline-flex justify-center text-gray-500 rounded cursor-pointer hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">
                                        <i class="fa-solid fa-image" style="color: #ffffff;"></i>
                                    </button> --}}
                                </div>
                                <div class="flex space-x-1">
                                    <button type="submit" class="inline-flex items-center py-1 px-4 text-sm font-medium text-center text-gray-800 bg-amber-300 rounded-full focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-amber-500">
                                        Pop
                                    </button>
                                <</div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="mt-5">
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
