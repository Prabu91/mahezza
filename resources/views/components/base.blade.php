<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	@vite('resources/css/app.css')
	@vite('resources/js/app.js')

	<link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

	<title>Mahezza</title>
</head>
<body>
	<!-- Header -->
	<x-navbar></x-navbar>
	<!-- Header End -->

	<main class="flex-1">
		{{$slot}}
	</main>

	{{-- Footer --}}
	<x-footer></x-footer>
	{{-- end Footer  --}}
	

	<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>