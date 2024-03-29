<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $url = url('/register');
        $title = 'Add New Account';
        $data = compact('url', 'title');

        return view('register')->with($data);
    }

    public function register(Request $request)
    {
        //

        // echo "<pre>";
        // $x = ($request->input('password', '.'));
        // print_r($x);
        // my_print($request->all());
        // die();
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
        // echo "<pre>";
        // $x = ($request->input('password', '.'));
        // $x = ($request->all());
        // print_r($x);

        $account = new Account;
        $account->acc_name = $request['acc_name'];
        $account->acc_station = $request['acc_station'];
        $account->acc_mob1 = $request['acc_mob1'];
        $account->acc_address = $request['acc_address'];
        $account->save();

        return redirect('/accView');

    }

    public function viewAcc(Request $request)
    {
        // echo "test_view <br>";
        $accounts = Account::all();
        $data = compact('accounts');

        return view('accounts')->with($data);
        // echo "<pre>";
        // print_r($accounts->toArray());

    }

    public function delAcc($id)
    {
        $account = Account::find($id);

        if (! is_null($account)) {
            $account->delete();
        }

        //    return redirect()->back();
        return redirect('/accView');

        // echo "<pre>";
        // print_r($accounts);

    }

    public function editAcc($id, Request $request)
    {
        $account = Account::find($id);

        if (! is_null($account)) {

            $url = url('accView/update'.'/'.$id);
            $title = 'Update Account';
            $data = compact('account', 'url', 'title');

            return view('/register')->with($data);

        } else { //    return redirect()->back();
            return redirect('/accView');
        }

        // echo "<pre>";
        // print_r($accounts);

    }

    public function updateAcc($id, Request $request)
    {
        // $x=$request->all();
        // echo "<pre>";
        // print_r($x);
        // die();

        $request->validate(
            [
                'acc_name' => 'required',
                'acc_station' => 'required',
                'acc_mob1' => 'required',
                'acc_address' => 'required',

            ]
        );

        // $account = new Account;
        $account = Account::find($id);

        $account->acc_name = $request['acc_name'];
        $account->acc_station = $request['acc_station'];
        $account->acc_mob1 = $request['acc_mob1'];
        $account->acc_address = $request['acc_address'];
        $account->save();

        return redirect('/accView');

    }
}
