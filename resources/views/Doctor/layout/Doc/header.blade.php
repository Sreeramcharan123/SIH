<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('side.css') }}">
    <title>Doctor's | @yield('title')</title>
</head>
<body>
    
    <!-- ✅ Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/dashboard') }}">Doctor Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">🏠 Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">📅 Appointments</a>
                    </li>

            
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('food.add') }}">➕ Add Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('diet.create') }}">📋 Create Diet Plan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('diet.view', ['patient_id' => 1]) }}">👀 View Diet Plans</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Page Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    @include('Doctor.layout.includes.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
