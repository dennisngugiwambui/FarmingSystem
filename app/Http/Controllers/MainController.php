<?php

namespace App\Http\Controllers;

use App\Models\FarmRecord;
use Illuminate\Http\Request;
use App\Models\Farmer;
use Illuminate\View\View;

class MainController extends Controller
{
    public function register()
    {
        return view('Auth.register');
    }
    public function index()
    {
        return view('Homepage.index');
    }
    public function login()
    {
        return view('Auth.login');
    }

    public function weather()
    {
        return view('Homepage.weather');
    }

    public function about()
    {
        return view('Homepage.about');
    }

    public function visualization()
    {
        $farmRecords = FarmRecord::all();

        // Group data by farmer_id
        $groupedData = $farmRecords->groupBy('farmer_id');

        // Prepare data for the chart
        $farmerCounts = $groupedData->map->count()->values()->all(); // Extract values for the counts
        $farmerLabels = $groupedData->map->first()->pluck('farmer')->all();
        $farmerColors = ["red", "green", "blue", "orange", "brown"]; // You can customize the colors

        return view('Homepage.graph', compact('farmerLabels', 'farmerCounts', 'farmerColors'));
    }

    public function contact()
    {
        return view('Homepage.contact');
    }

    public function news()
    {
        return View('Homepage.news_and_updates');
    }



}
