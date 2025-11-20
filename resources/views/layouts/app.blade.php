<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'MySite')</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/[email protected]/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS khusus jika ada -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @stack('css')
</head>
<body>

  <div class="container py-4">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/[email protected]/dist/js/bootstrap.bundle.min.js"></script>
  @stack('js')
</body>
</html>
