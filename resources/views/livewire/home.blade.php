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
            @foreach($posts as $post)
            <li class="py-12">
                <article>
                    <div class="space-y-2 xl:grid xl:grid-cols-4 xl:items-baseline xl:space-y-0">
                        <dl>
                            <dt class="sr-only">Publicado em</dt>
                            <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                <time datetime="{{ $post->created_at }}">
                                    {{ $post->created_at->format('d/m/Y') }}
                                </time>
                            </dd>
                        </dl>

                        <div class="space-y-5 xl:col-span-3">
                            <div class="space-y-6">
                                <div>
                                    <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                        <a class="text-gray-900 dark:text-gray-100"
                                            href="/blog/release-of-tailwind-nextjs-starter-blog-v2.0">
                                            {{ $post->title }}
                                        </a>
                                    </h2>

                                    <div class="flex flex-wrap">
                                        @foreach ($post->categories as $category)
                                        <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                            href="/tags/next-js">
                                            {{ $category->name }}
                                        </a>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="prose text-gray-500 max-w-none dark:text-gray-400">
                                    {{ $post->excerpt }}
                                </div>
                            </div>

                            <div class="text-base font-medium leading-6">
                                <a class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                    aria-label='Read more: "Release of Tailwind Nextjs Starter Blog v2.0"'
                                    href="/blog/release-of-tailwind-nextjs-starter-blog-v2.0">Ler mais →</a>
                            </div>
                        </div>
                    </div>
                </article>
            </li>
            @endforeach

            {{-- <li class="py-12">
                <article>
                    <div class="space-y-2 xl:grid xl:grid-cols-4 xl:items-baseline xl:space-y-0">
                        <dl>
                            <dt class="sr-only">Published on</dt>
                            <dd class="text-base font-medium leading-6 text-gray-500 dark:text-gray-400">
                                <time datetime="2023-08-05T00:00:00.000Z">August 5, 2023</time>
                            </dd>
                        </dl>

                        <div class="space-y-5 xl:col-span-3">
                            <div class="space-y-6">
                                <div>
                                    <h2 class="text-2xl font-bold leading-8 tracking-tight">
                                        <a class="text-gray-900 dark:text-gray-100"
                                            href="/blog/release-of-tailwind-nextjs-starter-blog-v2.0">Release of
                                            Tailwind Nextjs Starter
                                            Blog v2.0</a>
                                    </h2>

                                    <div class="flex flex-wrap">
                                        <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                            href="/tags/next-js">
                                            next-js
                                        </a>

                                        <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                            href="/tags/tailwind">
                                            tailwind
                                        </a>

                                        <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                            href="/tags/guide">
                                            guide
                                        </a>

                                        <a class="mr-3 text-sm font-medium uppercase text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                            href="/tags/feature">
                                            feature
                                        </a>
                                    </div>
                                </div>

                                <div class="prose text-gray-500 max-w-none dark:text-gray-400">
                                    Release of Tailwind Nextjs Starter Blog
                                    template v2.0, refactored with Nextjs App
                                    directory and React Server Components
                                    setup.Discover the new features and how to
                                    migrate from V1.
                                </div>
                            </div>

                            <div class="text-base font-medium leading-6">
                                <a class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                                    aria-label='Read more: "Release of Tailwind Nextjs Starter Blog v2.0"'
                                    href="/blog/release-of-tailwind-nextjs-starter-blog-v2.0">Read more →</a>
                            </div>
                        </div>
                    </div>
                </article>
            </li> --}}
        </ul>
    </div>

    <div class="flex justify-end text-base font-medium leading-6">
        <a class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400" aria-label="All posts"
            href="/blog">
            Mais Artigos →
        </a>
    </div>

    <div class="flex items-center justify-center pt-4">
        <div>
            <div class="pb-1 text-lg font-semibold text-gray-800 dark:text-gray-100">
                Subscribe to the newsletter
            </div>
            <form class="flex flex-col sm:flex-row">
                <div>
                    <label for="email-input"><span class="sr-only">Email address</span><input autocomplete="email"
                            class="px-4 rounded-md focus:ring-primary-600 w-72 focus:border-transparent focus:outline-none focus:ring-2 dark:bg-black"
                            id="email-input" placeholder="Enter your email" required="" type="email"
                            name="email" /></label>
                </div>
                <div class="flex w-full mt-2 rounded-md shadow-sm sm:mt-0 sm:ml-3">
                    <button
                        class="w-full px-4 py-2 font-medium text-white rounded-md bg-primary-500 sm:py-0 hover:bg-primary-700 dark:hover:bg-primary-400 focus:ring-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:ring-offset-black"
                        type="submit">
                        Sign up
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
