{{-- <!DOCTYPE html> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('STEI SEBI', 'STEI SEBI') }}</title>
        <link rel="icon" href="{{ asset('logo.ico') }}"/>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/modal.js') }}" defer></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        @livewireStyles
		
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
		@livewireScripts
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @if (Auth::user()->role == 'mahasiswa')
			@if(!request()->routeIs('dashboard'))
				@livewire('navigation-dropdown')
			@endif
			@endif
            <!-- Page Heading -->
            {{-- <header class="bg-white shadow"> --}}
                {{-- <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"> --}}
                    {{-- {{ $header ?? 'Dashboard'}} --}}
                {{-- </div> --}}
            {{-- </header> --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        
    </body>
</html>
