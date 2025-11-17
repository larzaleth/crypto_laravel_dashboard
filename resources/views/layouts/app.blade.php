<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Crypto</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMDJzLl5sB90tW3H2Y3d/E60lD7nSj8A0zD6m8Jz4v9G8u/R6W3c4+q1Z1l04Gg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>

    <div id="wrapper">
        
        <!-- SIDEBAR -->
        @include('layouts.sidebar')

        <div id="main-area">
            
            <!-- HEADER -->
            @include('layouts.header')
            
            <!-- CONTENTS -->
            <div id="page-content-wrapper">
                @yield('content')
            </div>
            
        </div>
        <!-- /#main-area -->
    </div>
    <!-- /#wrapper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @stack('scripts')
</body>
</html>