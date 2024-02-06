<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\FarmRecord;
use App\Models\NewsEntris;
use App\Notifications\EmailNotification;
use Illuminate\Http\Request;
use App\Models\Farmer;
use Illuminate\Notifications\Notification;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

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
        $newsArticles=NewsEntris::all();
        return View('Homepage.news_and_updates', compact('newsArticles'));
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $data='dennisngugi1234@gmail.com';

        $etails = new Contact();

        $details = [
            'greeting'=>'Hello, Here is a new contact form',
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ];

        // Uncomment or remove the following line to allow email sending
        //dd($data);
        $etails->save();

        Notification::send($data, new EmailNotification($details));

        // Send email
       // Mail::to('recipient-dennisngugi195@gmail.com')->send(new ContactFormMail($data));

        Alert::success('success', 'Thanks for contacting us');

        return redirect()->back()->with('success', 'We will contact you back soon.');
    }



}
