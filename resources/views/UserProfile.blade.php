@extends('layouts.app')

@section('container')
<div class="w-full text-white text-[22px] bg-zinc-800 font-bold p-4 sticky top-0 border-gray-800 border-b" style="background-color: #161B22">
    {{-- Page Tittle --}} Profile
</div>
<div class="border-b border-gray-800 p-10 px-15 space-y-4">
    <div class="flex justify-start">
        <img class="w-20 h-20 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Neil image">
    </div>
    <div class="flex-1 min-w-0 text-start mx-2">
        <p class="text-md font-medium text-white truncate dark:text-white">
            {{-- {{ App\Models\User::find($pop->user_id)->name }} --}}Assp
        </p>
        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
            {{-- {{ App\Models\User::find($pop->user_id)->handle }} --}}@Asep
        </p>
    </div>
    <div class="">
        <p class="text-sm dark:text-white">Well Play
            waduh
        </p>
        
    </div>
</div>
<div class="mt-1">
    {{-- Main Column --}}
    @php
    use illuminate\Support\Facades\Auth;  
    $user = Auth::user();   
    @endphp
    {{-- @dd() --}}
    @foreach (App\Models\Pops::all()->where('user_id', $user->id) as $pop)
    <div class="space-y-3 px-16 py-5 border-b border-gray-800">
        <div class="flex items-center space-x-4 px-1">
            <div class="flex-shrink-0">
                <img class="w-11 h-11 rounded-full object-cover" src="/imgs/testimg.jpg" alt="Neil image">
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
                {{--  --}}
                
                <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal" class="inline-flex items-center p-1 text-sm font-medium text-center text-gray-900 rounded-full hover:bg-gray-600 dark:text-white dark:hover:bg-gray-700 " type="button"> 
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                </button>
                  <!-- Dropdown menu -->
                  <div id="dropdownDotsHorizontal" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                        @if ($pop->user_id === $user->id)
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

                {{-- <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="" type="button"><i class="fa-solid fa-bars text-md" style="color: #ffffff;"></i></button>
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                    </ul>
                </div> --}}


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