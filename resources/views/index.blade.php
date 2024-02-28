<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
    {{-- fonts --}}
    {{-- Inter font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="mx-[8%] text-[#2D2E2E]">
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

    <div class=" mt-[122px] mb-8">
        <img class="w-full mx-auto" src="{{ asset('images/main-image.png') }}" alt="main image">
    </div>
    <div class="flex flex-col items-center justify-center">
        <button
            class="w-[92%] h-[70px] font-medium  rounded-md text-xl px-4 py-2 translate-x-1 border border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] transition duration-300 transform hover:scale-105">Contact
            us
        </button>
        <p class="w-[92%] translate-x-1 mt-5 text-lg font-medium">It is a long established fact that a reader will be
            distracted by the readable content of a
            page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
            distribution of letters, as opposed to using 'Content here, content here', making it look like readable
            English.</p>
    </div>

    <div class="mt-6 mb-[134px]">
        <img class="w-full mx-auto" src="{{ asset('images/main-image1.png') }}" alt="main image 2">
    </div>
    {{-- Pricing --}}
    <section id="pricing" class="">
        <div class="p-8 mx-auto rounded-md shadow-lg mb-40">
            <p class="mb-3 font-bold uppercase">Free</p>
            <h3 class="mb-3"><span class="font-bold text-lg">$0</span>/month</h3>
            <p class="my-4 text-sm">It is a long established fact that a reader will be distracted.</p>
            <ul>
                <li class="mb-3">
                    <img class="inline" src="{{ asset('images/true.svg') }}" alt="true">
                    <h3 class="inline-block">PNG templates</h3>
                </li>
                <li class="opacity-50 mb-3">
                    <img class="inline" src="{{ asset('images/false.svg') }}" alt="true">
                    <h3 class="inline-block">Figma responsive
                        components</h3>
                </li>
                <li class="opacity-50 mb-3">
                    <img class="inline" src="{{ asset('images/false.svg') }}" alt="true">
                    <h3 class="inline-block">Custom templates</h3>
                </li>
            </ul>
            <button
                class="w-[90%] h-11 border border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] rounded-lg px-4 py-2 transition duration-300 transform hover:scale-105">Try
                now</button>

        </div>
    </section>
    {{-- Comments --}}
    <section id="comments" class="mb-20">
        <ul>
            <li class="opacity-50">
                <div class="grid grid-cols-10">
                    <div class="col-span-2 p-4 my-auto -translate-x-3"><img src="{{ asset('images/avatar1.png') }}"
                            alt=""></div>
                    <div class="col-span-7 bg-[#F6F6F6] w-full py-3 px-6 mt-12">
                        <p class="">It is a long established fact that a reader will be
                            distracted by the readable
                            content of a page when looking at its layout.</p>
                        <p class="font-bold">Lora Smith</p>
                    </div>
                    <div class="col-span-1 p-4 relative"><img class="absolute top-0 right-0"
                            src="{{ asset('images/comment.svg') }}" alt=""></div>
                </div>

            </li>
        </ul>
    </section>

    {{-- Subscribe --}}
    <section id="subscribe" class="">
        <h1 class="font-bold text-5xl mb-3">Try using our templates!</h1>
        <h3 class="text-md w-[80%]">
            Let's embody your beautiful ideas together, simplify the way you visualize your next big things.
        </h3>

        <div class="relative mb-10">
            <input class="w-full rounded-md bg-[#F6F6F6] h-[50px] p-2" placeholder="Email" type="email">
            <button
                class="absolute w-[30%] right-0 top-0 rounded-r-none rounded-tr-lg rounded-br-lg h-[50px] border border-white text-white bg-[#3A4F39] hover:bg-white hover:text-[#3A4F39] hover:border-[#3A4F39] p-2 transition duration-300 ">Subscribe</button>

            <img class="w-full rounded-md my-5" src="{{ asset('images/main-image1.png') }}" alt="">
        </div>
    </section>
    {{-- try us --}}
    {{-- need fixes for the left indent --}}
    <section id="try" class="w-[100vw] py-10 -translate-x-[80px] relative mx-0  bg-[#3A4F39] ">
        <div class="mx-[8%]">
            <h1 class="font-bold text-white text-5xl mb-3">Try using our templates!</h1>
            <h3 class="text-md text-white w-[80%]">
                Let's embody your beautiful ideas together, simplify the way you visualize your next big things.
            </h3>

            <div class="flex justify-end">
                <a class="text-[#F8D254] underline mr-3" href="#">Learn More</a>
                <img src="{{ asset('images/arrow.svg') }}" alt="arrow">
            </div>
        </div>

    </section>

    {{-- Unknown section --}}
    <section id="unknown" class="mt-[30px]">
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

        <img class="w-full h-12 object-cover mt-3" src="{{ asset('images/main-image1.png') }}" alt="">

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
        {{-- need fixes --}}
        <img src="{{asset('images/avatars.png')}}" alt="" class="mx-0 w-[100vw] object-cover h-64">

    </section>

    {{-- Contact us section --}}
    <section id="contact" class="mt-8">
        <div class="flex flex-col  items-center justify-center">
            <h3 class="font-bold text-lg mb-5">Contact us</h3>
            <p class="mb-7">(334) 202-4792</p>
            <p class="mb-7">haddawy@comcast.net</p>
            <p class="mb-7">998 Devonshire Ave.Camp Hill, PA 17011</p>
        </div>

        <div class="bg-[#EFF6F3] p-8">
            <h1 class="text-center font-bold text-md mt-5 mb-10">Socialize with social</h1>
            <div class="flex items-start justify-center mb-5">
                <img class="mx-3" src="{{asset('images/instagram.svg')}}" alt="">
                <img class="mx-3" src="{{asset('images/facebook.svg')}}" alt="">
                <img class="mx-3" src="{{asset('images/twitter.svg')}}" alt="">
                <img class="mx-3" src="{{asset('images/be.svg')}}" alt="">
            </div>
        </div>
    </section>
</body>

</html>
