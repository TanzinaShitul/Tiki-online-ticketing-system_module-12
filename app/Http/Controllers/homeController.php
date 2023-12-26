<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\seatAllocation;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    function viewBusSeat()
    {
     $trips= Trip::get();
       return view('pages.busSeatPlan')->with('trips',$trips);
    }

    function seat(Request $request)
    {

        return $request->input('seat','nothing');
    }




//   redirect create trip form
    function showTripForm()
    {
       $locations= Location::get();
        return view('pages.createTrip')->with('locations',$locations);
    }
 function storeTrip(Request $request)
      {
      $trips=  Trip::create(
            [
                'date'=> $request->input('date'),
                'from'=> $request->input('from'),
                'to'=>$request->input('to')
            ]
        );

      return redirect()->route('trip.form')->with('trips',$trips);
      }

      function showTrip()
      {
           $trips= Trip::get();
            return view('pages.tripList')->with('trips',$trips);
      }

//      login
  function login()
  {

     return view('pages.login');
  }

  function loginFunction(Request $request)
  {
//      $request->validate(
//          [
//
//              'email'=> 'string' |'required' ,
//              'password'=> 'required',
//          ]
//      );


     $emailInput= $request->input('email');
     $passwordInput=$request->input('password');

     $emailExist= User:: where('email','=',$emailInput)
         ->Where('password','=',$passwordInput)
          ->first();


     if($emailExist)
     {
         session()->put('id',$emailExist->id);
       session()->put('name',$emailExist->name);
       return redirect()->route('dash.home')->with(session('name'),session('id'));
     }
     else
         return redirect()->back();

//      $credentials = $request->only('email', 'password');
//
//      if (Auth::attempt($credentials)) {
//          // Authentication passed...
//          return redirect()->intended('/showTrip');
//      }
//
//      // Authentication failed
//      return back()->withErrors(['email' => 'Invalid credentials']);


  }

  function  home()
  {
      return view('pages.dashboard');
  }
  function logout()
  {
      session()->remove('name');

      return redirect()->route('dash.home');
  }

  function sample()
  {
      return User::with('seat_allocation')->get();
  }

  function storeTicket(Request $request)
  {
      $request->validate(
          [
              'seat'=>'array|required'
          ]
      );

      $trip= $request->input('trip');
      $sitNumber= $request->input('seat');

      seatAllocation::create(
          [
              'user_id'=>session('id'),
                'trip_id'=>$trip,
              'seat_number'=>$sitNumber
          ]
      );

        return redirect()->back();

  }
  function viewSoldTicket()
  {

      $tickes=seatAllocation::get();

      $allocatedSeats = seatAllocation::with('trip')->get();




      return view('pages.viewSoldTicket')->with([
          'tickets'=>$tickes,
          'allocatedSeats'=>  $allocatedSeats
      ]);
  }


}
