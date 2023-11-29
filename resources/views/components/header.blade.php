<header class="flex items-center justify-between py-10">
    <div>
        <a aria-label="TailwindBlog" href="/" wire:navigate>
            <div class="flex items-center justify-between">
                {{-- <div class="mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.87"
                        height="43.61" viewBox="344.564 330.278 111.737 91.218">
                        <defs>
                            <linearGradient id="logo_svg__b" x1="420.97" x2="420.97" y1="331.28" y2="418.5"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0%" style="
                                            stop-color: #06b6d4;
                                            stop-opacity: 1;
                                        "></stop>
                                <stop offset="100%" style="
                                            stop-color: #67e8f9;
                                            stop-opacity: 1;
                                        "></stop>
                            </linearGradient>
                            <linearGradient id="logo_svg__d" x1="377.89" x2="377.89" y1="331.28" y2="418.5"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0%" style="
                                            stop-color: #06b6d4;
                                            stop-opacity: 1;
                                        "></stop>
                                <stop offset="100%" style="
                                            stop-color: #67e8f9;
                                            stop-opacity: 1;
                                        "></stop>
                            </linearGradient>
                            <path id="logo_svg__a" d="M453.3 331.28v28.57l-64.66 58.65v-30.08l64.66-57.14Z">
                            </path>
                            <path id="logo_svg__c" d="M410.23 331.28v28.57l-64.67 58.65v-30.08l64.67-57.14Z"></path>
                        </defs>
                        <use xlink:href="#logo_svg__a" fill="url(#logo_svg__b)"></use>
                        <use xlink:href="#logo_svg__c" fill="url(#logo_svg__d)"></use>
                    </svg>
                </div> --}}

                <div class="hidden h-6 text-2xl font-semibold sm:block">
                    Início
                </div>
            </div>
        </a>
    </div>

    <div class="flex items-center space-x-4 leading-5 sm:space-x-6">
        {{--
            <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/blog">
                Blog
            </a>

            <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/categories">
                Categorias
            </a>

            <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/projects">
                Projects
            </a>

            <a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/about">
                Sobre
            </a>

            <button aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-gray-900 dark:text-gray-100">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                </svg>
            </button>

            <button aria-label="Toggle Dark Mode">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="w-6 h-6 text-gray-900 dark:text-gray-100">
                    <path fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"></path>
                </svg></button><button aria-label="Toggle Menu" class="sm:hidden">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    class="w-8 h-8 text-gray-900 dark:text-gray-100">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        --}}

        <div
            class="fixed left-0 top-0 z-10 h-full w-full transform bg-white opacity-95 duration-300 ease-in-out dark:bg-gray-950 dark:opacity-[0.98] translate-x-full">
            <div class="flex justify-end">
                <button class="w-8 h-8 mr-8 mt-11" aria-label="Toggle Menu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                        class="text-gray-900 dark:text-gray-100">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <nav class="fixed h-full mt-8">
                <div class="px-12 py-4">
                    <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/">
                        Home
                    </a>
                </div>

                {{-- <div class="px-12 py-4">
                    <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/blog">
                        Blog
                    </a>
                </div>

                <div class="px-12 py-4">
                    <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/categories">
                        Categorias
                    </a>
                </div>

                <div class="px-12 py-4">
                    <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/projects">
                        Projects
                    </a>
                </div>

                <div class="px-12 py-4">
                    <a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/about">
                        Sobre
                    </a>
                </div> --}}
            </nav>
        </div>
    </div>
</header>
