<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MidjourneyHelperController extends Controller
{
    public function index() {
        return view('pages.midjourneyhelper.index');
    }

    public function activate (Request $request) {
        $license_key = $request->input('key');
        $device_id = $request->input('deivce_id');

        $value = Redis::hget('midjourneyhelper.license_keys', $license_key);

        if ($value && $value != $device_id) {
            return response()->json([
                'status' => false,
                'message'   =>  'license key already used!'
            ], 200);
        }

        $result = $this->verify($license_key);

        if (isset($result['success']) && $result['sucess'] == 'true') {
            //
            if ($result['uses'] >= 10) {
                return response()->json([
                    'status' => false,
                    'message'   =>  'key used limit~'
                ], 200);
            }

            Redis::hset('midjourneyhelper.license_keys', $license_key, $device_id);

            return response()->json([
                'status' => true,
                'message'   =>  'success'
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message'   =>  'network error'
            ], 200);
        }
    }

    protected function verify($license_key) {
        $url = sprintf("https://api.gumroad.com/v2/licenses/verify");

        $params = [
            'product_id'    => 'vk-rPWnrpaXEM2XbAEPxog==',
            'license_key'   => $license_key
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
        // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_FAILONERROR, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $ret = curl_exec($curl);
        curl_close($curl);


        $ret = json_decode($ret, true);

        // return $ret;

        return [
            'success'   => true,
            'uses'  => 0,
        ];
    }
}
