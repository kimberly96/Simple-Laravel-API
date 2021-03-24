<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Helpers\MenuHelper;
use App\Http\Model\PelangganModel;
use DB; 

class Service extends Controller
{

    public function getListPelanggan(Request $request) {
       
        $data = PelangganModel::get();
        return response()->json($data);
        
    }

}