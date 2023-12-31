<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="{{ $description ?? 'Junte-se a centenas de leitores e acelere seu aprendizado de programação.' }}" />
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:title" content="{{ $title ?? config('app.name') }}" />
    <meta property="og:description"
        content="{{ $description ?? 'Junte-se a centenas de leitores e acelere seu aprendizado de programação.' }}" />
    <meta property="og:image" content="{{ $image ?? '/images/og-image.png' }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:creator" content="@douglopesreal" />
    <meta name="twitter:description"
        content="{{ $description ?? 'Junte-se a centenas de leitores e acelere seu aprendizado de programação.' }}" />
    <meta name="twitter:image" content="{{ $image ?? '/images/og-image.png' }}" />
    <meta name="twitter:title" content="{{ $title ?? config('app.name') }}" />
    <meta name="theme-color" content="#ec4899" />

    <title>{{ $title ?? 'Blog Doug Design' }}</title>

    {{-- favicon --}}
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="antialiased text-black bg-white dark:bg-gray-950 dark:text-white">
    <section class="max-w-3xl px-4 mx-auto sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="flex flex-col justify-between h-screen font-sans">
            <x-header />

            <main class="mb-auto">
                {{ $slot }}
            </main>

            <x-footer />
        </div>
    </section>

    @livewire('notifications')
    @filamentScripts
    @vite('resources/js/app.js')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6VNXK1N5QD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-6VNXK1N5QD');
    </script>

    <!-- Google Adsense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5927498436558135"
        crossorigin="anonymous"></script>
</body>

</html>
