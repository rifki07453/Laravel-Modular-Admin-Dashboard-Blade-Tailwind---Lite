<x-guest-layout>
    <!-- Konten Form Login -->
    <form method="POST" action="{{ route('dashboard') }}" class="space-y-5">
        @csrf
        
        <!-- Karena ini "Lite" template dummy, action post form ini 
             hanya di-redirect kembali ke dashboard pada contoh route web.php -->

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700">Email Utama</label>
            <input id="email" type="email" name="email" value="admin@rikanlite.com" required autofocus autocomplete="username" 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 transition bg-slate-50/50">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-slate-700">Sandi Akses</label>
            <input id="password" type="password" name="password" value="password" required autocomplete="current-password" 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 transition bg-slate-50/50">
        </div>

        <!-- Remember Me & Lupa Password -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="flex items-center text-sm">
                <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 text-primary-600 border-gray-300 rounded focus:ring-primary-500">
                <span class="ml-2 text-slate-600">Ingat Saya</span>
            </label>

            <!-- Link Lupa Password -->
            <a class="text-sm font-medium text-primary-600 hover:text-primary-500 hover:underline" href="{{ route('password.request') }}">
                Lupa sandi?
            </a>
        </div>

        <!-- Tombol Submit -->
        <div class="pt-2">
            <!-- 
                Dalam template ini, klik MASUK akan dummy-redirect ke dashboard asalkan route dikonfigurasi demikian,
                Hal ini agar pembeli mendapat experience preview penuh. 
            -->
            <button type="submit" class="w-full flex justify-center items-center px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 shadow-md transition-all">
                Masuk Dashboard
            </button>
        </div>

        <!-- Link Register -->
        <p class="mt-4 text-center text-sm text-slate-500">
            Belum punya akun? 
            <a href="{{ route('register') }}" class="font-medium text-primary-600 hover:text-primary-500 hover:underline">
                Daftar baru
            </a>
        </p>

    </form>
</x-guest-layout>
