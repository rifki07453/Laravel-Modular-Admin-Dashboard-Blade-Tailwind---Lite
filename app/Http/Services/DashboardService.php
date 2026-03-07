<?php

namespace App\Services;

class DashboardService
{
    public function getStats()
    {
        return [
            'users' => 124,
            'orders' => 58,
            'revenue' => 12500000,
            'sessions' => 32,
        ];
    }

    public function getChart()
    {
        return [
            'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            'data' => [12, 19, 8, 15, 22, 30, 18],
        ];
    }

    public function getActivities()
    {
        return [
            [
                'user' => 'Rikan',
                'action' => 'Created new project',
                'date' => '2026-03-01',
                'status' => 'Success'
            ],
            [
                'user' => 'Admin',
                'action' => 'Updated dashboard settings',
                'date' => '2026-02-28',
                'status' => 'Success'
            ],
            [
                'user' => 'User01',
                'action' => 'Logged into system',
                'date' => '2026-02-27',
                'status' => 'Active'
            ],
        ];
    }
}