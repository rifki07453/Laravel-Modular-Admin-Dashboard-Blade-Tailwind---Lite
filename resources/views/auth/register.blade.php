<x-guest-layout>
    <form method="POST" action="{{ route('dashboard.sim') }}" class="space-y-5">
        @csrf

        <!-- Username -->
        <div>
            <label for="name" class="block text-sm font-medium text-slate-700">Full Name</label>
            <input id="name" type="text" name="name" required autofocus 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition bg-slate-50/50">
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700">Email Address</label>
            <input id="email" type="email" name="email" required 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition bg-slate-50/50">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
            <input id="password" type="password" name="password" required 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition bg-slate-50/50">
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-slate-700">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition bg-slate-50/50">
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full flex justify-center items-center px-4 py-2.5 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 shadow-md transition-all">
                Create Account
            </button>
        </div>

        <!-- Link to Login -->
        <p class="mt-4 text-center text-sm text-slate-500">
            Already have an account? 
            <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 hover:underline">
                Log in here
            </a>
        </p>
    </form>
</x-guest-layout>
