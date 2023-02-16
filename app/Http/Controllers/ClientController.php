<?php
namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create()
    {
        $clients = Client::all();

        return view('clients', compact('clients'));
    }

    public function store(Request $request)
    {
        $date = getdate();
        $data = $request->all();
        $birth =  $request['birth'];
        $time = $date['year'];
        $year = $time - $birth;
        $money = 0;

        if (($year >= 18 AND ($request['type'] == 1))) {
            $money += 400 + 400 * 5/100;
        } elseif (($year < 18 and ($request['type'] == 1))) {
            $money += 200;
        } elseif (($year >= 18 and ($request['type'] == 2))) {
            $money += 500 + 500 * 5/100;
        } else
            $money +=200;
        echo $money;

//        if ($year >= 18) {
//            echo "1";
//        } else
//            echo "2";
//
//        if ($request['type'] == 1 ) {
//            echo "cong ty";
//        } else {
//            echo "gia dinh";
//        }

    }
}
