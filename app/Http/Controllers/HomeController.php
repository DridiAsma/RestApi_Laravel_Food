<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // get all data
    public function index(){
    $p1 = DB::table('pizzas');
    $p2 = DB::table('tacos');
    $p3 = DB::table('sandwiches');
    $p4 = DB::table('tartes');


    $p = $p1->unionAll($p2)->unionAll($p3)->unionAll($p4);

 return DB::table(DB::raw("({$p->toSql()}) As p"))
 ->mergeBindings($p)
 ->select('titre', 'image')
 ->paginate(10);


    }
}
