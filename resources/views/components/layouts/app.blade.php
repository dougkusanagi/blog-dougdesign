<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? "Page Title" }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

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
</body>

</html>
