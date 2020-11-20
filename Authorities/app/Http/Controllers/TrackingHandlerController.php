<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio\Rest\Client;

use App\Models\User;

class TrackingHandlerController extends Controller{
    //

    public function index(){

        return view('/forms/search_user');

    }

    public function search(Request $request){

        $user_phone_number = $request->input('phone_number');

        $user = User::where('phone_number','=',$user_phone_number)->first();

        return view('forms/search_user')->with('user',$user);

    }


    public function fake_in_touch_visualisation(){

        $users = User::all();

        return view('in_touch')->with('users',$users);

    }

    public function alert($phone_number){

        $token = getenv("TWILIO_AUTH_TOKEN");

        $twilio_sid = getenv("TWILIO_SID");

        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");

        $twilio = new Client($twilio_sid, $token);

        $twilio->messages->create(
            // Where to send a text message (your cell phone?)
            $phone_number,

            array(

                'from' => '+12185432989',

                'body' => 'Vous avez été en contact avec un personne testée positive à un virus,
                    veuillez vous rapprocher d\'une structure sanitaire tout en respectant les gestes barrières
                '
            ));

            return redirect()->to("/in_contact/$phone_number");
    }

}
