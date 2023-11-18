<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog DougDesign</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-white text-black antialiased dark:bg-gray-950 dark:text-white">
    <section class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="flex h-screen flex-col justify-between font-sans">
            <header class="flex items-center justify-between py-10">
                <div><a aria-label="TailwindBlog" href="/">
                        <div class="flex items-center justify-between">
                            <div class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="53.87" height="43.61" viewBox="344.564 330.278 111.737 91.218">
                                    <defs>
                                        <linearGradient id="logo_svg__b" x1="420.97" x2="420.97" y1="331.28" y2="418.5" gradientUnits="userSpaceOnUse">
                                            <stop offset="0%" style="stop-color:#06b6d4;stop-opacity:1"></stop>
                                            <stop offset="100%" style="stop-color:#67e8f9;stop-opacity:1"></stop>
                                        </linearGradient>
                                        <linearGradient id="logo_svg__d" x1="377.89" x2="377.89" y1="331.28" y2="418.5" gradientUnits="userSpaceOnUse">
                                            <stop offset="0%" style="stop-color:#06b6d4;stop-opacity:1"></stop>
                                            <stop offset="100%" style="stop-color:#67e8f9;stop-opacity:1"></stop>
                                        </linearGradient>
                                        <path id="logo_svg__a" d="M453.3 331.28v28.57l-64.66 58.65v-30.08l64.66-57.14Z"></path>
                                        <path id="logo_svg__c" d="M410.23 331.28v28.57l-64.67 58.65v-30.08l64.67-57.14Z"></path>
                                    </defs>
                                    <use xlink:href="#logo_svg__a" fill="url(#logo_svg__b)"></use>
                                    <use xlink:href="#logo_svg__c" fill="url(#logo_svg__d)"></use>
                                </svg></div>
                            <div class="hidden h-6 text-2xl font-semibold sm:block">TailwindBlog</div>
                        </div>
                    </a></div>
                <div class="flex items-center space-x-4 leading-5 sm:space-x-6"><a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/blog">Blog</a><a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/tags">Tags</a><a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/projects">Projects</a><a class="hidden font-medium text-gray-900 dark:text-gray-100 sm:block" href="/about">About</a><button aria-label="Search"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6 text-gray-900 dark:text-gray-100">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                        </svg></button><button aria-label="Toggle Dark Mode"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-6 w-6 text-gray-900 dark:text-gray-100">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                        </svg></button><button aria-label="Toggle Menu" class="sm:hidden"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-8 w-8 text-gray-900 dark:text-gray-100">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg></button>
                    <div class="fixed left-0 top-0 z-10 h-full w-full transform bg-white opacity-95 duration-300 ease-in-out dark:bg-gray-950 dark:opacity-[0.98] translate-x-full">
                        <div class="flex justify-end"><button class="mr-8 mt-11 h-8 w-8" aria-label="Toggle Menu"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-gray-900 dark:text-gray-100">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg></button></div>
                        <nav class="fixed mt-8 h-full">
                            <div class="px-12 py-4"><a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/">Home</a></div>
                            <div class="px-12 py-4"><a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/blog">Blog</a></div>
                            <div class="px-12 py-4"><a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/tags">Tags</a></div>
                            <div class="px-12 py-4"><a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/projects">Projects</a></div>
                            <div class="px-12 py-4"><a class="text-2xl font-bold tracking-widest text-gray-900 dark:text-gray-100" href="/about">About</a></div>
                        </nav>
                    </div>
                </div>
            </header>

            <main class="mb-auto">
                {{ $slot }}
            </main>

            <footer>
                <div class="mt-16 flex flex-col items-center">
                    <div class="mb-3 flex space-x-4"><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank" rel="noopener noreferrer" href="mailto:address@yoursite.com"><span class="sr-only">mail</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="fill-current text-gray-700 hover:text-primary-500 dark:text-gray-200 dark:hover:text-primary-400 h-6 w-6">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg></a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank" rel="noopener noreferrer" href="https://github.com"><span class="sr-only">github</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current text-gray-700 hover:text-primary-500 dark:text-gray-200 dark:hover:text-primary-400 h-6 w-6">
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path>
                            </svg></a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank" rel="noopener noreferrer" href="https://facebook.com"><span class="sr-only">facebook</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current text-gray-700 hover:text-primary-500 dark:text-gray-200 dark:hover:text-primary-400 h-6 w-6">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                            </svg></a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank" rel="noopener noreferrer" href="https://youtube.com"><span class="sr-only">youtube</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current text-gray-700 hover:text-primary-500 dark:text-gray-200 dark:hover:text-primary-400 h-6 w-6">
                                <path d="M23.499 6.203a3.008 3.008 0 00-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 00-2.088 2.09A31.258 31.26 0 000 12.01a31.258 31.26 0 00.523 5.785 3.008 3.008 0 002.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 002.089-2.09 31.258 31.26 0 00.5-5.784 31.258 31.26 0 00-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
                            </svg></a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com"><span class="sr-only">linkedin</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current text-gray-700 hover:text-primary-500 dark:text-gray-200 dark:hover:text-primary-400 h-6 w-6">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg></a><a class="text-sm text-gray-500 transition hover:text-gray-600" target="_blank" rel="noopener noreferrer" href="https://twitter.com/Twitter"><span class="sr-only">twitter</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current text-gray-700 hover:text-primary-500 dark:text-gray-200 dark:hover:text-primary-400 h-6 w-6">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
                            </svg></a></div>
                    <div class="mb-2 flex space-x-2 text-sm text-gray-500 dark:text-gray-400">
                        <div>Tails Azimuth</div>
                        <div> • </div>
                        <div>© 2023</div>
                        <div> • </div><a href="/">Next.js Starter Blog</a>
                    </div>
                    <div class="mb-8 text-sm text-gray-500 dark:text-gray-400"><a target="_blank" rel="noopener noreferrer" href="https://github.com/timlrx/tailwind-nextjs-starter-blog">Tailwind Nextjs Theme</a></div>
                </div>
            </footer>
        </div>
    </section>


    @livewireScripts
</body>

</html>
