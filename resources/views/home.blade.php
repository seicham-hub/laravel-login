<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>ホーム画面</title>
	{{-- 	Styles
 --}}	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
	<div class="container">
		<div class="mt-5">
	
			<x-alert type="success" :session="session('success')"/>

			<h3>プロフィール	</h3>
			<ul>
				<li>名前：{{ Auth::user()->name }}</li>
				<li>メールアドレス：{{Auth::user()->email }}</li>

			</ul>
			<form action="{{ route('logout') }}" method="POST" >
				@csrf
				<button class="btn btn-danger"type="submit">ログアウト</button>
			</form>
		</div>
	</div>

</body>

</html>
