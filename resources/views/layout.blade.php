<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Films</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="header">
  </div>
  <div class="navigation">
    <ul>
      <li>
        <a href="/">Home</a>
      </li>
      <li>
        <a href="/films">All films</a>
      </li>
      <li>
        <a href="/about">About</a>
      </li>
      @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
        @else
          <li>
            <a>User: {{ Auth::user()->name }} <span class="caret"></span></a>
            <li>
              <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </li>
        @endif
    </ul>
  </div>
  @yield('content') {{-- getting the body information from the other pages --}}
</body>
<div class="footer">
  <p>u1355914 - Computing Bsc</p>
</div>
</html>
