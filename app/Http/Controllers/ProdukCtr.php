<?php
// import namespace
namespace App\Http\Controllers;
// import lib 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// import model 
use App\Models\ProdukMdl;
use App\Models\DesaMdl;
// import another controller 

class ProdukCtr extends Controller
{
    public function detailproduct()
    {
                
    }

    public function checkarea($slug)
    {
        $dr = ['area' => '51'];
        return \Response::json($dr);
    }
}
