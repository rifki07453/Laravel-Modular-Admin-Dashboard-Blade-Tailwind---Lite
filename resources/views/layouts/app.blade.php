<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin Dashboard Lite') }}</title>

    <!-- Fonts: Inter untuk tampilan modern dan premium yang disukai para pembeli template -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Script AlpineJS untuk interaktivitas UI (Dropdown Profile, Sidebar Toggle) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>

    <!-- 
      Penjelasan Tag Tailwind:
      Menggunakan Tailwind CDN untuk kemudahan preview sehingga template ini "Siap Pakai" tanpa harus menginstal npm.
      Untuk Production/Template final disarankan pembeli untuk menggunakan instalasi Vite/Mix Laravel standar.
    -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eff6ff', 100: '#dbeafe', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8'
                        }
                    }
                }
            }
        }
    </script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <style>
        /* [x-cloak] berfungsi agar elemen Alpine.js tidak lompat (FOUC) sebelum diload sepenuhnya */
        [x-cloak] { display: none !important; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-thumb { background-color: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-track { background-color: transparent; }
    </style>
</head>
<body class="font-sans antialiased bg-slate-50 text-slate-800" x-data="{ sidebarOpen: false }">
    
    <!-- Grid Layout Utama Dasbor -->
    <div class="flex h-screen overflow-hidden">
        
        <!-- Memanggil komponen parsial Sidebar -->
        @include('partials.sidebar')

        <!-- Bagian Konten Kanan -->
        <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
            
            <!-- Memanggil komponen parsial Navbar -->
            @include('partials.navbar')

            <!-- Slot Tag ($slot) akan digantikan dinamis oleh isi halaman (misal: dashboard/index.blade.php) -->
            <main class="flex-grow p-6 sm:p-8">
                {{ $slot }}
            </main>

        </div>
    </div>

</body>
</html>