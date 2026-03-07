<x-guest-layout>
    <div class="mb-6 text-sm text-slate-600 leading-relaxed text-center">
        Lupa password Anda? Tidak masalah. Beritahu kami alamat email Anda dan kami akan mengirimkan tautan reset password.
    </div>

    <!-- Session Status Dummy -->
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('dashboard') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700">Email Utama</label>
            <input id="email" type="email" name="email" required autofocus 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-primary-500 focus:ring focus:ring-primary-200 transition bg-slate-50/50">
            
            @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full flex justify-center items-center px-4 py-2.5 text-sm font-semibold text-white bg-slate-800 rounded-lg hover:bg-slate-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-800 shadow-md transition-all">
                Kirim Tautan Reset
            </button>
        </div>
        
        <p class="mt-4 text-center text-sm">
            <a href="{{ route('login') }}" class="font-medium text-slate-500 hover:text-slate-800 transition">
                &larr; Kembali ke halaman Log In
            </a>
        </p>
    </form>
</x-guest-layout>
