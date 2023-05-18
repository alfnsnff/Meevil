
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

                                    <input class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-amber-300 dark:text-gray-800 focus:outline-none dark:bg-amber-300 dark:border-gray-600 dark:placeholder-gray-800" id="file_input" name="file" type="file">
                                    {{-- <button type="button" class="inline-flex justify-center text-gray-500 rounded cursor-pointer hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">
                                        <i class="fa-solid fa-image" style="color: #ffffff;"></i>
                                    </button> --}}
                                </div>
                                <div class="flex space-x-1">
                                    <button type="submit" class="inline-flex items-center py-1 px-4 text-sm font-medium text-center text-gray-800 bg-amber-300 rounded-full hover:bg-amber-500">
                                        Pop
                                    </button>
                                <</div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <div class="mt-1">
                    {{-- Main Column --}}
                    @foreach (App\Models\Pops::all()->shuffle() as $pop)
                    <div class="space-y-3 px-16 py-5 border-b border-gray-800">
                        <div class="flex items-center space-x-4 px-1">
                            <div class="flex-shrink-0">
                                <img class="w-11 h-11 rounded-full object-cover" src="{{ asset('storage/'.App\Models\User::find($pop->user_id)->avatar) }}" alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-md font-medium text-white truncate dark:text-white">
                                    {{ App\Models\User::find($pop->user_id)->name }}
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    {{ App\Models\User::find($pop->user_id)->handle }}
                                </p>
                            </div>
                            <div class="inline-flex px-1 items-center text-base font-semibold text-gray-900 dark:text-white">
                                <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="inline-flex items-center p-1 text-sm font-medium text-center text-gray-900 rounded-full hover:bg-gray-600 dark:text-white dark:hover:bg-gray-700 " type="button"> 
                                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                </button>
                                  <!-- Dropdown menu -->
                                  <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                                        @if ($pop->user_id === illuminate\Support\Facades\Auth::user()->id)
                                            <li>
                                                <a href="/profile/destroy{{ $pop->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                            </li>
                                        @endif
                                        <li>
                                            {{-- <a href="/profile/destroy{{ $pop->id }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a> --}}
                                            <a href="" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Share</a>
                                        </li>
                                    </ul>
                                  </div>
                            </div>
                        </div>
                        
                        <div class="pl-2">
                            <p class="font-light dark:text-white ">{{ $pop->tweet }}</p>
                        </div>

                        @if ($pop->file)
                            @if (pathinfo($pop->file, PATHINFO_EXTENSION) === 'mp4')
                                <video class="h-auto w-full rounded-xl" controls>
                                    <source src="{{ asset('storage/'.$pop->file) }}" type="video/mp4">
                                </video>
                            @else   
                                <img class="h-auto w-full rounded-xl" src="{{ asset('storage/'.$pop->file) }}" alt="image description">
                            @endif
                        @endif

                        <div class="flex items-center space-x-4 px-1">    
                            {{-- <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white hover:bg-gray-800 focus:outline-none font-medium rounded-full text-sm px-1 py-0.5 text-center " type="button">
                                <i class="fa-solid fa-comments text-md" style="color: #ffffff;"></i>
                            </button>    --}}
                        <!-- Modal toggle -->
                        {{-- <div class="">
                            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-[#0D1117]">
                                        <!-- Modal body -->
                                        <div class="flex p-4 space-x-4">
                                            <div class="w-full rounded shadow dark:bg-[#161B22] dark:border-gray-700">
                                                <div class="flex items-center p-2 px-4 mb-2 border-b dark:border-gray-800 justify-between ">
                                                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Comments</h5>
                                                </div>
                                                <div>  
                                                <form action="{{ url('/dashboard') }}" method="post">
                                                    <div class="w-full rounded-lg bg-gray-50 dark:bg-[#161B22] dark:border-gray-600">
                                                        <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-[#161B22]">
                                                            <label for="comment" class="sr-only">Your comment</label>
                                                            <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-[#161B22] focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Write a comment..." required></textarea>
                                                        </div>
                                                        <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                                            <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-gray-800 bg-amber-300 rounded-lg hover:bg-amber-500">
                                                                Post comment
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div>
                            <i class="fa-solid fa-thumbs-up text-md" style="color: #ffffff;"></i>
                        </div> --}}

                        <div>   
                            @if ($pop->is_fav === 'false')
                            <a href="/dashboard/fav{{$pop->id}}">
                                <i class="fa-regular fa-star text-md" style="color: #ffffff;"></i>
                            </a>
                            @else                            
                            <a href="/dashboard/des{{$pop->id}}">
                                <i class="fa-solid fa-star text-md" style="color: #ffffff;"></i>
                            </a>
                            @endif
                        </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>

                @endsection
