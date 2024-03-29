<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($title)
        <title>{{ config('app.name', 'Laravel') }} - {{ $title }}</title>
    @else
        <title>{{ config('app.name', 'Laravel') }}</title>
    @endisset

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles and scripts -->
	@vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <x-navbar />

        <main class="uk-background-muted" uk-height-viewport="offset-top: true">
             <aside class="uk-container">
                <div class="uk-margin-top">
                    <x-status-alert />
                </div>
            </aside>
            <section class="uk-section">
                <div class="uk-container">
                    <div class="uk-flex-center uk-grid uk-grid-stack" uk-grid>
                        <div class="uk-width-1-1 uk-width-5-6@m">
                            <article class="uk-grid uk-grid-collapse uk-child-width-1-1" uk-grid>
                                <div class="uk-visible@s uk-width-3-5@m  uk-width-1-2@s uk-grid-item-match">
                                    <div class="uk-cover-container">
                                        <canvas width="572" height="400"></canvas>
                                        <img src="{{ $cover_image }}" alt="{{$cover_image_alt}}" loading="lazy" uk-cover />
                                    </div>
                                </div>
                                <div class="uk-width-2-5@m uk-width-1-2@s  uk-grid-item-match">
                                    <div class="uk-panel">
                                        <div class="uk-tile uk-tile-default">
                                            {{ $slot }}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    </div>

</body>

</html>
