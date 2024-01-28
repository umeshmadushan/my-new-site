<header class="w-screen">
    <nav class="bg-transparent w-screen">
        <div class="container m-auto flex justify-between items-center text-gray-700">
            <img class="pl-8 py-4 max-h-16" src="{{ asset('storage/images/logo/logo.png') }}" alt="logo">
            <ul class="hidden md:flex items-center pr-10 text-base font-semi-bold cursor-pointer">
                <a href="/" class="py-4 px-6 dark:text-white">Home</a>
                <a href="/#endeavors" class="py-4 px-6 dark:text-white">Endeavors</a>
                <a href="{{ route('about-page') }}" class="py-4 px-6 dark:text-white">About</a>
                <a href="{{ route('reachMe-page') }}" class="py-4 px-6 dark:text-white">Reach Me</a>
            </ul>
            <div class="toggleNlogin flex pr-8 items-center">

                <button class="flex px-2" onclick="toggleDarkMode()">
                    <ion-icon class="text-md dark:text-amber-400" id="modeIcon" name="sunny"></ion-icon>
                </button>

                <button class="block md:hidden py-3 px-2 rounded focus:outline-none hover:bg-grey-200 group">
                    <i class="fa-solid fa-bars"></i>
                    <div
                        class="absolute rounded top-0 right-0 h-auto w-4/12 bg-white border opacity-0 group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
                        <ul class="flex flex-col items-center w-full text-base cursor-pointer py-10 px-3">
                            <li class="hover:bg-gray-200 py-3 rounded px-6 w-full">Home</li>
                            <li class="hover:bg-gray-200 py-3 rounded px-6 w-full">Endeavors</li>
                            <li class="hover:bg-gray-200 py-3 rounded px-6 w-full">About</li>
                            <li class="hover:bg-gray-200 py-3 rounded px-6 w-full">Reach Me</li>
                        </ul>
                    </div>
                </button>
                @if (Route::has('login'))
                    <div class="flex pr-4 py-4">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-semibold hidden leading-6 text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-4 font-semibold text-xl leading-6 text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"><i
                                        class="fa-solid fa-right-to-bracket fa-beat-fade"></i></a>
                            @endif
                        @endauth
                    </div>
                @endif


            </div>

        </div>

    </nav>
</header>
