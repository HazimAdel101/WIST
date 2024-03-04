<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>WIST</title>
    {{-- fonts --}}
    {{-- Inter font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
    rel="stylesheet">


    {{-- JS --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body class="text-[#2D2E2E] overflow-x-hidden">
    {{-- Navbar --}}
    <nav class='border-b'>

        <div class='flex flex-wrap items-center px-10 py-4 relative'>
            <a href='#' class='hidden max-lg:block'><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"
                    class='w-18' /></a>
            <div class='flex ml-auto lg:order-1 lg:hidden'>
                <button id="toggle" class='ml-7'>
                    <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div id="collapseMenu" class="lg:!flex lg:items-center w-full max-lg:hidden max-lg:py-4">
                <ul class='lg:flex lg:space-x-8 max-lg:space-y-2'>
                    <li class='max-lg:border-b max-lg:py-2'>
                        <a href='#' class='hover:text-[#3A4F39] font-semiboldblock text-[15px]'>
                            <img class="mr-2 inline-block w-5" src="{{ asset('assets/images/menu.svg') }}" alt="">
                            <span>Menu</span>
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-2'><a href='#'
                            class='hover:text-[#3A4F39]  block text-[15px]'>English</a></li>

                </ul>
                <a href='#' class='m-auto absolute lg:left-2/4 lg:-translate-x-1/2 max-lg:hidden'><img
                        src="{{ asset('assets/images/logo.svg') }}" alt="logo" class='w-16' /></a>
                <ul class='lg:flex lg:space-x-2 max-lg:space-y-2 ml-auto'>
                    <li class='max-lg:border-b max-lg:py-2'>
                        <a href='#' class='hover:text-[#3A4F39] block text-[15px]'>
                            <button
                                class="rounded-md px-7 py-2 translate-x-1 border border-[#3A4F39] text-[#3A4F39] bg-white hover:bg-[#3A4F39] hover:text-white hover:border-white transition duration-300 transform hover:scale-105">Gavekort</button>

                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-2'>
                        <a href='#' class='hover:text-[#3A4F39] block text-[15px]'>
                            <button
                                class="  rounded-md  px-7 py-2 translate-x-1 border border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] transition duration-300 transform hover:scale-105">Booking
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main --}}
    <section id="main" class="">
        <div class="grid grid-cols-1 md:grid-cols-4 md:h-[85vh]">
            <div class="p-4 md:p-0">
                <div class="mx-auto mt-[4rem] h-full md:m-0  md:my-0 md:pd-0 mb-8">
                    <img class="w-full h-full mx-auto" src="{{ asset('assets/images/main-image.png') }}" alt="main image">
                </div>
            </div>
            <div class="col-span-2 py-20">
                <div class="flex flex-col items-center justify-center md:justify-end md:pb-8 md:h-full">
                    <button
                        class="w-[80%] md:w-[30%] h-[70px] font-medium  rounded-md text-xl px-4 py-2 translate-x-1 border border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] transition duration-300 transform hover:scale-105">Contact
                        us
                    </button>
                    <p class="w-[80%] text-justify mt-5 text-lg font-medium">It is a long established fact that a
                        reader
                        will be
                        distracted by the readable content of a
                        page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                        normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable
                        English.</p>
                </div>
            </div>
            <div class="p-4 md:p-0 text-center">
                <div class="w-[88%] mx-auto block mt-6 mb-[134px] md:m-0">
                    <img class="w-full mx-auto" src="{{ asset('assets/images/main-image1.png') }}" alt="main image 2">
                </div>
            </div>
        </div>
    </section>

    {{-- Pricing --}}
    <section id="pricing" class="mx-[2rem] mb-12 md:mt-16">
        <div class="grid grid-cols-1 md:grid-cols-3 md:mx-9">

            <div class="p-8 my-3  mx-auto rounded-md shadow md:mb-40 md:me-[2rem]">
                <p class="mb-3 text-[1.5rem] font-bold uppercase">Free</p>

                <span class="flex items-center mb-3 text-[1rem]"><span
                        class="font-bold text-[2rem]">$0</span>/month</span>

                <p class="my-4 text-sm">It is a long established fact that a reader will be distracted.</p>
                <ul>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">PNG templates</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/false.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Figma responsive
                            components</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/false.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Constant updates</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/false.svg') }}" alt="false">
                        <h3 class="inline-block text-[1.25rem]">Custom templates</h3>
                    </li>
                </ul>
                <button
                    class="w-full border text-lg border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] rounded-lg px-4 py-3 transition duration-300 transform hover:scale-105">Try
                    now</button>

            </div>

            <div class="p-8 my-3 mx-auto rounded-md border-2 border-[#3A4F39] boreder-solid md:mb-40  md:me-[2rem]">
                <div class="flex justify-between items-start">
                    <p class="mb-3 text-[1.5rem] font-bold uppercase">Premium</p>
                    <img class="h-7 w-7" src="{{ asset('assets/images/true.svg') }}" alt="">
                </div>

                <span class="flex items-center mb-3 text-[1rem]"><span
                        class="font-bold text-[2rem]">$99</span>/month</span>

                <p class="my-4 text-sm">It is a long established fact that a reader will be distracted.</p>
                <ul>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">PNG templates</h3>
                    </li>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Figma responsive
                            components</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/false.svg') }}" alt="false">
                        <h3 class="inline-block text-[1.25rem]">Constant updates</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/false.svg') }}" alt="false">
                        <h3 class="inline-block text-[1.25rem]">Custom templates</h3>
                    </li>
                </ul>
                <button
                    class="w-full border text-lg border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] rounded-lg px-4 py-3 transition duration-300 transform hover:scale-105">Try
                    now</button>

            </div>

            <div class="p-8 my-3 mx-auto rounded-md shadow md:mb-40  md:me-[2rem]">
                <p class="mb-3 text-[1.5rem] font-bold uppercase">Pro</p>

                <span class="flex items-center mb-3 text-[1rem]"><span
                        class="font-bold text-[2rem]">$199</span>/month</span>

                <p class="my-4 text-sm">It is a long established fact that a reader will be distracted.</p>
                <ul>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">PNG templates</h3>
                    </li>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Figma responsive
                            components</h3>
                    </li>
                    <li class=" mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Constant updates</h3>
                    </li>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('assets/images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Custom templates</h3>
                    </li>
                </ul>
                <button
                    class="w-full border text-lg border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] rounded-lg px-4 py-3 transition duration-300 transform hover:scale-105">Try
                    now</button>

            </div>
        </div>
    </section>

    {{-- Comments --}}
    <section id="comments" class="mb-20 mx-[2rem]">
        <div class="relative">
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <ul>
                            <div class="grid grid-cols-1 md:grid-cols-3">
                                <li class="opacity-30 mb-4">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('assets/images/comment.svg') }}"
                                            alt="comment">
                                    </div>

                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('assets/images/avatar1.png') }}" alt=""></div>
                                        <div
                                            class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                                            <p class="">It is a long established fact that a reader will be
                                                distracted by the readable
                                                content of a page when looking at its layout.</p>
                                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-4">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('assets/images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('assets/images/avatar2.png') }}" alt=""></div>
                                        <div
                                            class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                                            <p class="">It is a long established fact that a reader will be
                                                distracted by the readable
                                                content of a page when looking at its layout.</p>
                                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-4">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('assets/images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('assets/images/avatar3.png') }}" alt=""></div>
                                        <div
                                            class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                                            <p class="">It is a long established fact that a reader will be
                                                distracted by the readable
                                                content of a page when looking at its layout.</p>
                                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>
                    <div class="carousel-item">
                        <ul>
                            <div class="grid grid-cols-1 md:grid-cols-3">
                                <li class="opacity-30 mb-4">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('assets/images/comment.svg') }}"
                                            alt="comment">
                                    </div>

                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('assets/images/avatar2.png') }}" alt=""></div>
                                        <div
                                            class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                                            <p class="">It is a long established fact that a reader will be
                                                distracted by the readable
                                                content of a page when looking at its layout.</p>
                                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-4">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('assets/images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('assets/images/avatar1.png') }}" alt=""></div>
                                        <div
                                            class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                                            <p class="">It is a long established fact that a reader will be
                                                distracted by the readable
                                                content of a page when looking at its layout.</p>
                                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-4 opacity-30">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('assets/images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('assets/images/avatar3.png') }}" alt=""></div>
                                        <div
                                            class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                                            <p class="">It is a long established fact that a reader will be
                                                distracted by the readable
                                                content of a page when looking at its layout.</p>
                                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>
                    <div class="carousel-item">
                        <ul>
                            <div class="grid grid-cols-1 md:grid-cols-3">
                                <li class="opacity-30 mb-4">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('assets/images/comment.svg') }}"
                                            alt="comment">
                                    </div>

                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('assets/images/avatar3.png') }}" alt=""></div>
                                        <div
                                            class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                                            <p class="">It is a long established fact that a reader will be
                                                distracted by the readable
                                                content of a page when looking at its layout.</p>
                                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-4">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('assets/images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('assets/images/avatar2.png') }}" alt=""></div>
                                        <div
                                            class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                                            <p class="">It is a long established fact that a reader will be
                                                distracted by the readable
                                                content of a page when looking at its layout.</p>
                                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-4 opacity-30">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('assets/images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('assets/images/avatar1.png') }}" alt=""></div>
                                        <div
                                            class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                                            <p class="">It is a long established fact that a reader will be
                                                distracted by the readable
                                                content of a page when looking at its layout.</p>
                                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="pt-8 md:pt-12">
                <div class="carousel-dots "></div>
            </div>
        </div>


    </section>

    {{-- Subscribe --}}
    <section id="subscribe" class="mx-[2rem] my-5">

        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="col-span-2 flex items-center justify-center pt-8">
                <div class="md:w-[50%]">
                    <div class="md:w-[90%]">
                        <h1 class="font-bold text-5xl mb-3">Try using our templates!</h1>
                        <h3 class="text-md my-4">
                            Let's embody your beautiful ideas together, simplify the way you visualize your next big
                            things.
                        </h3>
                    </div>
                    <div class="relative mb-10">
                        <input class="w-full rounded-md bg-[#F6F6F6] h-[50px] ps-4 py-4" placeholder="Email"
                            type="email">
                        <button
                            class="absolute w-[40%] right-0 top-0 rounded-r-none rounded-tr-lg rounded-br-lg h-[50px] border border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] p-2 transition duration-300 ">Subscribe</button>
                    </div>
                </div>

            </div>
            <div class="">
                <img class="w-full h-full rounded-md pb-5 md:m-0" src="{{ asset('assets/images/main-image1.png') }}"
                    alt="">
            </div>
        </div>
    </section>

    {{-- try us --}}
    <section id="try" class="w-[100vw] py-10 m-0 bg-[#3A4F39] md:py-20">
        <div class="mx-[8%] md:mx-[3rem] md:flex md:justify-between">
            <div class="md:w-[30%]">
                <h1 class="font-bold text-white text-4xl md:text-5xl mb-3 md:mb-6">Try using our templates!</h1>
                <h3 class="text-md text-white w-[80%]">
                    Let's embody your beautiful ideas together, simplify the way you visualize your next big things.
                </h3>
            </div>

            <div class="mt-4 flex justify-end md:pe-3 md:items-end">
                <a class="text-[#F8D254] underline inline-block mr-3" href="#">Learn More</a>
                <img class="md:h-6 md:w-6" src="{{ asset('assets/images/arrow.svg') }}" alt="arrow">
            </div>
        </div>
    </section>

    {{-- Unknown section --}}
    <section id="unknown" class="mt-[30px]">
        <div class="md:hidden">
            <div class="w-[88%] mx-auto">
                <div class="grid grid-cols-3">
                    <div class="col-span-1 flex justify-end me-2">
                        <h1 class="font-bold text-lg">I/№16</h1>
                    </div>
                    <div class="col-span-2">
                        <p class="text-md">Let's embody your beautiful ideas together, simplify the way you
                            visualize your next big things.</p>
                    </div>

                    <div class="col-span-3">
                        <hr>
                    </div>

                    <div class="col-span-3 my-4">
                        <img class="w-full object-cover h-[4rem] mt-3" src="{{ asset('assets/images/main-image1.png') }}"
                            alt="">
                    </div>
                    <div class="col-span-1  flex justify-end me-2">
                        <h1 class="font-bold text-lg">I/№16</h1>
                    </div>
                    <div class="col-span-2">
                        <p class="text-md">Let's embody your beautiful ideas together, simplify the way you
                            visualize your next big things.</p>
                    </div>
                    <div class="col-span-3">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden relative md:block w-[75%] mx-auto">
            <div class="mx-auto">
                <div class="grid grid-cols-12 gap-4 py-5">
                    <div class="col-span-2 flex justify-center items-end">
                        <h1 class="font-bold text-lg">I/№16</h1>
                    </div>
                    <div class="row-span-2 col-span-5">
                        <img class="w-full h-full object-cover " src="{{ asset('assets/images/main-image1.png') }}"
                            alt="">
                    </div>
                    <div class="col-span-5 flex justify-center items-end">
                        <p class="text-sm">Let's embody your beautiful ideas together, simplify the way you
                            visualize your next big things.</p>
                    </div>

                    <div class="absolute w-full top-[50%] col-span-3">
                        <hr>
                    </div>

                    <div class="col-span-2">
                        <h1 class="font-bold text-lg flex justify-center items-end">I/№16</h1>
                    </div>
                    <div class="col-span-5 flex justify-center items-start">
                        <p class="text-sm">Let's embody your beautiful ideas together, simplify the way you
                            visualize your next big things.</p>
                    </div>
                    <div class="absolute w-full top-[75%] col-span-3">
                        <hr>
                    </div>
                </div>
            </div>
        </div>

        <img src="{{ asset('assets/images/avatars.png') }}" alt=""
            class="mx-0 h-[300px] md:h-full object-cover  md:bg-cover w-full my-5">
    </section>

    {{-- Contact us section --}}
    <section id="contact" class="w-[88%] md:w-full mx-auto my-8 md:m-0">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="md:mt-[4rem]">
                <div class="flex flex-col  items-center justify-center md:mb-0">
                    <h3 class="font-bold text-lg mb-5">Contact us</h3>
                    <p class="mb-7">(334) 202-4792</p>
                    <p class="mb-7">haddawy@comcast.net</p>
                    <p class="mb-7">998 Devonshire Ave.Camp Hill, PA 17011</p>
                </div>
            </div>

            <div class="bg-[#EFF6F3] p-8 md:px-10 md:py-28">
                <h1 class="text-center font-bold text-md mt-5 mb-10">Socialize with social</h1>
                <div class="flex items-start justify-center mb-5 md:mb-0">
                    <img class="mx-3" src="{{ asset('assets/images/instagram.svg') }}" alt="">
                    <img class="mx-3" src="{{ asset('assets/images/facebook.svg') }}" alt="">
                    <img class="mx-3" src="{{ asset('assets/images/twitter.svg') }}" alt="">
                    <img class="mx-3" src="{{ asset('assets/images/be.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</body>

</html>
