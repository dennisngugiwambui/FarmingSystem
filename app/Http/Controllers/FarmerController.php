<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\FarmRecord;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use Illuminate\Support\Facades\View;


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

    public function farmersProduction(Request $request)
    {
        try {
            $this->validate($request, [
                'product_name' => 'required',
                'quantity' => 'required|numeric',
                'production_date' => 'required|date',
                'notes' => 'nullable|string',
            ]);

            $farmer = Farmer::find($request->id);

            if (!$farmer) {
                return response()->json(['error' => 'Farmer not found'], 404);
            }

            $data = new FarmRecord();
            $data->farmer_id=$farmer->id;
            $data->farmer = $farmer->full_name;
            $data->phone = $farmer->phone;
            $data->product_name = $request->product_name;
            $data->quantity = $request->quantity;
            $data->production_date = $request->production_date;
            $data->notes = $request->notes;

            $data->save();
            Alert::success('success', 'farmer production added successfully')->persistent();
            //return response()->json($data);

            return redirect()->back()->with('success', 'production added successfully');

        } catch (\Exception $ex) {
            // Handle the exception, e.g., log the error
            //return response()->json(['error' => 'Internal Server Error'], 500);
            Alert::error('error', $ex->getMessage());
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    public function generateReceiptPdf($id)
    {
        $production = FarmRecord::find($id);

        // Check if the record exists
        if (!$production) {
            //abort(404);
            Alert::error('error', 'error while loading the id')->persistent();
        }

        // Pass data to the view
        $data = [
            'production' => $production,
        ];

        // Generate PDF from the view
        $pdf = PDF::loadView('Farmer.receipt', $data);

        // Return the PDF as a response
        return $pdf->stream('farmer_receipt.pdf', compact('data'));
    }



}
