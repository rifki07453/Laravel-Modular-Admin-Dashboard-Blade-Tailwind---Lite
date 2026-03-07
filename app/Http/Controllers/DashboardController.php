<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Class DashboardController
 * 
 * @description Controller ini bertugas sebagai jembatan pembawa arah request.
 * Menerima request ke rute '/dashboard', memanggil DashboardService untuk mengambil data, 
 * dan akhirnya mengirim data tersebut (parse) ke View Blade.
 */
class DashboardController extends Controller
{
    /**
     * @var DashboardService Instance dari layanan dashboard.
     * Laravel Container akan melakukan dependency injection secara otomatis di constructor.
     */
    protected DashboardService $dashboardService;

    /**
     * Konstruktor Controller.
     * 
     * @param DashboardService $dashboardService Di-inject otomatis (Dependency Injection).
     */
    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    /**
     * Method untuk menampilkan halaman utama dashboard.
     * 
     * @param Request $request Object yang mencakup HTTP Request user (input, cookie, header).
     * @return View Mengembalikan file Blade dengan variabel data di dalamnya.
     */
    public function index(Request $request): View
    {
        // 1. Controller meminta (request) data kepada Service
        $stats = $this->dashboardService->getStats();
        $chartData = $this->dashboardService->getChart();
        $activities = $this->dashboardService->getActivities();

        // 2. Controller mengoper (parsing) data tersebut ke file 'resources/views/dashboard/index.blade.php'
        // compact('stats') ekuivalen dengan array asosiatif ['stats' => $stats]
        return view('dashboard.index', compact('stats', 'chartData', 'activities'));
    }
}