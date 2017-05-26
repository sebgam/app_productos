<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="page-healder text-center">Listar Productos</h1>
				</div>
				@yield('content')





			</div>

		</div>










	<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>