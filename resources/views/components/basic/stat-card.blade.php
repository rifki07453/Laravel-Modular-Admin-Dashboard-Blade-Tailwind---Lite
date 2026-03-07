@props([
    'title', // Metric Title (Required, e.g., "Total Users")
    'value', // Metric Value (Required, e.g., "1,234")
    'icon',  // Heroicons/SVG icon name (Required, e.g., "users")
    'color'  // Color theme sent from controller (Required, e.g., "blue")
])

@php
    /**
     * Map $color Variable
     * 
     * Explanation: Changes the string parameter "$color" from Controller/Service ('blue', 'green', etc.)
     * to a specific TailwindCSS styling class. 
     * This approach is Best Practice because Tailwind doesn't parse dynamically generated classes like 'bg-{{$color}}-500'.
     */
    $colorMap = [
        'blue'   => ['bg' => 'bg-blue-500', 'text' => 'text-blue-500', 'lightBg' => 'bg-blue-50', 'border' => 'border-blue-100'],
        'green'  => ['bg' => 'bg-emerald-500', 'text' => 'text-emerald-500', 'lightBg' => 'bg-emerald-50', 'border' => 'border-emerald-100'],
        'purple' => ['bg' => 'bg-purple-500', 'text' => 'text-purple-500', 'lightBg' => 'bg-purple-50', 'border' => 'border-purple-100'],
        'red'    => ['bg' => 'bg-rose-500', 'text' => 'text-rose-500', 'lightBg' => 'bg-rose-50', 'border' => 'border-rose-100'],
    ];

    $theme = $colorMap[$color] ?? $colorMap['blue']; // Fallback to blue if not found
@endphp

{{--
  [COMPONENT] Stat Card (KPI)
  Attribute: <x-basic.stat-card>
  Location: resources/views/components/basic/stat-card.blade.php
--}}
<div class="relative p-6 h-full flex flex-col justify-between overflow-hidden bg-white border shadow-sm border-slate-200 rounded-xl hover:shadow-md transition-shadow duration-200 group">
    
    <!-- Decorative element in the background (Creates Premium Aesthetic) -->
    <div class="absolute top-0 right-0 w-24 h-24 -mr-8 -mt-8 rounded-full opacity-20 {{ $theme['bg'] }} blur-xl group-hover:scale-110 transition-transform duration-500"></div>

    <div class="flex items-center justify-between relative z-10">
        <!-- Left Text -->
        <div>
            <!-- Parameter $title from Service -->
            <p class="text-sm font-medium tracking-wide text-slate-500 uppercase">{{ $title }}</p>
            <!-- Parameter $value from Service -->
            <p class="mb-1 text-3xl font-bold text-slate-800 mt-2">{{ $value }}</p>
        </div>
        
        <!-- Right Colored Icon -->
        <div class="flex items-center justify-center w-14 h-14 rounded-full {{ $theme['lightBg'] }} {{ $theme['border'] }} border">
            @php
                $iconPaths = [
                    'users' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z',
                    'currency-dollar' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                    'briefcase' => 'M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                ];
                $activePath = $iconPaths[$icon] ?? 'M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z';
            @endphp
            <svg class="w-7 h-7 {{ $theme['text'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $activePath }}"></path>
            </svg>
        </div>
    </div>
    
    <!-- Card Footer: Trend Indicator -->
    <div class="flex items-center mt-4 text-sm relative z-10">
        <!-- Dummy Percentage Increase. Can also be fetched from Backend. -->
        <span class="flex items-center font-medium text-emerald-500 bg-emerald-50 px-1.5 py-0.5 rounded-md text-xs">
            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
            2.5%
        </span>
        <span class="ml-2 text-slate-500 text-xs">Since last month</span>
    </div>

</div>