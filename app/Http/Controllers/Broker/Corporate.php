<?php
namespace App\Http\Controllers\Broker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Corporate extends Controller
{
    public function active_corporate_list(){
        return view('broker.corporate.cp_index');
    }

    public function inactive_corporate_list(){
        return view('broker.corporate.cp_index');
    }

    public function add_corporate(){
        return view('broker.corporate.cp_add');
    }
}
