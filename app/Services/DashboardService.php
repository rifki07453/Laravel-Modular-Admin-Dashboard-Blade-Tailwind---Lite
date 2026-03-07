<?php

namespace App\Services;

/**
 * Class DashboardService
 * 
 * @description This service is responsible for handling all business logic 
 * related to the data displayed on the dashboard page.
 * 
 * Separating logic into a Service (Service Pattern) keeps the 
 * Controller clean (Thin Controller). This is crucial as the application scales.
 */
class DashboardService
{
    /**
     * Retrieve statistical data (KPIs) for the dashboard.
     * 
     * @return array List of main metrics (e.g., Total Users, Revenue).
     */
    public function getStats(): array
    {
        // In a real application, this data would be fetched from a database using Eloquent Models
        return [
            [
                'title' => 'Total Users',    // Metric title
                'value' => '1,024',          // Main value displayed
                'icon'  => 'users',          // Identifier for the icon
                'color' => 'blue'            // Color theme identifier (mapped to Tailwind class in view)
            ],
            [
                'title' => 'Q1 Revenue',
                'value' => '$ 54,000',
                'icon'  => 'currency-dollar',
                'color' => 'green'
            ],
            [
                'title' => 'Active Projects',
                'value' => '12',
                'icon'  => 'briefcase',
                'color' => 'purple'
            ],
            [
                'title' => 'Support Tickets',
                'value' => '5 Open',
                'icon'  => 'ticket',
                'color' => 'red'
            ],
        ];
    }

    /**
     * Retrieve data for charts/graphs.
     * 
     * @return array Series data to be displayed in the chart (can be used in Chart.js or ApexCharts).
     */
    public function getChart(): array
    {
        return [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'], // X-axis
            'data'   => [120, 190, 300, 250, 420, 600]              // Y-axis
        ];
    }

    /**
     * Retrieve recent activity data.
     * 
     * @return array List of user or system activities.
     */
    public function getActivities(): array
    {
        // Table data (List of associative arrays)
        return [
            [
                'user'    => 'John Doe',
                'action'  => 'Created a new project',
                'time'    => '2 hours ago',
                'status'  => 'success'
            ],
            [
                'user'    => 'Jane Smith',
                'action'  => 'Updated profile',
                'time'    => '5 hours ago',
                'status'  => 'info'
            ],
            [
                'user'    => 'System Server',
                'action'  => 'Weekly database backup completed',
                'time'    => '1 day ago',
                'status'  => 'success'
            ]
        ];
    }
}
