<!-- 
  [PARTIAL] Navbar
  File: resources/views/partials/navbar.blade.php
  
  Explanation:
  This is the top header of the application. It contains breadcrumbs/title and the profile menu (dropdown).
  Uses Alpine.js for its state logic (x-data, x-on).
-->
<header class="flex items-center justify-between px-6 py-4 bg-white/70 backdrop-blur-lg border-b border-slate-200 sticky top-0 z-40">
    <div class="flex items-center">
        <!-- 
          Mobile Sidebar Toggle Button
          @click toggles the sidebarOpen variable in app.blade.php to true/false
        -->
        <button @click="sidebarOpen = !sidebarOpen" class="text-slate-500 focus:outline-none md:hidden hover:text-primary-600 transition-colors">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
        
        <!-- Breadcrumbs Area (Optional, hidden on mobile) -->
        <h2 class="hidden ml-4 text-xl font-semibold text-slate-800 md:block">
            Dashboard Overview
        </h2>
    </div>

    <!-- Right Side Navbar (User Profile) -->
    <div class="flex items-center space-x-4">
        
        <!-- Simple Notification -->
        <button class="relative p-2 text-slate-400 hover:text-slate-500 transition-colors focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
            <span class="absolute top-1.5 right-1.5 w-2.5 h-2.5 bg-red-500 rounded-full ring-2 ring-white"></span>
        </button>

        <!-- Alpine JS Dropdown Container -->
        <div class="relative" x-data="{ dropdownOpen: false }">
            <button @click="dropdownOpen = !dropdownOpen" class="flex items-center gap-2 focus:outline-none rounded-full ring-2 ring-transparent transition hover:ring-primary-100 p-1">
                <!-- Avatar -->
                <img class="object-cover w-9 h-9 border-2 border-primary-500 rounded-full shadow-sm" src="https://ui-avatars.com/api/?name=User+Admin&background=0D8ABC&color=fff" alt="Profile">
                
                <!-- User Name -->
                <div class="hidden text-left md:block">
                    <p class="text-sm font-semibold text-slate-700 leading-tight">Admin User</p>
                    <p class="text-xs text-slate-500">Administrator</p>
                </div>
                
                <svg class="w-4 h-4 ml-1 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>

            <!-- Menu Dropdown Container -->
            <div 
                x-show="dropdownOpen" 
                @click.away="dropdownOpen = false" 
                x-transition.enter="transition ease-out duration-150" 
                x-transition.enter-start="transform opacity-0 scale-95 translate-y-2" 
                x-transition.enter-end="transform opacity-100 scale-100 translate-y-0" 
                x-transition.leave="transition ease-in duration-100" 
                x-transition.leave-start="transform opacity-100 scale-100" 
                x-transition.leave-end="transform opacity-0 scale-95" 
                class="absolute right-0 w-56 mt-3 bg-white border border-slate-100 rounded-xl shadow-xl z-50 overflow-hidden" 
                x-cloak>
                
                <div class="px-4 py-3 bg-slate-50/50 border-b border-slate-100 md:hidden">
                    <p class="text-sm text-slate-900 font-medium">Admin User</p>
                    <p class="text-xs text-slate-500 truncate">admin@rikanlite.com</p>
                </div>

                <div class="p-1.5">
                    <a href="#" class="block px-3 py-2 text-sm text-slate-600 rounded-lg hover:bg-slate-50 hover:text-primary-600 transition-colors">My Profile</a>
                    <a href="#" class="block px-3 py-2 text-sm text-slate-600 rounded-lg hover:bg-slate-50 hover:text-primary-600 transition-colors">System Settings</a>
                </div>
                
                <div class="border-t border-slate-100 p-1.5">
                    <!-- Form Button for Logout -->
                    <form method="POST" action="#">
                        @csrf
                        <a href="{{ route('login') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block w-full text-left px-3 py-2 text-sm font-medium text-red-600 rounded-lg hover:bg-red-50 transition-colors">
                            Logout
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
