@props([
    'title' => null,   // Optional variable for card title
    'action' => null,  // Optional variable for action button/slot at top right
    'noPadding' => false // Optional variable to remove content body padding (useful for tables)
])

<div {{ $attributes->merge(['class' => 'bg-white border text-slate-800 border-slate-200 shadow-sm rounded-xl overflow-hidden']) }}>
    
    <!-- Card Header Section (Only visible if Title or Action parameter exists) -->
    @if($title || $action)
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50/50">
            @if($title)
                <h3 class="text-base font-semibold text-slate-800">{{ $title }}</h3>
            @endif
            
            @if($action)
                <!-- Display action slot / button -->
                <div class="flex items-center space-x-2">
                    {{ $action }}
                </div>
            @endif
        </div>
    @endif

    <!-- Card Body Section -->
    <div class="{{ $noPadding ? '' : 'p-6' }}">
        {{ $slot }}
    </div>

</div>