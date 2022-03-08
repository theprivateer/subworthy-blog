<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <link rel="shortcut icon" href="/assets/img/favicon.png?ck={{ uniqid() }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="https://use.typekit.net/rjz3xri.css">
        <link rel="stylesheet" href="{{ mix('css/style.css', 'assets/build') }}?ck={{ uniqid() }}">
        {{-- <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script> --}}
        <link rel="alternate" type="application/rss+xml" title="{{ $page->rssTitle }}" href="{{ $page->baseUrl.'/rss.xml' }}" />

{{--        @if($page->production)--}}
{{--        <!-- Fathom - beautiful, simple website analytics -->--}}
{{--        <script src="https://happy-essential.subworthy.com/script.js" data-site="ITUQWDHL" defer></script>--}}
{{--        <!-- / Fathom -->--}}
{{--        @endif--}}

        <meta property="og:title" content="{!! $page->title !!}" />
        <meta property="og:description" content="{!! $page->description !!}" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="{!! $page->og_image ?? 'https://blog.subworthy.com/assets/img/social/og/default.png' !!}" /> {{-- 1200x630--}}
        <meta property="og:url" content="{!! $page->getUrl() !!}" />

        <meta name="twitter:title" content="{!! $page->title !!}" />
        <meta name="twitter:description" content="{!! $page->description !!}" />
        <meta name="twitter:site" content="@SubworthyApp" />
        <meta name="twitter:image" content="{!! $page->twitter_image ?? 'https://blog.subworthy.com/assets/img/social/twitter/default.png' !!}" />

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
                        <li class="list-inline-item">•</li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/SubworthyApp" class="text-dark text-decoration-none">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @section('scripts')
        @show
    </body>
</html>
