<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Styled by Bella</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="antialiased bg-[url('/img/background.png')] bg-no-repeat ">

    <!-- ++++++++++++++NAVIGATION BAR+++++++++++++ -->
    <nav class="flex items-center h-14 p-3 z-10" x-data="{ open: false }">
        <img class="m-5 pt-20" src="img/logo8.png" alt="logo">

        <div class="ml-auto flex flex-col pr-8" @click.away="open = false">
            <!-- Toggle button for dropdown -->
            <div class="px-4 cursor-pointer lg:hidden" @click="open = !open">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>

            <!-- Dropdown Menu -->
            <ul :class="{ 'hidden': !open, 'flex': open }" class="text-yellow-800 flex-col lg:flex-row lg:gap-6 lg:flex"
                id="nav">
                <li><a href="#" class="hover:text-yellow-500" @click="open = false">Home</a></li>
                <li><a href="#about" class="hover:text-yellow-500" @click="open = false">About</a></li>
                <li><a href="#collections" class="hover:text-yellow-500" @click="open = false">Collections</a>
                </li>
                <li><a href="{{ route('products.index') }}" class="hover:text-yellow-500" @click="open = false">Shop</a></li>
                <li><a href="#contact" class="hover:text-yellow-500" @click="open = false">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main>

        {{-- +++++++++++++++++++HOME++++++++++++  --}}
        <section class="h-full relative">
            {{-- flex div --}}
            <div class="md:flex flex-row-reverse justify-between items-center h-full md:h-96 lg:h-full">

                {{-- image div  --}}


                <img class="lg:w-4/12 mr-28 mt-20  lg:mt-0" src="img/ladyinyellow.png" alt="lady in pink">

                {{-- text div  --}}
                <div class="font-light bg-green-500">
                    <div class="absolute inset-40 -z-10 md:ml-28 md:mt-28">
                        <h1 class="md:text-6xl text-sm text-yellow-800 tracking-wide">
                            You should always<br>feel pretty
                        </h1>
                        <p class="pt-4 md:text-2xl text-lg text-gray-400">
                            Styled by Bella
                        </p>
                    </div>

                </div>



            </div>

            <div class="rotate-90 absolute -left-16 bottom-64 text-gray-400 invisible lg:visible">
                <a href="">INSTAGRAM</a>
                <a class="pl-4 pr-4" href="">X</a>
                <a href="">FACEBOOK</a>
            </div>
        </section>




        {{-- ++++++++++++++++++++++ABOUT++++++++++++++++++++++++  --}}
        <section class="bg-white" id="about">
            {{-- you can have anything div  --}}

            <div class="lg:flex">{{-- flex div  --}}
                <div class="p-5 lg:w-3/5 md:mt-40 lg:pl-10 md:pr-10 ">
                    <h2 class="text-xl pb-2 font-bold italic text-center text-yellow-800 md:text-2xl">
                        You can have anything you want in life if you dress for it
                    </h2>
                    <p class="text-gray-400 text-justify lg:text-lg">
                        Whether it's conquering the boardroom, expressing your unique personality, or simply embracing
                        the
                        day
                        with flair, Baobei Fashion is here to be your accomplice on your journey to success. Every piece
                        in
                        our
                        collection is curated to inspire and elevate, because we believe that your style should be a
                        reflection
                        of your limitless potential. So, dress for the life you envision, and let Baobei Fashion be your
                        partner
                        in creating a wardrobe that speaks volumes about your aspirations and individuality.
                    </p>
                    <a href="{{ route('products.index') }}">
                    <button
                        class=" mt-5 text-white text-lg bg-gradient-to-r from-yellow-900 to-yellow-500 hover:from-yellow-500 hover:to-yellow-900 px-8 py-2 rounded">
                        Buy Now
                    </button>
                    </a>
                </div>
                <img class="mt-5" src="img/beigedress.jpg" alt="beige outfit">
            </div>

            {{-- everyone can explore div --}}

            <div class="lg:flex flex-row-reverse">{{-- flex div  --}}
                <div class="p-5 lg:w-3/5 lg:mt-40 md:pl-10 md:pr-10 ">
                    <h2 class="text-xl pb-2 text-yellow-800 font-bold italic text-center md:text-2xl">
                        Everyone can explore the style they want
                    </h2>
                    <p class="text-gray-400 text-justify md:text-l">
                        Whether it's conquering the boardroom, expressing your unique personality, or simply embracing
                        the
                        day
                        with flair, Baobei Fashion is here to be your accomplice on your journey to success. Every piece
                        in
                        our
                        collection is curated to inspire and elevate, because we believe that your style should be a
                        reflection
                        of your limitless potential. So, dress for the life you envision, and let Baobei Fashion be your
                        partner
                        in creating a wardrobe that speaks volumes about your aspirations and individuality.
                    </p>
                    <a href="{{ route('products.index') }}">
                    <button
                        class=" mt-5 text-white text-lg bg-gradient-to-r from-yellow-900 to-yellow-500 hover:from-yellow-500 hover:to-yellow-900 px-8 py-2 rounded">
                        Buy Now
                    </button>
                </a>
                </div>
                <img class="mt-5" src="img/redshoes.jpg" alt="red outfit">
            </div>

        </section>

        {{-- COLLECTIONS --}}
        <section class="bg-gray-0 " id="collections">
            <h2 class="text-4xl text-center pt-10 text-yellow-800">
                Our Collections
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 p-5 gap-4 md:pt-36">

                {{-- summer div --}}
                <div class="p-5 mb-4 bg-gray-100 rounded-lg shadow-lg hover:scale-105">
                    <img class="rounded-lg" src="img/summer.png" alt="summer dress">
                    <h4 class="text-center pt-2 text-yellow-800">Summer</h4>
                </div>

                {{-- fall div --}}
                <div class="p-5 mb-4 bg-gray-100 rounded-lg shadow-lg hover:scale-105">
                    <img class="rounded-lg" src="img/fall.png" alt="fall outfit">
                    <h4 class="text-center pt-2 text-yellow-800">Fall</h4>
                </div>

                {{-- winter div --}}
                <div class="p-5 mb-4 bg-gray-100 rounded-lg shadow-lg hover:scale-105">
                    <img class="rounded-lg" src="img/winter.jpg" alt="winter outfit">
                    <h4 class="text-center pt-2 text-yellow-800">winter</h4>
                </div>

                {{-- spring div --}}
                <div class="p-5 mb-4 bg-gray-100 rounded-lg shadow-lg hover:scale-105">
                    <img class="rounded-lg" src="img/spring.png" alt="spring outfit">
                    <h4 class="text-center pt-2 text-yellow-800">Spring</h4>
                </div>

            </div>

        </section>
    </main>


    <footer class="bg-gradient-to-r from-purple-100 via-sky-100 to-sky-200  pt-10 pl-10 pr-10 pb-5 gap-10" id="contact">
        <div class="md:flex gap-10">
            <div class="md:mr-20 md:ml-10">
                <img src="img/logo8.png" alt="logo">
            </div>


            <div class="md:flex gap-16 lg:gap-40 text-center md:text-left pt-5">
                {{-- useful links div --}}
                <div>
                    <h4 class="text-yellow-900 text-lg">Useful Links</h4>
                    <ul class="text-gray-500 pb-5">
                        <li class="hover:text-yellow-800"><a href="#">Home</a></li>
                        <li class="hover:text-yellow-800"><a href="{{ route('products.index') }}">Shop</a></li>
                        <li class="hover:text-yellow-800"><a href="{{ route('categories.index') }}">Collections</a></li>
                        <li class="hover:text-yellow-800"><a href="#about">About</a></li>
                    </ul>
                </div>

                {{-- collections links div --}}
                <div>
                    <h4 class="text-yellow-900 text-lg">Our collections</h4>
                    <ul class="text-gray-500 pb-5">
                        <li class="hover:text-yellow-800"><a href="{{ route('categories.index') }}">Summer</a></li>
                        <li class="hover:text-yellow-800"><a href="{{ route('categories.index') }}">Fall</a></li>
                        <li class="hover:text-yellow-800"><a href="{{ route('categories.index') }}">Winter</a></li>
                        <li class="hover:text-yellow-800"><a href="{{ route('categories.index') }}">Spring</a></li>
                    </ul>
                </div>

                {{-- Social links div --}}
                <div>
                    <h4 class="text-yellow-900 text-lg pb-4">Get In Touch</h4>
                    <ul class="flex justify-center gap-4 text-gray-500 ">
                        <li class="w-10 bg-white p-2 rounded-full"><a href="">
                                <svg class="fill-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </a></li>
                        <li class="w-10 bg-white p-2 rounded-full"><a href="">
                                <svg class="fill-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                                </svg>
                            </a></li>
                        <li class="w-10 bg-white p-2 rounded-full"><a href="">
                                <svg class="fill-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                </svg>
                            </a></li>
                        <li class="w-10 bg-white p-2 rounded-full"><a href="">
                                <svg class="fill-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                </svg>
                            </a></li>
                        <li class="w-10 bg-white p-2 rounded-full"><a href="">
                                <svg class="fill-yellow-600" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path
                                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="pt-10 text-center text-gray-500 md:flex justify-center">
            <p class="">
                Styled By Bella &copy; 2024 All rights Reserved.
            </p>
            <p class="text-yellow-800">
                Terms and condtions.
            </p>
            <p>
                Made with ❤️ by <a class="text-yellow-800" href="">Terry Wambui</a>
            </p>
        </div>


    </footer>
</body>

</html>
