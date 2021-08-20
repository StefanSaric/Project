<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AddressController extends Controller
{
    public function index ($address) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL =>
                'https://api.etherscan.io/api?module=account&action=txlist&address='.$address.'&startblock=0&endblock=99999999&page=1&offset=10&sort=asc&apikey=EDECUJFU6REJZF5AJM77HGRVMKSY9X98GQ',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_TIMEOUT => 1,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Accept:application/json')

    ));

        $data = json_decode(curl_exec($curl),true);
        //dd($data);
        if (curl_errno($curl)) {
            $error = 'Error:' . curl_error($curl);

        }
        curl_close($curl);

        return view ('address', ['data' => $data, 'address' => $address]);
    }
}
