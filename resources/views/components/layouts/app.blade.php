<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="{{ $description ?? 'Junte-se a centenas de leitores e acelere seu aprendizado de programação.' }}" />

    <meta property="og:title" content="{{ $title ?? config('app.name') }}" />
    {{-- <meta property="og:image"
        content="{{ $image ?? 'https://i.useflipp.com/gw6mxpkgy4v8.png?title=' . urlencode($title ?? '') . '&body=' . urlencode($description ?? '') . '&watermark=useflipp.com' }}" /> --}}
    <meta property="og:image" content="/images/og-image.png" />
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

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="bg-white text-black antialiased dark:bg-gray-950 dark:text-white">
    <section class="mx-auto max-w-3xl px-4 sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="flex h-screen flex-col justify-between font-sans">
            <x-header />

            <main class="mb-auto">
                {{ $slot }}
            </main>

            <x-footer />
        </div>
    </section>
</body>

</html>
