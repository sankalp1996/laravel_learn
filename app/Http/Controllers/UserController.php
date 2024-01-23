<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;

class UserController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        //

        // echo "<pre>";
        // $x = ($request->input('password', '.'));
        // print_r($x);

        $request->validate(
            [
                'acc_name' => 'required',
                'acc_station' => 'required',
                'acc_mob1' => 'required',
                'acc_address' => 'required',

                // 'email' => 'required | email',
                // 'conf_pass' => 'required | same:password',
            ]
        );
        echo "<pre>";
        // $x = ($request->input('password', '.'));
        $x = ($request->all());
        print_r($x);
        $account = new Account;
        $account->acc_name=$request['acc_name'];
        $account->acc_station=$request['acc_station'];
        $account->acc_mob1=$request['acc_mob1'];
        $account->acc_address=$request['acc_address'];
        $account->save(); 
        return redirect('/accView');
        
    }

    public function viewAcc(Request $request){
        echo "test_view <br>";
        $accounts = Account::all();
        $data=compact('accounts');
        return view('accounts')->with($data);
        // echo "<pre>";
        // print_r($accounts->toArray());

    }


}
