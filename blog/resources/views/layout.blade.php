<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blog Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5 bg-light">
    <div class="p-5 bg-white rounded-3 shadow-lg">
        <h2 class="mb-4 text-center">Laravel Blog Platform</h2>
        @yield('content')
    </div>
</body>
</html>
