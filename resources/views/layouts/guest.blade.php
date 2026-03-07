<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin Login') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                }
            }
        }
    </script>
</head>
<body class="font-sans text-slate-900 antialiased bg-slate-100 flex items-center justify-center min-h-screen relative overflow-hidden">
    
    <!-- Dekorasi Latar Belakang Estetik -->
    <div class="absolute inset-0 bg-blue-500/5 -skew-y-12 transform origin-top-left -z-10"></div>
    <div class="absolute -top-32 -right-32 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>

    <!-- Tempat Kartu Login/Register -->
    <div class="w-full sm:max-w-md px-8 py-10 bg-white/80 backdrop-blur-md shadow-2xl sm:rounded-3xl border border-white flex flex-col items-center">
        <!-- Logo Text -->
        <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 mb-2">
            Rikan <span class="text-blue-600">Lite</span>
        </h1>
        <p class="text-sm text-slate-500 mb-6">Masuk ke panel kontrol admin Anda.</p>
        
        <!-- Slot untuk Form dari halaman auth -->
        <div class="w-full">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
