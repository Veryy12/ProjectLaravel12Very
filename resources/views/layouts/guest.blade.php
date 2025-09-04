<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ $title ?? 'Login' }} - SB Admin 2</title>

    {{-- SB Admin 2 CSS --}}
    <link href="{{ asset('css/styles.dashboard.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        @yield('content')
    </div>

    {{-- SB Admin 2 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.dashboard.js') }}"></script>
</body>
</html>
