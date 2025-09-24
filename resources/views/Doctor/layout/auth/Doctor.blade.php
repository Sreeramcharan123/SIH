<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Doctor Auth')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: url('https://cdn.narendramodi.in/cmsuploads/0.73877400_1523541569_attachref.png') no-repeat center center fixed;
            background-size: cover;
        }

        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-card {
            width: 100%;
            max-width: 1000px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            display: flex;
        }

        .auth-image {
            flex: 1;
        }

        .auth-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .auth-form {
            flex: 1;
            padding: 40px;
            background: #fff;
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <div class="auth-card">
            <!-- Left Image -->
            <div class="auth-image">
                <img src="{{ $image ?? asset('images/default_banner.jpg') }}" alt="Auth">
            </div>

            <!-- Right Form -->
            <div class="auth-form">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>