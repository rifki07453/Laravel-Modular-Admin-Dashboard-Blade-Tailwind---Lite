<x-guest-layout>
    <!-- Login Form Content -->
    <form method="POST" action="{{ route('dashboard.sim') }}" class="space-y-5">
        @csrf
        
        <!-- Because this is a "Lite" dummy template, the post action 
             simply redirects back to the dashboard as defined in web.php -->

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-sm font-medium text-slate-700">Email Address</label>
            <input id="email" type="email" name="email" value="admin@rikanlite.com" required autofocus autocomplete="username" 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition bg-slate-50/50">
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-slate-700">Password</label>
            <input id="password" type="password" name="password" value="password" required autocomplete="current-password" 
                class="mt-1 block w-full px-4 py-2 border border-slate-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 transition bg-slate-50/50">
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="flex items-center text-sm">
                <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <span class="ml-2 text-slate-600">Remember me</span>
            </label>

            <!-- Forgot Password Link -->
            <a class="text-sm font-medium text-blue-600 hover:text-blue-500 hover:underline" href="{{ route('password.request') }}">
                Forgot password?
            </a>
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <!-- 
                In this template, clicking SIGN IN will dummy-redirect to the dashboard.
                This allows buyers to experience the full preview. 
            -->
            <button type="submit" class="w-full flex justify-center items-center px-4 py-2.5 text-sm font-semibold text-white bg-slate-900 rounded-lg hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-slate-900 shadow-md transition-all">
                Sign In
            </button>
        </div>

        <!-- Register Link -->
        <p class="mt-4 text-center text-sm text-slate-500">
            Don't have an account? 
            <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500 hover:underline">
                Create new account
            </a>
        </p>

    </form>
</x-guest-layout>
