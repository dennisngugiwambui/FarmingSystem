<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use RealRashid\SweetAlert\Facades\Alert;


class FarmerController extends Controller
{
    //

    public function FarmersRegister(Request $request)
    {
        try {
            $this->validate($request, [
                'full_name' => 'required',
                'national_id' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'location' => 'required',
                'crop_type' => 'required',
                'farming_experience' => 'required',
                'farming_type' => 'required',
                'gender' => 'required',
                'farmSize' => 'required',
                'cropsGrown' => 'required',
            ]);
            $user=auth()->user();

            $data = new Farmer();
            $data->registered_by=$user->id;
            $data->registered_by_phone=$user->phone;
            $data->registered_by_name=$user->username;
            $data->full_name = $request->full_name;
            $data->national_id = $request->national_id;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->location = $request->location;
            $data->crop_type = $request->crop_type;
            $data->farming_experience = $request->farming_experience;
            $data->farming_type = $request->farming_type;
            $data->gender = $request->gender;
            $data->farmSize = $request->farmSize;
            $data->cropsGrown = $request->cropsGrown;

            $data->save();
            //dd($data);
            //return response()->json($data);


            // Optionally, redirect or return a success message
            //Toastr::success('Farmer registered successfully', 'success');
            Alert::success()->persistent();
            return redirect()->back()->with('success', 'Farmer registered successfully!');
        } catch (Exception $ex) {
            // Log the exception
            //Log::error('Error registering farmer: ' . $ex->getMessage());

            Alert::error('error', $ex->getMessage());

            // Optionally, redirect or return an error message
            return redirect()->back()->with('error', 'An error occurred while registering the farmer.');
        }
    }

    public function farmersDelete(Request $request)
    {

        $farmer = Farmer::find($request->id);

       //dd($farmer);

        if (!$farmer) {
            Alert::info('Error', 'No farmer with selected Id');
            return redirect()->back();
        }


        $farmer->delete();

        //Toastr::success('Farmer deleted successfully', 'Success');
        Alert::success('success','farmer deleted successfully')->persistent();

        return redirect()->back()->with('success', 'farmer deleted successfully');
    }

}
