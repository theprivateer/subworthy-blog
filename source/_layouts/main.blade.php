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
        <script src="https://happy-essential.subworthy.com/script.js" data-site="ITUQWDHL" defer></script>
        <!-- / Fathom -->
        @endif
        @section('head')
        @show
    </head>
    <body>
        <div class="position-relative small p-1 m-0 d-flex justify-content-center bg-dark text-light align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle me-1" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
              </svg>
    
            <span class="m-0 p-0">
                <a href="https://subworthy.com/register" class="stretched-link text-light text-decoration-none">Start using Subworthy today - it's free!</a>
            </span>
        </div>

        @yield('nav')

        @yield('body')

        <div class="container mt-4 py-4">
            <div class="row justify-content-center">
                <div class="col-md-9 small d-flex justify-content-between">
                    <div>
                        <strong>&copy; {{ date('Y')}} <a href="https://philstephens.com" class="text-dark text-decoration-none">Phil Stephens</a></strong>
                    </div>
                    
                    <ul class="list-inline m-0">
                        <li class="list-inline-item"><a href="https://subworthy.com" class="text-dark text-decoration-none">Subworthy Home</a></li>
                        <li class="list-inline-item">•</li>
                        <li class="list-inline-item"><a href="/changelog" class="text-dark text-decoration-none">Changelog</a></li>
                    </ul>
                </div>
            </div>
        </div>

        @section('scripts')
        @show
    </body>
</html>
