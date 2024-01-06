<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | JNY Cup Dashboard</title>
  <link rel="stylesheet" href="{{ asset('dashboard/assets/compiled/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/assets/compiled/css/app-dark.css') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/assets/compiled/css/auth.css') }}">
  <link rel="shortcut icon" href="{{ asset('dashboard/assets/compiled/svg/favicon.svg')}}" type="image/x-icon">

  <style>
    #auth #auth-left {
      padding: 5rem !important;
    }
  </style>
</head>

<body>
  <div id="auth">

    @yield('content')

  </div>
</body>

</html>
