<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function show()
    {
        try {
    
            $xml_data = '<?xml version="1.0" encoding="UTF-8"?>
            <status ua="custom-1.1">
            <merchant>
            <account>11018887</account>
            <site_id>393</site_id>
            <site_secure_code>970443</site_secure_code>
            </merchant>
            <transaction>
            <id>fcupen_2</id>
            </transaction>
            </status>';
            $URL = "https://devapi.multisafepay.com/ewx/?wsdl";
            
            
            $ch = curl_init($URL);
            
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:  text/plain'));
            curl_setopt( $ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
            curl_setopt( $ch, CURLOPT_HEADER, 0);
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec( $ch );
            
            $xml = new \SimpleXMLElement($response);
            $array = json_decode(json_encode($xml),true);
       
            if(empty($array) === false){
return [
                "status"=>'true',
                "ewallet"=>$array['ewallet'],
                "customer"=>$array['customer'],
                "transaction"=>$array['transaction'],
                "paymentdetails"=>$array['paymentdetails'],
                "costs"=>$array['costs'],
                "checkoutdata"=>$array['checkoutdata'],
                "items"=>$array['checkoutdata']["shopping-cart"]["items"]
            ];

        }else{
            return [
                "status"=>'false'
            ];
        }
            }catch(SoapFault $fault){
                    echo '<br>'.$fault;
                }
                
            }
}
