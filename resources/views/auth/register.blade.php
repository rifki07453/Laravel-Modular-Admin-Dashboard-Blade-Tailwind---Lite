<x-guest-layout>
    <form method="POST" action="{{ route('dashboard') }}" class="space-y-5">
        @csrf

        <!-- Username -->
        <div>
            <label for="name" class="block text-sm font-medium text-slate-700">Nama Lengkap</label>
            <input id="name" type="text" name="name" required autofocus 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 transition bg-slate-50/50">
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700">Email Utama</label>
            <input id="email" type="email" name="email" required 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 transition bg-slate-50/50">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-slate-700">Pilih Sandi</label>
            <input id="password" type="password" name="password" required 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 transition bg-slate-50/50">
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-slate-700">Konfirmasi Sandi</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 transition bg-slate-50/50">
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full flex justify-center items-center px-4 py-2.5 text-sm font-semibold text-white bg-primary-600 rounded-lg hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 shadow-md transition-all">
                Daftar Akun Baru
            </button>
        </div>

        <!-- Link ke Login -->
        <p class="mt-4 text-center text-sm text-slate-500">
            Sudah ada akun? 
            <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:text-primary-500 hover:underline">
                Masuk di sini
            </a>
        </p>
    </form>
</x-guest-layout>
