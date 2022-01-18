@extends('_layouts.main')

@section('nav')
<div class="container mt-4 py-4">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                                <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/">Subworthy Blog</a>
                    </li>
                    <li class="breadcrumb-item">
                        {{ date('Y', $page->date) }}
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        {{ date('F j', $page->date) }}
                    </li>
                </ol>
              </nav>
        </div>
    </div>
</div>
@endsection

@section('body')
<div class="page-content">
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h1>{{ $page->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-11 col-lg-9">
                @yield('content')

                <p><a class="text-body" href="mailto:admin@subworthy.com?subject=Blog: {{ $page->title }}">Reply via email &rarr;</a></p>
            </div>
        </div>

{{--        <div class="row justify-content-center mt-4">--}}
{{--            <div class="col-md-9 col-lg-7 text-center">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <p>Subscribe to get future posts direct to your inbox</p>--}}

{{--                        <form action="https://subworthy.com/snippet" method="POST">--}}
{{--                            <input type="hidden" name="url" value="https://philstephens.com/rss.xml">--}}
{{--                            <input type="hidden" name="title" value="Phil Stephens - All Blog Posts">--}}
{{--                            <input type="hidden" name="notify" value="hello@philstephens.com">--}}

{{--                            <div class="input-group mb-3">--}}
{{--                                <input type="text" class="form-control" placeholder="Type your email..." name="email" required>--}}
{{--                                <button type="submit" class="btn btn-outline-secondary">Subscribe</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}

{{--                        <p class="mb-0">Or grab the <a href="https://philstephens.com/rss.xml">RSS feed</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>

@if ($previous = $page->getPrevious())
<div class="up-next container py-4">
    <div class="text-center">
        * * *
    </div>
    <div class="text-center mt-4">
        <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}" class="font-normal">
            Up next: {{ $previous->title }}
        </a>
    </div>
</div>
@endif



@endsection

@section('head')
<link rel="stylesheet" href="/assets/build/js/styles/atom-one-light.min.css">
@endsection

@section('scripts')
<script src="/assets/build/js/highlight.min.js"></script>
<script>
    hljs.highlightAll();
</script>
@endsection