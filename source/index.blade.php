@extends('_layouts.master')

@section('body')
<div class="bg-brown-lightest border-t-4 border-purple w-full pb-6"></div>

<main class="font-normal text-xl bg-brown-lightest">
    @include('_components.navigation')

    <div class="container-content">
        <div class="flex-col py-12 mb-8 pb-4">
            <h1 class="title-1 text-blue-darker leading-none">
                Static sites for <br />
                modern developers
            </h1>

            <p class="max-w-md mt-4 text-grey lead">
                Jigsaw is a framework for rapidly building static sites using the same modern tooling that powers your web applications.
            </p>
        </div>
    </div>

    <section class="flex -mb-12 justify-center">
        @component('_components.code-editor')
            <div class="flex items-center mb-4">
                <p class="mr-8 text-white">1</p>
                <div class="text-white font-light font-mono text-sm">@@extends('_layouts.master')</div>
            </div>
            <div class="flex items-center mb-4">
                <p class="mr-8 text-white">2</p>
                <div class="text-white font-light font-mono text-sm">@@section('body')</div>
            </div>
            <div class="flex items-center">
                <p class="mr-8 text-white">3</p>
                <div class="">Some line of code</div>
            </div>
        @endcomponent
    </section>

    @include('_components.getting-started')

    <section class="bg-white py-16">
        <div class="flex flex-col md:flex-row mb-12 md:mb-24 items-center container-content">
            <div class="flex-col pr-8 pb-8 md:pb-0">
                <h3 class="title-3 mb-4 text-blue-darker">
                    Blade templating, <br/>
                    just like your Laravel apps.
                </h3>

                <p class="text-blue">
                    Blade is a powerful, simple, and beautiful templating language, but until now it wasn't an option if you were building a simple static site that didn't need a complex PHP backend.
                </p>

                <p class="text-blue">
                    Jigsaw brings Blade to the static site world, so you can use the same templating engine for simple websites as you do for complex web applications.
                </p>
            </div>

            @component('_components.code-editor')
                <div class="editor-row">
                    <p class="line-number">1</p>
                    <div class="line-code">@@extends('_layouts.master')</div>
                </div>
                <div class="editor-row">
                    <p class="line-number">2</p>
                    <div class="line-code">@@section('body')</div>
                </div>
                <div class="editor-row">
                    <p class="line-number">3</p>
                    <div class="line-code ml-4"><span class="text-pink">&lt;h1&gt;</span>Hello World<span class="text-pink">&lt;/h1&gt;</span></div>
                </div>
                <div class="editor-row">
                    <p class="line-number">4</p>
                    <div class="line-code">@@endsection</div>
                </div>
            @endcomponent
        </div>

        <div class="flex flex-col md:flex-row pt-8 md:pt-0 container-content">
            <div class="flex-col pb-8 md:pb-0">
                <h3 class="title-3 mb-4 text-blue-darker">
                    Use Markdown for content-driven pages.
                </h3>

                <p class="text-blue">
                    Markdown is a fantastic writing format for things like articles, blog posts, or documentation pages.
                </p>

                <p class="text-blue mb-4">
                    Jigsaw makes it painless to create a layout in Blade, and fill it with content written in Markdown.
                </p>

                <a href="/docs/installation" title="Read the Jigsaw documentation"
                    class="text-purple text-base no-underline">
                    Learn more in the docs
                </a>
            </div>

            @component('_components.code-editor')
                <div class="editor-row">
                    <p class="line-number">1</p>
                    <div class="line-code">@@extends('_layouts.master')</div>
                </div>
                <div class="editor-row">
                    <p class="line-number">2</p>
                    <div class="line-code">@@section('body')</div>
                </div>
                <div class="editor-row">
                    <p class="line-number">3</p>
                    <div class="line-code ml-4"><span class="text-pink">&lt;h1&gt;</span>Hello World<span class="text-pink">&lt;/h1&gt;</span></div>
                </div>
                <div class="editor-row">
                    <p class="line-number">4</p>
                    <div class="line-code">@@endsection</div>
                </div>
            @endcomponent
        </div>
    </section>

    <section class="py-6 bg-brown-lightest">
        <div class="container-content py-6">
            <h3 class="title-3 text-blue-darker text-center mb-6">Compile your assets using Laravel Mix.</h3>
            <p class="text-center text-blue leading-normal">
                Jigsaw bakes in support for Laravel Mix so you can compile your CSS
                and Javascript assets the same way you're used to in Laravel.
            </p>
        </div>
    </section>

    <section class="bg-blue-darker py-16">
        <div class="text-center">
            <h4 class="title-4 text-white font-light mb-4">
                Ready to get started?
            </h4>

            <p class="text-teal-light font-light mb-8 leading-normal">
                Check out our installation instructions and you'll be <br/>
                up and running in no time.
            </p>

            <a href="{{ $page->asset_prefix }}/docs/installation/" class="py-4 px-6 text-grey-darker no-underline tracking-wide uppercase rounded-lg text-sm bg-grey-lightest shadow-lg">
                Build your site
            </a>
        </div>
    </section>
</main>
@endsection
