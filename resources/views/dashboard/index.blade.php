<!-- 
  File: resources/views/dashboard/index.blade.php
  Purpose: Display the main dashboard.
-->
<x-app-layout>
    <!-- 
      Main Page Heading
    -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold text-slate-900 sm:text-3xl">Dashboard Overview</h2>
        <p class="mt-1 text-sm text-slate-500">Key information about your system's current state.</p>
    </div>

    <!-- 
      KPI Grid (Statistic Cards)
      Responsive Grid: 1 col (Mobile), 2 cols (Tablet), 4 cols (Desktop)

      The "$stats" variable is an Object/Array Map sent from 
      DashboardController -> method index().
    -->
    <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        @foreach($stats as $kpi)
            @php
                $kpiTitle = $kpi['title'];
                $kpiValue = $kpi['value'];
                $kpiIcon = $kpi['icon'];
                $kpiColor = $kpi['color'];
            @endphp
            {{-- Calling stat-card Component with parsed props variables --}}
            <x-basic.stat-card :title="$kpiTitle" :value="$kpiValue" :icon="$kpiIcon" :color="$kpiColor" />
        @endforeach
    </div>

    <!-- Two-Column Grid Layout (Chart vs Table) -->
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
        
        <!-- COLUMN 1 (LEFT, WIDE): Chart Area -->
        <div class="lg:col-span-2 space-y-8">
            
            <!-- Calling Basic Card with "title" property -->
            <x-basic.card title="Revenue Statistics (Dummy Chart Viewer)">
                
                <!-- Utilizing Action Slot in Basic Card Component -->
                <x-slot:action>
                    <button class="flex items-center px-3 py-1.5 text-xs font-medium text-slate-600 bg-slate-100 rounded-lg hover:bg-slate-200 transition">
                        Export CSV
                    </button>
                    <!-- This button will not be functional for the "Lite" version. -->
                </x-slot:action>

                <div class="relative w-full h-80 rounded-lg flex items-center justify-center bg-slate-50 border border-slate-100 border-dashed">
                    <!-- Text Placeholder since there's no ChartJS integration yet -->
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-slate-300 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                        </svg>
                        <p class="text-sm font-medium text-slate-500">Chart data will be displayed here.</p>
                        <p class="text-xs text-slate-400 mt-1">Chart.js or ApexCharts integration is available in the <span class="text-amber-500 font-semibold uppercase">PRO</span> version.</p>
                    </div>

                    <!--
                      NOTE for Learners:
                      In a real version, the variables '$chartData['labels']' & '$chartData['data']' 
                      from the Controller will be passed to front-end JS using "@json($chartData)".
                    -->
                </div>
            </x-basic.card>

        </div>

        <!-- COLUMN 2 (RIGHT, NARROW): Recent Activities -->
        <div class="lg:col-span-1">
            
            <!-- Using noPadding property so the table fills the card box -->
            <x-basic.card title="Recent Activities" class="h-full border-t-4 border-t-primary-500" :no-padding="true">
                
                <!-- Tailwind Table Wrapper -->
                <div class="overflow-x-auto divide-y divide-slate-100">
                    
                    <!-- Loop through $activities variable from DashboardService -->
                    @forelse($activities as $activity)
                        <div class="flex items-start px-6 py-4 transition-colors hover:bg-slate-50 group">
                            
                            <!-- Small Status Bullet State -->
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-2.5 h-2.5 rounded-full {{ ['success'=>'bg-emerald-500', 'info'=>'bg-blue-500', 'warning'=>'bg-amber-500', 'danger'=>'bg-rose-500'][$activity['status']] ?? 'bg-slate-500' }} ring-4 ring-white shadow-sm"></div>
                            </div>

                            
                            <div class="flex-1 min-w-0 ml-4">
                                <!-- Action & User Name -->
                                <p class="text-sm font-medium text-slate-900 truncate">
                                    {{ $activity['action'] }}
                                </p>
                                <p class="text-xs text-slate-500 truncate mt-0.5">
                                    By <span class="font-medium text-slate-700">{{ $activity['user'] }}</span>
                                </p>
                            </div>

                            <div class="text-right ml-4 whitespace-nowrap">
                                <p class="text-xs text-slate-400 group-hover:text-primary-500 transition-colors">{{ $activity['time'] }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="p-6 text-center">
                            <p class="text-sm text-slate-500">No recent activities.</p>
                        </div>
                    @endforelse
                    
                </div>
                
                <div class="p-4 border-t border-slate-100 bg-slate-50/50">
                    <a href="#" class="block w-full text-center text-sm font-medium text-primary-600 hover:text-primary-700 transition">
                        View All Activities &rarr;
                    </a>
                </div>

            </x-basic.card>

        </div>
    </div>
</x-app-layout>