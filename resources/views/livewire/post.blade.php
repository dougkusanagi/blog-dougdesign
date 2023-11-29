<div>
    <section class="max-w-3xl px-4 mx-auto sm:px-6 xl:max-w-5xl xl:px-0">
        <div class="fixed flex-col hidden gap-3 bottom-8 right-8 md:hidden">
            <button aria-label="Scroll To Comment"
                class="p-2 text-gray-500 transition-all bg-gray-200 rounded-full hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600">
                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <button aria-label="Scroll To Top"
                class="p-2 text-gray-500 transition-all bg-gray-200 rounded-full hover:bg-gray-300 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600">
                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <article>
            <div class="xl:divide-y xl:divide-gray-200 xl:dark:divide-gray-700">
                <header class="pt-6 xl:pb-6">
                    <div class="space-y-1 text-center">
                        <dl class="space-y-10">
                            <div>
                                <dt class="sr-only">Publicado em</dt>

                                <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                    <time datetime="{{ $post->created_at }}">
                                        {{ $post->created_at->format('l, j \d\e F \d\e Y') }}
                                    </time>
                                </dd>
                            </div>
                        </dl>
                        <div>
                            <h1
                                class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">
                                {{ $post->title }}
                            </h1>
                        </div>
                    </div>
                </header>

                <div
                    class="grid-rows-[auto_1fr] divide-y divide-gray-200 pb-8 dark:divide-gray-700 xl:grid xl:grid-cols-4 xl:gap-x-6 xl:divide-y-0">
                    <dl class="pt-6 pb-10 xl:border-b xl:border-gray-200 xl:pt-11 xl:dark:border-gray-700">
                        <dt class="sr-only">Authors</dt>
                        <dd>
                            <ul
                                class="flex flex-wrap justify-center gap-4 sm:space-x-12 xl:block xl:space-x-0 xl:space-y-8">
                                <li class="flex items-center space-x-2">
                                    <img alt="avatar" loading="lazy" width="38" height="38" decoding="async"
                                        data-nimg="1" class="w-10 h-10 rounded-full"
                                        src="https://pbs.twimg.com/profile_images/1565402558033698816/SneICrxj_400x400.jpg"
                                        style="color: transparent;">

                                    <dl class="text-sm font-medium leading-5 whitespace-nowrap">
                                        <dt class="sr-only">Name</dt>
                                        <dd class="text-gray-900 dark:text-gray-100">Douglas Lopes</dd>
                                        <dt class="sr-only">Twitter</dt>
                                        <dd>
                                            <a target="_blank" rel="noopener noreferrer"
                                                href="https://twitter.com/DougLopesReal"
                                                class="text-primary-600 dark:text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                                @Twitter
                                            </a>
                                        </dd>
                                    </dl>
                                </li>
                            </ul>
                        </dd>
                    </dl>

                    <div class="divide-y divide-gray-200 dark:divide-gray-700 xl:col-span-3 xl:row-span-2 xl:pb-0">
                        <div class="pt-10 pb-8 prose max-w-none dark:prose-invert">
                            @if (!empty($post->presenter()->tree()))
                                <p class="font-bold">Índice:</p>

                                <ul>
                                    @foreach ($post->presenter()->tree() as $branch)
                                        <li>
                                            <a href="#{{ Str::slug($branch['value']) }}">{{ $branch['value'] }}</a>

                                            <x-post.tree.branch :branches="$branch['children']" />
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            @if ($image = $post->presenter()->image())
                                <img src="{{ $image }}" width="1000" height="562" alt="{{ $post->title }}"
                                    class="object-cover w-full aspect-video" />
                            @endif

                            <x-markdown>
                                {!! $post->presenter()->content() !!}
                            </x-markdown>
                        </div>

                        {{-- <div class="pt-6 pb-6 text-sm text-gray-700 dark:text-gray-300">
                            <a target="_blank" rel="nofollow"
                                href="https://mobile.twitter.com/search?q=https%3A%2F%2Ftailwind-nextjs-starter-blog.vercel.app%2Fblog%2Fnested-route%2Fintroducing-multi-part-posts-with-nested-routing">Discuss
                                on Twitter
                            </a>
                            •
                            <a target="_blank" rel="noopener noreferrer"
                                href="https://github.com/timlrx/tailwind-nextjs-starter-blog/blob/main/data/blog/nested-route/introducing-multi-part-posts-with-nested-routing.mdx">
                                View on GitHub
                            </a>
                        </div>

                        <div class="pt-6 pb-6 text-center text-gray-700 dark:text-gray-300" id="comment">
                            <button>
                                Load Comments
                            </button>
                        </div> --}}
                    </div>

                    <footer>
                        <div
                            class="text-sm font-medium leading-5 divide-gray-200 dark:divide-gray-700 xl:col-start-1 xl:row-start-2 xl:divide-y">
                            <div class="py-4 xl:py-8">
                                <h2 class="text-xs tracking-wide text-gray-500 uppercase dark:text-gray-400">Categorias
                                </h2>

                                <div class="flex flex-wrap">
                                    @foreach ($post->categories as $category)
                                        <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                            href="/categories/{{ $category->slug }}">
                                            {{ $category->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                            {{-- <div class="flex justify-between py-4 xl:block xl:space-y-8 xl:py-8">
                                <div>
                                    <h2 class="text-xs tracking-wide text-gray-500 uppercase dark:text-gray-400">
                                        Artigo Anterior
                                    </h2>

                                    <div class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                        <a href="/blog/introducing-tailwind-nextjs-starter-blog">
                                            Introducing Tailwind
                                            Nextjs Starter Blog
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="text-xs tracking-wide text-gray-500 uppercase dark:text-gray-400">
                                        Próximo Artigo
                                    </h2>

                                    <div class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400">
                                        <a href="/blog/new-features-in-v1">
                                            New features in v1
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="pt-4 xl:pt-8">
                            <a class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                aria-label="Back to the blog" href="{{ route('home') }}">
                                ← Página inicial</a>
                        </div>
                    </footer>
                </div>
            </div>
        </article>
    </section>
</div>
