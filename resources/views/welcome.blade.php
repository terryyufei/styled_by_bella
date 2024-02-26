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
                <li><a href="{{ route('products.index') }}" class="hover:text-yellow-500" @click="open = false">Shop</a>
                </li>
                <li><a href="#contact" class="hover:text-yellow-500" @click="open = false">Contact</a></li>
            </ul>
        </div>
    </nav>
    <main>

        {{-- +++++++++++++++++++HOME++++++++++++  --}}
        <section class="h-full relative" id="home">
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
                <a href="https://portfolio-tau-two-84.vercel.app/" target="_blank">PORTFOLIO</a>
                <a class="pl-4 pr-4" href="https://twitter.com/Mssophia_" target="_blank">X</a>
                <a href="https://github.com/terryyufei" target="_blank">GITHUB</a>
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


    <footer class="bg-gradient-to-r from-purple-100 via-sky-100 to-sky-200  pt-10 pl-10 pr-10 pb-5 gap-10"
        id="contact">
        <div class="md:flex gap-10">
            <div class="md:mr-20 md:ml-10">
               <a href="#home"> <img src="img/logo8.png" alt="logo"> </a>
            </div>


            <div class="md:flex gap-16 lg:gap-40 text-center md:text-left pt-5">
                {{-- useful links div --}}
                <div>
                    <h4 class="text-yellow-900 text-lg">Useful Links</h4>
                    <ul class="text-gray-500 pb-5">
                        <li class="hover:text-yellow-800"><a href="#">Home</a></li>
                        <li class="hover:text-yellow-800"><a href="{{ route('products.index') }}">Shop</a></li>
                        <li class="hover:text-yellow-800"><a href="{{ route('categories.index') }}">Collections</a>
                        </li>
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
                        {{-- Whatsapp  --}}
                        <li class="w-10 bg-white p-2 rounded-full hover:scale-125"><a
                                href="https://wa.me/+254726424234" target="_blank">
                                <x-whatsapp-icon class="hover:fill-purple-600"></x-whatsapp-icon>
                            </a></li>
                        {{-- Twitter  --}}
                        <li class="w-10 bg-white p-2 rounded-full hover:scale-125"><a
                                href="https://twitter.com/Mssophia_" target="_blank">
                                <x-twitter-icon class="hover:fill-purple-600"></x-twitter-icon>
                            </a></li>
                        {{-- gmail --}}
                        <li class="w-10 bg-white p-2 rounded-full hover:scale-125">
                            <a href="mailto:shikuwambui@gmail.com" target="_blank">
                                <x-email-icon class="hover:fill-purple-600"></x-email-icon>
                            </a>
                        </li>
                        {{-- Linkedin --}}
                        <li class="w-10 bg-white p-2 rounded-full hover:scale-125"><a
                                href="https://www.linkedin.com/in/terry-wambui-0629b7115/" target="_blank">
                                <x-linkedin-icon class="hover:fill-purple-600"></x-linkedin-icon>
                            </a></li>
                        {{-- github --}}
                        <li class="w-10 bg-white p-2 rounded-full hover:scale-125"><a
                                href="https://github.com/terryyufei/styled_by_bella" target="_blank">
                                <x-github-icon class="hover:fill-purple-600"></x-github-icon>
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
                Made with ❤️ by <a class="text-yellow-800 hover:text-purple-900" href="https://portfolio-tau-two-84.vercel.app/"
                    target="_blank">Terry Wambui</a>
            </p>
        </div>


    </footer>
</body>

</html>
