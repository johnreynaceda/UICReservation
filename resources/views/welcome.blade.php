<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="antialiased">

    <section class="relative overflow-hidden bg-white/5">
        <div class="relative w-full mx-auto max-w-7xl">
            <div class="relative flex flex-col w-full p-5 mx-auto lg:px-16 md:flex-row md:items-center md:justify-between md:px-6"
                x-data="{ open: false }">
                <div class="flex flex-row items-center justify-between text-sm text-black lg:justify-start">
                    <a href="/">
                        <div>
                            <p>UIC-BSRS</p>
                        </div>
                    </a><button @click="open = !open"
                        class="items-center justify-center focus:outline-none inline-flex focus:text-black hover:text-[#0000ff] md:hidden p-2 text-black">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M4 6h16M4 12h16M4 18h16" :class="{ 'hidden': open, 'inline-flex': !open }"
                                class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            </path>
                            <path d="M6 18L18 6M6 6l12 12" :class="{ 'hidden': !open, 'inline-flex': open }"
                                class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </section>
    <section class="relative flex items-center w-full bg-white">
        <div class="relative items-center w-full px-5 py-24 mx-auto lg:px-16 lg:py-36 max-w-7xl md:px-12">
            <div class="relative flex-col items-start m-auto align-middle">
                <div class="grid grid-cols-1 gap-6 lg:gap-24 lg:grid-cols-2">
                    <div class="relative items-center gap-12 m-auto lg:inline-flex">
                        <div class="max-w-xl text-center lg:text-left">
                            <div>
                                <p class="text-3xl font-medium md:text-6xl text-slate-900">
                                    Welcome to UIC Bookstore Reservation System
                                </p>
                                <p class="mt-4 text-lg tracking-tight text-slate-500 lg:text-xl">
                                    (Fr. Selga Campus)
                                </p>
                            </div>
                            <div class="flex flex-col items-center gap-3 mt-10 lg:flex-row">
                                <a class="inline-flex items-center justify-center w-full px-6 py-2 text-center text-white duration-200 bg-[#29A8A1] border-2 border-[#29A8A1] focus:outline-none focus-visible:outline-black focus-visible:ring-black hover:bg-transparent hover:border-[#29A8A1] hover:text-[#29A8A1] lg:w-auto rounded-xl"
                                    href="{{ route('login') }}">
                                    <span class="ml-3">Sign In</span></a>
                                <a class="inline-flex items-center justify-center w-full px-6 py-2 text-center text-white duration-200 bg-[#29A8A1] border-2 border-[#29A8A1] focus:outline-none focus-visible:outline-black focus-visible:ring-black hover:bg-transparent hover:border-[#29A8A1] hover:text-[#29A8A1] lg:w-auto rounded-xl"
                                    href="#_">
                                    <span class="ml-3">Sign Up</span></a>

                            </div>

                        </div>
                    </div>
                    <div class="block w-full mt-12 lg:mt-0">
                        <img alt="hero"
                            class="object-cover object-center w-full mx-auto drop-shadow-xl lg:ml-auto rounded-2xl"
                            src="{{ asset('images/logo.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
