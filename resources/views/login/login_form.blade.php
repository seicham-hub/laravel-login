<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>ログインフォーム</title>

{{-- 	Scripts
 --}}
 	<script src="{{ asset('js/app.js' )}}" defer></script>
{{-- 	Styles
 --}}	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
 {{-- 	Styles
 --}}	<link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>
<body>

<form class="form-signin" method="POST" action="{{ route('login') }}">
@csrf
  <h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif
   
	<x-alert type="danger" :session="session('danger')"/>

  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
 
  <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
 
</form>


</body>
</html>