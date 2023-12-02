<div>
    <div class="divide-y divide-gray-200 dark:divide-gray-700">
        <div class="pt-6 pb-8 space-y-2 md:space-y-5">
            <h1
                class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-6xl md:leading-14">
                Blog Doug Design
            </h1>

            <p class="text-lg leading-7 text-gray-500 dark:text-gray-400">
                Um blog desenvolvido na <a href="https://tallstack.dev/" target="_blank" class="underline">TALL
                    Stack</a>
            </p>
        </div>

        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
            @forelse ($posts as $post)
                <li class="py-12">
                    <article>
                        <div class="space-y-2 xl:grid xl:grid-cols-4 xl:items-baseline xl:space-y-0">
                            <dl>
                                <dt class="sr-only">Publicado em</dt>
                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time datetime="{{ $post->created_at }}">
                                        {{ $post->created_at->format('j \d\e F \d\e Y') }}
                                    </time>

                                    @if ($post->presenter()->imagePreview())
                                        <a class="text-gray-900 dark:text-gray-100"
                                            href="{{ route('posts.show', $post->slug) }}" wire:navigate.hover>
                                            <img loading="lazy"
                                                src="{{ $post->presenter()->imagePreview() ?? Vite::asset('resources/img/placeholder.jpg') }}"
                                                width="1000" width="562" alt="{{ $post->title }}"
                                                class="object-cover pt-1 pr-6 mb-4 aspect-video" />
                                        </a>
                                    @endif
                                </dd>
                            </dl>

                            <div class="space-y-5 xl:col-span-3">
                                <div class="space-y-6">
                                    <div>
                                        <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                            <a class="text-gray-900 dark:text-gray-100"
                                                href="{{ route('posts.show', $post->slug) }}" wire:navigate.hover>
                                                {{ $post->title }}
                                            </a>
                                        </h2>

                                        <div class="flex flex-wrap">
                                            @foreach ($post->categories as $category)
                                                <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                                    href="{{ route('categories.filter', $category->slug) }}">
                                                    {{ $category->name }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="prose text-gray-500 max-w-none dark:text-gray-400">
                                        {!! $post->presenter()->teaser() !!}
                                    </div>
                                </div>

                                <div class="text-base font-medium leading-6">
                                    <a class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                        aria-label='Read more: "Release of Tailwind Nextjs Starter Blog v2.0"'
                                        href="/{{ $post->slug }}" wire:navigate>Ler mais →</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </li>
            @empty
                <div class="pt-6 pb-8 space-y-2 md:space-y-5">
                    <h1
                        class="text-lg leading-9 tracking-tight text-center text-gray-900 dark:text-gray-600 sm:text-4xl sm:leading-10 md:text-2xl md:leading-14">
                        Nenhum artigo encontrado
                    </h1>
                </div>
            @endforelse
        </ul>
    </div>

    <div class="flex justify-end text-base font-medium leading-6">
        {{-- <a class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400" aria-label="All posts"
            href="/blog">
            Mais Artigos →
        </a> --}}

        {{ $posts->links() }}
    </div>
</div>
