<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function pay(Request $request){
        // $order = Orders::where('id', $request->id)->first();
        // if($order){
            $orderNumber = 123456; //$request->id;
            $amount =  100; //$order->total_amout.'00';
            $name = "Namezzzz"; //$order->name;
        // }else{
        //     die();
        // }
        $PostFields = "userName=22534223_api&password=pe4tM2mL7gLeUWg&amount=$amount&orderNumber=$orderNumber&returnUrl=http://127.0.0.1/payresult&description=$name";
        $url = 'https://ipay.arca.am/payment/rest/register.do';
        $CurlOptions = array(
            CURLOPT_URL  => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $PostFields,
        );
        $CH = curl_init();
        if ($CH === false)
        {
            $message = "Error! Please try again.";
        }else{
            // die("111");
            if (curl_setopt_array($CH, $CurlOptions))
            {
            // die("222");
                $Result = curl_exec($CH);
                if (curl_errno($CH) > 0) {
                    $RetStr = false;
                    //  die("3332");
                } else {
                    $RetStr = $Result;
                }

                $data = json_decode($RetStr);
                $message = json_decode(json_encode($data), true);
                // dd($message);
                if(isset($message['errorCode']) && $message['errorCode'] == '0') {
                    return redirect()->to($message['formUrl']);
                }
            }else{
                $message = 11;
            }
        }
    }

    public function payresult(){
        $order_id = $_GET['orderId'];
        $PostFields = "userName=22534223_api&language=hy&password=pe4tM2mL7gLeUWg&orderId=$order_id";
        $url = 'https://ipay.arca.am/payment/rest/getOrderStatus.do';

        $CurlOptions = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $PostFields,
        );

        $CH = curl_init();

        if ($CH != false) {
            if (curl_setopt_array($CH, $CurlOptions)) {
                $Result = curl_exec($CH);
                if (curl_errno($CH) > 0) {
                    $RetStr = false;
                } else {
                    $RetStr = $Result;
                }


        curl_close($CH);
                $data = json_decode($RetStr);
                $array = json_decode(json_encode($data), true);
                if (isset($array['errorCode']) && $array['errorCode'] == 0) {
                    $status = 'success';
                    if($array['errorCode']==0){
                        echo "All ok bruh!";
                    } else {
                        echo "Whats happend bruh?";
                    }
                }else{
                    $status = 'error';
                }
            }
        }
    }






















    public function idram(){





        define("SECRET_KEY", "Vo26OyR1TyqU92AJNFICHpcoWAN2OiBbvBMKmU"); // Idram Payment System provide it 
        define("EDP_REC_ACCOUNT", "110001524"); // Idram Payment System provide it
        
        if(isset($_REQUEST['EDP_PRECHECK']) && isset($_REQUEST['EDP_BILL_NO']) 
        && isset($_REQUEST['EDP_REC_ACCOUNT']) && 
        isset($_REQUEST['EDP_AMOUNT']))
        {
            if($_REQUEST['EDP_PRECHECK'] == "YES")
            {
                if($_REQUEST['EDP_REC_ACCOUNT'] == EDP_REC_ACCOUNT)
                {
        
                    $bill_no = $_REQUEST['EDP_BILL_NO'];
                     echo("OK");
                }
            }
        }
        
        if(isset($_REQUEST['EDP_PAYER_ACCOUNT']) && isset($_REQUEST['EDP_BILL_NO']) 
        && isset($_REQUEST['EDP_REC_ACCOUNT']) && isset($_REQUEST['EDP_AMOUNT'])
        && isset($_REQUEST['EDP_TRANS_ID']) && isset($_REQUEST['EDP_CHECKSUM']))
        {
        $txtToHash =
        EDP_REC_ACCOUNT . ":" .
        $_REQUEST['EDP_AMOUNT'] . 
        ":" . SECRET_KEY . ":" .
        $_REQUEST['EDP_BILL_NO'] . ":" .
        $_REQUEST['EDP_PAYER_ACCOUNT'] . ":" .
        $_REQUEST['EDP_TRANS_ID'] . ":" .
        $_REQUEST['EDP_TRANS_DATE'];
            if(strtoupper($_REQUEST['EDP_CHECKSUM']) != strtoupper(md5($txtToHash)))
            {
                  // please, write your code here to handle the payment fail
            }
            else
            {
                // please, write your code here to handle the payment success
                $uid = $_REQUEST['EDP_BILL_NO'];
                $coin = $_REQUEST['EDP_AMOUNT'];
                if($DB->query("INSERT INTO pays (`uid`,`type`,`coin`) VALUES ('$uid','idram','$coin')")){
                    $q = $DB->query("SELECT * FROM users WHERE id='$uid'");
                    $row = mysqli_fetch_array($q);
                    $point = intval($row['point'])+intval($coin);
                    $DB->query("UPDATE users SET point='$point' WHERE id='$uid'");
                }
                 echo("OK");
            }
        }
  














        
    }
}


//<!-- idram -->
// <form id="idramform" action="https://banking.idram.am/Payment/GetPayment" method="POST">
// <input type="hidden" name="EDP_LANGUAGE" value="AM">
// <input type="hidden" name="EDP_REC_ACCOUNT" value="110001524">
// <input type="hidden" name="EDP_DESCRIPTION" value="Description">
// <!-- <input placeholder="Գումար (AMD)" type="hidden" name="EDP_AMOUNT" value="100"> -->
// <input placeholder="Գումար (AMD)" type="number" name="EDP_AMOUNT">
// <input type="hidden" name="EDP_BILL_NO" value="<!?php echo $uid; ?!>">
// <!-- <input type="submit" value="submit"> -->
// <center><button class="orange-btn" style="background: nooe; border:none; margin: 0; padding: 0; width: 48%; margin-right: 4%; ">Վճարել</button></center>
// </form>
//<!-- idram -->