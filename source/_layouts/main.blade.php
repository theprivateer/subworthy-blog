<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <link rel="shortcut icon" href="/assets/img/favicon.png?ck={{ uniqid() }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/style.css', 'assets/build') }}?ck={{ uniqid() }}">
        {{-- <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script> --}}
        <link rel="alternate" type="application/rss+xml" title="{{ $page->rssTitle }}" href="{{ $page->baseUrl.'/rss.xml' }}" />

        @if($page->production)
        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="ITUQWDHL" defer></script>
        <!-- / Fathom -->
        @endif
        @section('head')
        @show
    </head>
    <body>
        @yield('nav')

        @yield('body')

        <div class="container mt-4 py-4">
            <div class="row justify-content-center">
                <div class="col-md-9 small">
                    <ul class="list-inline m-0 d-flex justify-content-between">
                        <li class="list-inline-item"><strong>&copy; {{ date('Y')}} <a href="https://philstephens.com" class="text-dark text-decoration-none">Phil Stephens</a></strong></li>
                        <li class="list-inline-item">Powered by <a href="https://jigsaw.tighten.co">Jigsaw</a> and <a
                                    href="https://www.netlify.com">Netlify</a></li>
                    </ul>
                </div>
            </div>
        </div>

        @section('scripts')
        @show
    </body>
</html>
