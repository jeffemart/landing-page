<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
</x-app-layout>

<!doctype html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Title</title>
</head>

<body>

<div class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                    <span class="sr-only">Workflow</span>
                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                         alt="">
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <button type="button"
                        class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>

                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
            <nav class="hidden md:flex space-x-10">
                <div class="relative">

                    <button type="button"
                            class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            aria-expanded="false">
                        <span>Solutions</span>

                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>

                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Pricing </a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Docs </a>

                <div class="relative">
                    <button type="button"
                            class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            aria-expanded="false">
                        <span>More</span>
                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>
            </nav>
            {{--            @if (Route::has('login'))--}}
            {{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
            {{--                    @auth--}}
            {{--                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
            {{--                    @else--}}
            {{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log--}}
            {{--                            in</a>--}}

            {{--                        @if (Route::has('register'))--}}
            {{--                            <a href="{{ route('register') }}"--}}
            {{--                               class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
            {{--                        @endif--}}
            {{--                    @endauth--}}
            {{--                </div>--}}
            {{--            @endif--}}
            @if (Route::has('login'))
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                            Dashboard </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"> Login
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Register </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

    <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                             alt="Workflow">
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close menu</span>

                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">
                    <nav class="grid gap-y-8">
                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">

                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Analytics </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">

                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Engagement </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">

                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Security </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">

                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Integrations </span>
                        </a>

                        <a href="#" class="-m-3 p-3 flex items-center rounded-md hover:bg-gray-50">

                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                            </svg>
                            <span class="ml-3 text-base font-medium text-gray-900"> Automations </span>
                        </a>
                    </nav>
                </div>
            </div>
            <div class="py-6 px-5 space-y-6">
                <div class="grid grid-cols-2 gap-y-4 gap-x-8">
                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Pricing </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Docs </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Help Center </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Guides </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Events </a>

                    <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700"> Security </a>
                </div>
                <div>
                    <a href="#"
                       class="w-full flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                        Sign up </a>
                    <p class="mt-6 text-center text-base font-medium text-gray-500">
                        Existing customer?
                        <a href="#" class="text-indigo-600 hover:text-indigo-500"> Sign in </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extra-bold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">Ready to dive in?</span>
            <span class="block text-indigo-600">Start your free trial today.</span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
                <a href="#"
                   class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Get started </a>
            </div>
            <div class="ml-3 inline-flex rounded-md shadow">
                <a href="#"
                   class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50">
                    Learn more </a>
            </div>
        </div>
    </div>
</div>

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-gray-100 mt-5 max-w-7xl mx-auto shadow overflow-hidden sm:rounded-lg">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="px-4 mt-5 md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Formulário</h3>
                <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you
                    share.</p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="company-website" class="block text-sm font-medium text-gray-700">
                                    Website </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <span
                                        class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm"> http:// </span>
                                    <input type="text" name="company-website" id="company-website"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                           placeholder="www.example.com">
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="about" class="block text-sm font-medium text-gray-700"> About </label>
                            <div class="mt-1">
                                <textarea id="about" name="about" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                          placeholder="you@example.com"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Brief description for your profile. URLs are
                                hyperlinked.</p>
                        </div>

                    </div>
                    <div class="px-4 py-4 bg-white text-right sm:px-6">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>

