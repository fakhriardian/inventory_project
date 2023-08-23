<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', [
            'title' => 'Dashboard'
        ]);
    }
    // START SUPER ADMIN SECTION
    public function storeList()
    {
        return view('pages.super.store_list', [
            'title' => 'Daftar-toko'
        ]);
    }
    public function adminList()
    {
        return view('pages.super.admin_list', [
            'title' => 'Daftar-Admin'
        ]);
    }
    public function marketingList()
    {
        return view('pages.super.marketing_list', [
            'title' => 'Daftar-marketing'
        ]);
    }
    public function consumerList()
    {
        return view('pages.super.consumer_list', [
            'title' => 'Daftar-konsumen'
        ]);
    }
    public function salesList()
    {
        return view('pages.super.sales_list', [
            'title' => 'Daftar-Penjualan'
        ]);
    }
    // END SUPER ADMIN SECTION
    
    // START CONSUMER SECTION
    public function consumerData()
    {
        return view('pages.consumer.consumer_data', [
            'title' => 'Data-Konsumen'
        ]);
    }
    public function purchaseData()
    {
        return view('pages.consumer.purchase', [
            'title' => 'Data-Konsumen'
        ]);
    }
    public function unitData()
    {
        return view('pages.consumer.unit_data', [
            'title' => 'Data-Konsumen'
        ]);
    }
    public function orderList()
    {
        return view('pages.consumer.order_list', [
            'title' => 'Data-Konsumen'
        ]);
    }
    // END SUPER ADMIN SECTION
}
