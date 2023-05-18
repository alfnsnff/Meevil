<div class="fixed px-4" >
    {{-- <div class="w-full mt-3 lg:flex items-center hidden">
        <input class="appearance-none w-full border-0 p-3 rounded bg-[#161B22] text-gray-100 placeholder-gray-500 leading-tight focus:ring-0" type="text" placeholder="Search Here" >
    </div> --}}

    <div class="w-full max-w-md my-4 p-4 rounded shadow sm:p-8 dark:bg-[#161B22] dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Suggested Tags</h5>
        </div>
        <div>
            <a href="{{ url('/explore?search=cute') }}" class="bg-amber-300 text-gray-800 text-xs font-medium px-2 py-0.5 rounded-full dark:bg-amber-300 dark:hover:bg-amber-500">Cute</a>
            <a href="{{ url('/explore?search=wah wah') }}" class="bg-amber-300 text-gray-800 text-xs font-medium px-2 py-0.5 rounded-full dark:bg-amber-300 dark:hover:bg-amber-500">Wah Wah</a>
            <a href="{{ url('/explore?search=mikir') }}" class="bg-amber-300 text-gray-800 text-xs font-medium px-2 py-0.5 rounded-full dark:bg-amber-300 dark:hover:bg-amber-500">Mikir</a>
            <a href="{{ url('/explore?search=triokekalahan') }}" class="bg-amber-300 text-gray-800 text-xs font-medium px-2 py-0.5 rounded-full dark:bg-amber-300 dark:hover:bg-amber-500">Triokekalahan</a>
            <a href="{{ url('/explore?search=bangg') }}" class="bg-amber-300 text-gray-800 text-xs font-medium px-2 py-0.5 rounded-full dark:bg-amber-300 dark:hover:bg-amber-500">Bangg</a>
            <a href="{{ url('/explore?search=kacausih') }}" class="bg-amber-300 text-gray-800 text-xs font-medium px-2 py-0.5 rounded-full dark:bg-amber-300 dark:hover:bg-amber-500">Kacausih</a>
            <a href="{{ url('/explore?search=maklimah') }}" class="bg-amber-300 text-gray-800 text-xs font-medium px-2 py-0.5 rounded-full dark:bg-amber-300 dark:hover:bg-amber-500">Maklimah</a>
            <a href="{{ url('/explore?search=biadab') }}" class="bg-amber-300 text-gray-800 text-xs font-medium px-2 py-0.5 rounded-full dark:bg-amber-300 dark:hover:bg-amber-500">Biadab</a>
        </div>
    </div>
    
    <div class="w-full max-w-md my-4 p-4 rounded shadow sm:p-8 dark:bg-[#161B22] dark:border-gray-700">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-white font-bold leading-none text-gray-900 dark:text-white">Top Leaderboards</h5>
            {{-- <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                View all
            </a> --}}
        </div>
        <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach (App\Models\User::all() as $user)
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <img class="w-8 h-8 rounded-full object-cover" src="{{ $user->avatar }}" alt="Neil image">
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-white truncate dark:text-white">
                                    {{ $user->name }}
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    {{ $user->handle }}
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
        </div>
    </div>
</div>