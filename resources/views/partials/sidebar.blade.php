<!-- 
  [PARTIAL] Sidebar
  File: resources/views/partials/sidebar.blade.php
  
  Explanation:
  This is the left-side navigation sidebar. Created as a 'partial' so that
  the main layout (app.blade.php) doesn't get too long (modularity).
-->
<aside 
    class="absolute z-20 flex flex-col w-64 h-screen transition-transform transform bg-slate-900 border-r border-slate-800 md:relative md:translate-x-0"
    :class="{ '-translate-x-full': !sidebarOpen, 'translate-x-0': sidebarOpen }"
>
    <!-- Branding / Logo Area -->
    <div class="flex items-center justify-center h-20 border-b border-slate-800">
        <h1 class="text-2xl font-bold tracking-wider text-white uppercase">
            Rikan <span class="text-primary-500">Lite</span>
        </h1>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-grow px-4 py-6 space-y-1.5 overflow-y-auto">
        
        <!-- Category Label -->
        <div class="pt-2 pb-2">
            <p class="px-2 text-xs font-semibold tracking-wider text-slate-500 uppercase">Main Menu</p>
        </div>

        <!-- 
          Menu Item: Dashboard
          Logic request()->routeIs('dashboard') is used to apply a different color 
          when the user is on this page (Active State).
        -->
        <a href="{{ route('dashboard') }}" 
           class="flex items-center px-3 py-2.5 text-sm font-medium transition-all duration-200 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-primary-600/10 text-primary-500' : 'text-slate-400 hover:bg-slate-800 hover:text-white' }}">
           <!-- Icon -->
           <svg class="w-5 h-5 mr-3 {{ request()->routeIs('dashboard') ? 'text-primary-500' : 'text-slate-500' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
           Dashboard
        </a>

        <!-- Pro Features Category Label (For Template Upselling) -->
        <div class="pt-6 pb-2">
            <p class="px-2 text-xs font-semibold tracking-wider text-slate-500 uppercase flex items-center justify-between">
                <span>Pro Version</span>
                <span class="px-1.5 py-0.5 text-[10px] bg-amber-500/20 text-amber-500 rounded-md">Locked</span>
            </p>
        </div>
        
        <!-- Dummy Menus (Inactive) -->
        <a href="#" class="flex items-center px-3 py-2.5 text-sm font-medium text-slate-500 transition-colors rounded-lg hover:bg-slate-800 hover:text-white group opacity-70 cursor-not-allowed" title="Available in Pro Version">
            <svg class="w-5 h-5 mr-3 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            User Management
        </a>
        <a href="#" class="flex items-center px-3 py-2.5 text-sm font-medium text-slate-500 transition-colors rounded-lg hover:bg-slate-800 hover:text-white group opacity-70 cursor-not-allowed" title="Available in Pro Version">
            <svg class="w-5 h-5 mr-3 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
            Advanced Forms
        </a>
        <a href="#" class="flex items-center px-3 py-2.5 text-sm font-medium text-slate-500 transition-colors rounded-lg hover:bg-slate-800 hover:text-white group opacity-70 cursor-not-allowed" title="Available in Pro Version">
            <svg class="w-5 h-5 mr-3 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
            Data Tables
        </a>

    </nav>
</aside>

<!-- Mobile Backdrop -->
<!-- Used to darken the remaining screen area when the sidebar is open on Mobile -->
<div 
    x-show="sidebarOpen" 
    x-transition.opacity 
    @click="sidebarOpen = false"
    class="fixed inset-0 z-10 bg-black/60 backdrop-blur-sm md:hidden"
    x-cloak
></div>
