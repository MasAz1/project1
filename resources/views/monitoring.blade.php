<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Monitoring Sensor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Nunito', sans-serif;
		}
	</style>
</head>

<body class="bg-gray-100 text-gray-900">

	<div class="bg-gray-50 py-8 shadow text-center">
		<h1 class="text-4xl font-bold mb-2">Monitoring Sensor Air</h1>
		<p class="text-lg text-gray-600">Pantau data secara real-time</p>
	</div>

	<div class="container mx-auto mt-8 px-4">
		<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6 text-center">
			<div class="rounded-xl shadow bg-yellow-400 text-white">
				<div class="p-6">
					<h5 class="text-xl font-semibold mb-2">Debit</h5>
					<p class="text-4xl font-bold">{{ $debit ?? '-' }} L/m</p>
					<small class="block mt-2">{{ $waktu ?? '' }}</small>
				</div>
			</div>
			<div class="rounded-xl shadow bg-cyan-500 text-white">
				<div class="p-6">
					<h5 class="text-xl font-semibold mb-2">Voltase</h5>
					<p class="text-4xl font-bold">{{ $voltase ?? '-' }} V</p>
					<small class="block mt-2">{{ $waktu ?? '' }}</small>
				</div>
			</div>
			<div class="rounded-xl shadow bg-red-500 text-white">
				<div class="p-6">
					<h5 class="text-xl font-semibold mb-2">pH</h5>
					<p class="text-4xl font-bold">{{ $ph ?? '-' }}</p>
					<small class="block mt-2">{{ $waktu ?? '' }}</small>
				</div>
			</div>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6 text-center">
			<div class="rounded-xl shadow bg-green-500 text-white">
				<div class="p-6">
					<h5 class="text-xl font-semibold mb-2">Kelembaban</h5>
					<p class="text-4xl font-bold">{{ $kelembaban ?? '-' }}%</p>
					<small class="block mt-2">{{ $waktu ?? '' }}</small>
				</div>
			</div>
			<div class="rounded-xl shadow bg-blue-600 text-white">
				<div class="p-6">
					<h5 class="text-xl font-semibold mb-2">Kekeruhan</h5>
					<p class="text-4xl font-bold">{{ $kekeruhan ?? '-' }} NTU</p>
					<small class="block mt-2">{{ $waktu ?? '' }}</small>
				</div>
			</div>
			<div class="rounded-xl shadow bg-gray-700 text-white">
				<div class="p-6">
					<h5 class="text-xl font-semibold mb-2">Waktu</h5>
					<p class="text-2xl font-bold">{{ $waktu ?? '-' }}</p>
				</div>
			</div>
		</div>
	</div>
	<footer class="bg-gray-900 text-gray-200 text-center py-3 mt-8">
		<p>&copy; {{ date('Y') }} Monitoring Sensor</p>
	</footer>
</body>

</html>