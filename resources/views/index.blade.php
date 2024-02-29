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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .shadow {
            -webkit-box-shadow: 0px 2px 12px -1px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 2px 12px -1px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 12px -1px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body class="text-[#2D2E2E] overflow-x-hidden">

    {{-- Navbar --}}
    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/logo.svg') }}" alt="logo" class="h-8" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Get
                    started</button>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-black rounded md:bg-transparent md:text-blue-700"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 md:p-0 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- collapse toggling script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const button = document.querySelector('[data-collapse-toggle="navbar-cta"]');
            const menu = document.querySelector('#navbar-cta');

            button.addEventListener('click', function() {
                const expanded = button.getAttribute('aria-expanded') === 'true' || false;
                button.setAttribute('aria-expanded', !expanded);
                menu.classList.toggle('hidden');
            });
        });
    </script>
    {{-- Main --}}
    <section id="main" class="">
        <div class="grid grid-cols-1 md:grid-cols-4 md:h-[85vh]">
            <div class="p-4 md:p-0">
                <div class="mx-auto mt-[4rem] h-full md:m-0  md:my-0 md:pd-0 mb-8">
                    <img class="w-full h-full mx-auto" src="{{ asset('images/main-image.png') }}" alt="main image">
                </div>
            </div>
            <div class="col-span-2 py-20">
                <div class="flex flex-col items-center justify-center md:justify-end md:pb-8 md:h-full">
                    <button
                        class="w-[80%] md:w-[30%] h-[70px] font-medium  rounded-md text-xl px-4 py-2 translate-x-1 border border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] transition duration-300 transform hover:scale-105">Contact
                        us
                    </button>
                    <p class="w-[80%] text-justify mt-5 text-lg font-medium">It is a long established fact that a reader
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
                    <img class="w-full mx-auto" src="{{ asset('images/main-image1.png') }}" alt="main image 2">
                </div>
            </div>
        </div>
    </section>

    {{-- Pricing --}}
    <section id="pricing" class="mx-[2rem] md:mt-16">
        <div class="grid grid-cols-1 md:grid-cols-3 md:mx-9">

            <div class="p-8 mx-auto rounded-md shadow mb-40 md:me-[2rem]">
                <p class="mb-3 text-[1.5rem] font-bold uppercase">Free</p>

                <span class="flex items-center mb-3 text-[1rem]"><span
                        class="font-bold text-[2rem]">$0</span>/month</span>

                <p class="my-4 text-sm">It is a long established fact that a reader will be distracted.</p>
                <ul>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">PNG templates</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/false.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Figma responsive
                            components</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/false.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Constant updates</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/false.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Custom templates</h3>
                    </li>
                </ul>
                <button
                    class="w-full border text-lg border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] rounded-lg px-4 py-3 transition duration-300 transform hover:scale-105">Try
                    now</button>

            </div>

            <div class="p-8 mx-auto rounded-md border-4 border-[#3A4F39] boreder-solid mb-40  md:me-[2rem]">
                <div class="flex justify-between items-start">
                    <p class="mb-3 text-[1.5rem] font-bold uppercase">Premium</p>
                    <img class="h-7 w-7" src="{{ asset('images/true.svg') }}" alt="">
                </div>

                <span class="flex items-center mb-3 text-[1rem]"><span
                        class="font-bold text-[2rem]">$99</span>/month</span>

                <p class="my-4 text-sm">It is a long established fact that a reader will be distracted.</p>
                <ul>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">PNG templates</h3>
                    </li>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Figma responsive
                            components</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/false.svg') }}" alt="false">
                        <h3 class="inline-block text-[1.25rem]">Constant updates</h3>
                    </li>
                    <li class="opacity-50 mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/false.svg') }}" alt="false">
                        <h3 class="inline-block text-[1.25rem]">Custom templates</h3>
                    </li>
                </ul>
                <button
                    class="w-full border text-lg border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] rounded-lg px-4 py-3 transition duration-300 transform hover:scale-105">Try
                    now</button>

            </div>

            <div class="p-8 mx-auto rounded-md shadow mb-40  md:me-[2rem]">
                <p class="mb-3 text-[1.5rem] font-bold uppercase">Pro</p>

                <span class="flex items-center mb-3 text-[1rem]"><span
                        class="font-bold text-[2rem]">$199</span>/month</span>

                <p class="my-4 text-sm">It is a long established fact that a reader will be distracted.</p>
                <ul>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">PNG templates</h3>
                    </li>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Figma responsive
                            components</h3>
                    </li>
                    <li class=" mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/true.svg') }}" alt="true">
                        <h3 class="inline-block text-[1.25rem]">Constant updates</h3>
                    </li>
                    <li class="mb-5">
                        <img class="inline mr-[.25rem]" src="{{ asset('images/true.svg') }}" alt="true">
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
        {{-- <ul>
            <div class="grid grid-cols-1 md:grid-cols-3">
                <li class="opacity-30 mb-4">
                    <div class="flex items-end justify-end relative">
                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}" alt="comment">
                    </div>

                    <div class="grid grid-cols-10">
                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                src="{{ asset('images/avatar1.png') }}" alt=""></div>
                        <div class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                            <p class="">It is a long established fact that a reader will be
                                distracted by the readable
                                content of a page when looking at its layout.</p>
                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                        </div>
                    </div>
                </li>

                <li class="mb-4">
                    <div class="flex items-end justify-end relative">
                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}" alt="comment">
                    </div>
                    <div class="grid grid-cols-10">
                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                src="{{ asset('images/avatar2.png') }}" alt=""></div>
                        <div class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                            <p class="">It is a long established fact that a reader will be
                                distracted by the readable
                                content of a page when looking at its layout.</p>
                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                        </div>
                    </div>
                </li>

                <li class="mb-4">
                    <div class="flex items-end justify-end relative">
                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}" alt="comment">
                    </div>
                    <div class="grid grid-cols-10">
                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                src="{{ asset('images/avatar3.png') }}" alt=""></div>
                        <div class="col-span-8 bg-[#F6F6F6] w-full py-[1rem] px-[1.5rem] text-md rounded-sm mt-12">
                            <p class="">It is a long established fact that a reader will be
                                distracted by the readable
                                content of a page when looking at its layout.</p>
                            <p class="m-0 font-bold text-lg">Lora Smith</p>
                        </div>
                    </div>
                </li>
            </div>
        </ul> --}}


        <div class="relative">
            <div class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <ul>
                            <div class="grid grid-cols-1 md:grid-cols-3">
                                <li class="opacity-30 mb-4">
                                    <div class="flex items-end justify-end relative">
                                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}"
                                            alt="comment">
                                    </div>

                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('images/avatar1.png') }}" alt=""></div>
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
                                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('images/avatar2.png') }}" alt=""></div>
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
                                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('images/avatar3.png') }}" alt=""></div>
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
                                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}"
                                            alt="comment">
                                    </div>

                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('images/avatar2.png') }}" alt=""></div>
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
                                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('images/avatar1.png') }}" alt=""></div>
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
                                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('images/avatar3.png') }}" alt=""></div>
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
                                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}"
                                            alt="comment">
                                    </div>

                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('images/avatar3.png') }}" alt=""></div>
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
                                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('images/avatar2.png') }}" alt=""></div>
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
                                        <img class="absolute top-0 right-0" src="{{ asset('images/comment.svg') }}"
                                            alt="comment">
                                    </div>
                                    <div class="grid grid-cols-10">
                                        <div class="col-span-2 p-4 my-auto -translate-x-3"><img
                                                src="{{ asset('images/avatar1.png') }}" alt=""></div>
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

        <style>
            .carousel {
                overflow: hidden;
            }

            .carousel-inner {
                display: flex;
                transition: transform 0.3s ease;
            }

            .carousel-item {
                flex: 0 0 100%;
            }

            .carousel-dots {
                position: absolute;
                bottom: 10px;
                left: 50%;
                transform: translateX(-50%);
                display: flex;
            }

            .carousel-dot {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background-color: #333;
                margin: 0 5px;
                cursor: pointer;
            }

            .carousel-dot.active {
                background-color: #666;
            }
        </style>

        <script>
            const items = document.querySelectorAll('.carousel-item');
            const dots = document.querySelector('.carousel-dots');

            items.forEach((item, index) => {
                const dot = document.createElement('div');
                dot.classList.add('carousel-dot');
                if (index === 0) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => {
                    setActiveItem(index);
                });
                dots.appendChild(dot);
            });

            let activeIndex = 0;

            function setActiveItem(index) {
                items.forEach(item => {
                    item.style.transform = `translateX(-${index * 100}%)`;
                });
                const activeDot = document.querySelector('.carousel-dot.active');
                activeDot.classList.remove('active');
                dots.children[index].classList.add('active');
                activeIndex = index;
            }

            function nextItem() {
                activeIndex = (activeIndex + 1) % items.length;
                setActiveItem(activeIndex);
            }

            function prevItem() {
                activeIndex = (activeIndex - 1 + items.length) % items.length;
                setActiveItem(activeIndex);
            }

            setInterval(nextItem, 3000); // Auto slide every 3 seconds
        </script>

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
                <img class="w-full h-full rounded-md pb-5 md:m-0" src="{{ asset('images/main-image1.png') }}"
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
                <img class="md:h-6 md:w-6" src="{{ asset('images/arrow.svg') }}" alt="arrow">
            </div>
        </div>
    </section>
    {{-- Unknown section --}}
    <section id="unknown" class=" mx-auto mt-[30px]">
        <div class="w-[88%]">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <h1 class="font-bold text-lg">I/№16</h1>
                </div>
                <div class="col-span-2">
                    <p class="text-md">Let's embody your beautiful ideas together, simplify the way you
                        visualize your next big things.</p>
                </div>
            </div>
            <hr>
            <img class="w-full object-cover mt-3" src="{{ asset('images/main-image1.png') }}" alt="">

            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <h1 class="font-bold text-lg">I/№16</h1>
                </div>
                <div class="col-span-2">
                    <p class="text-md">Let's embody your beautiful ideas together, simplify the way you
                        visualize your next big things.</p>
                </div>
            </div>
            <hr>
        </div>
        <img style="object-fit:none" src="{{ asset('images/avatars.png') }}" alt=""
            class="mx-0 w-[100vw]   my-5">
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
                    <img class="mx-3" src="{{ asset('images/instagram.svg') }}" alt="">
                    <img class="mx-3" src="{{ asset('images/facebook.svg') }}" alt="">
                    <img class="mx-3" src="{{ asset('images/twitter.svg') }}" alt="">
                    <img class="mx-3" src="{{ asset('images/be.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</body>

</html>
