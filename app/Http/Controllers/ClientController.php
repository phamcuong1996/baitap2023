<?php
namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ClientController extends Controller
{
    public function create()
    {
        $clients = Client::all();
        $money = 0;

        return view('clients', compact('clients','money'));
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
            $money += 400000 + 400000 * 5/100;
        } elseif (($year < 18 and ($request['type'] == 1))) {
            $money += 200000;
        } elseif (($year >= 18 and ($request['type'] == 2))) {
            $money += 500000 + 500000 * 5/100;
        } else
            $money += 200000;

        $data['name'] = $request['name'];
        $data['birth'] = $request['birth'];
        $data['type'] = $request['type'];
        $data['money'] = $money;
        $data['group'] = $request['group'];

        Client::create($data);

        Return view('clients', compact('money'));
    }

//    public function total()
//    {
//        return view('total');
//    }
//
//    public function totalStore(Request $request)
//    {
//        $id = $request['group'];
//        $clients = Client::where('group', $id)->get();
//        foreach ($clients as $val) {
//
//
//        }
//
//        return view('total');
//    }
}
