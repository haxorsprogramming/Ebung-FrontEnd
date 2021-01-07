<?php

/**
 * Import namespace * lib
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

/**
 * Import model
 */

use App\Models\SubKategoriMdl;

class HelperCtr extends Controller
{

    function getsubkategori($idKategori)
    {
        $dataSubKategori = SubKategoriMdl::where('kd_kategori', $idKategori)->get();
        $dr = ['dataSubKategori' => $dataSubKategori];
        return \Response::json($dr);
    }

    public function tesuploads3(Request $request)
    {
        $file = $request->file('avatar');
        $filename = $request->nama_file . '.' . $file->getClientOriginalExtension();
        Storage::disk('s3')->put('slider/' . $filename, file_get_contents($file));
        echo "berhasil upload";
    }

    public function kirimPesanGuzzle(Request $request)
    {
        $url = 'http://116.203.92.59/api/send_message';
        $noHp = "082272177022";
        $key = env('WOOWA_API');
        $message = $request -> pesan;
        $data = array("phone_no" => $noHp, "key" => $key, "message" => $message);
        $data_string = json_encode($data);
        $response = Http::withHeaders(['Content-Type' => 'application/json', 'Content-Length' => strlen($data_string)])->post($url, $data);
        echo $response;
    }

    public function teskirimwa(Request $request)
    {
        $url = 'http://116.203.92.59/api/send_message';
        $noHp = "082272177022";
        $key = env('WOOWA_API');
        $message = $request -> pesan;
        $data = array("phone_no" => $noHp, "key" => $key, "message" => $message);
        $data_string = json_encode($data);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 360);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string)
            )
        );
        curl_exec($ch);
    }
}
