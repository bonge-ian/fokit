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

			<main class="uk-background-muted">

				<aside class="uk-container">
	                <div class="uk-margin-top">
	                    <x-status-alert />
	                </div>
	            </aside>

				 {{ $slot }}
			</main>
		</div>

	</body>
</html>
