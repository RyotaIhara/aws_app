<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  @yield('style')

  <!-- bpptstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    @if (Auth::check())
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-design">
        <a class="navbar-brand" href="/">ストック管理アプリ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item @if(Request::routeIs('stocks', 'stocks.*')) active @endif">
              <a class="nav-link" href="/stocks">ストック</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(Request::routeIs('types', 'types.*')) active @endif" href="/types">種別</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @if(Request::routeIs('users', 'users.*')) active @endif" href="/users">ユーザー</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->user_name }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="/logout">ログアウト</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    @endif

    @yield('content')
  </div>

  @yield('script')
</body>
</html>
