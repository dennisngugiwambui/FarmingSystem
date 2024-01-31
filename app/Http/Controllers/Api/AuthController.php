<?php

namespace App\Http\Controllers\Api;

use App\Models\Farmer;
use App\Models\FarmRecord;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use voku\helper\ASCII;
use function Laravel\Prompts\error;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'phone' => [
                'required',
                Rule::exists('users')->where(function ($query) use ($request) {
                    return $query->where('phone', $request->phone);
                }),
            ],
            'password' => 'required',
        ]);


        try {
            $credentials = $request->only(['phone', 'password']);

            if (!$token = Auth::attempt($credentials)) {
                // If login attempt fails, show error and redirect back with errors
                return redirect()->back()->withInput()->withErrors([
                    'login_error' => 'Invalid credentials. Please check your phone and password.',
                ]);
            }

            // Generate an expiration time for the token (e.g., 1 hour)
            $expiration = now()->addHours(1)->timestamp;

            // Show success message and redirect to home route
            Toastr::success('Login successful.', 'Success');
            return redirect()->route('home')->with([
                'token' => $token,
                'expires_at' => $expiration,
                'user' => Auth::user(),
            ]);
        } catch (Exception $e) {
            // If an exception occurs, show error and redirect back
            Toastr::error('An error occurred while logging in.', 'Error');
            return redirect()->back()->withInput();
        }
    }
    public function register(Request $request)
    {
        try {
            $this->validate($request, [
                'username' => 'required',
                'phone' => 'required|min:10|max:13|unique:users,phone',
                'email' => 'email|required|unique:users,email',
                'password' => 'required|min:8',
                'confirm-password' => 'required|same:password',
            ]);

            $encryptedPassword = Hash::make($request->password);

            $user = new User;
            $user->username = $request->username;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = $encryptedPassword;
            $user->status = 'unverified';

            // Save the user after validation
            $user->save();

            // After registration, log in the user
            Auth::login($user);

            return redirect()->route('home')->with([
                'success' => true,
                'message' => 'User registered and logged in successfully',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->getMessageBag())->withInput();
        } catch (Exception $e) {
            return redirect()->back()->with([
                'success' => false,
                'message' => 'An error occurred while registering: ' . $e->getMessage(),
            ]);
        }
    }

    public function logout(Request $request)
    {
        try {
            // Invalidate the token instead of parsing it
            Auth::logout();

            //return response()->json(['success' => true]);
            return redirect()->route('index')->with('success', 'Logout successful');
        } catch (Exception $e) {
            Log::error('Error invalidating token: ' . $e->getMessage());
            Toastr::error('Error invalidating token: ' . $e->getMessage(), 'Error');
            return redirect()->back();
            //return response()->json(['error' => 'Could not parse token']);
        }
    }

    public function Home()
   {
       // Check if the user is authenticated
       if(Auth::check() && Auth::user()->id)
       {
           $users=User::count();
           $farmers=Farmer::count();
           $production=FarmRecord::count();
           return view('Farmer.home', compact('farmers', 'users', 'production'));
       }
       else
       {
           // User is not logged in, redirect to login page
           return redirect()->route('login.auth');
       }
   }

    public function Profile()
    {
        // Check if the user is authenticated
        if(Auth::check() && Auth::user()->id)
        {
            return view('Farmer.profile');
        }
        else
        {
            // User is not logged in, redirect to login page
            return redirect()->route('login.auth');
        }
    }

    public function regoster_farmers()
    {
        if(Auth::check() && Auth::user()->id)
        {
            return view('Farmer.register_farmers');
        }
        else
        {
            // User is not logged in, redirect to login page
            return redirect()->route('login.auth');
        }
    }

    public function ProductionRecord()
    {
        if(Auth::check() && Auth::user()->id)
        {
            $farmers=Farmer::all();
            return view('Farmer.production_record', compact('farmers'));
        }
        else
        {
            // User is not logged in, redirect to login page
            return redirect()->route('login.auth');
        }

    }

    public function farmerDetail(Request $request)
    {
        if(Auth::check() && Auth::user()->id)
        {

            //$farmer = Farmer::where('id', $request->id)->first();
            $farmer = Farmer::with('productions')->find($request->id);


            if (!$farmer) {
                Alert::info('Error', 'No farmer with the selected ID');
               // return redirect()->route('your.redirect.route');
                return redirect()->back();
            }

           // $production = FarmRecord::where('farmer_id', $farmer->id)->first();
           // $production = FarmRecord::all();

           return view('Farmer.farmer_details', compact('farmer'));
            //return response()->json($farmer);
        }
        else
        {
            // User is not logged in, redirect to login page
            return redirect()->route('login.auth');
        }
    }

}
