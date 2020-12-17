<?php

date_default_timezone_set('Asia/Jakarta');
include "P12.php";
ulang:
// function change(){
echo color("purple","               CLAIM VOUCHER GOJEK                        \n");
echo color("nevy","        Waktu  : ".date('[d-m-Y] [H:i:s]')."                        \n");
echo color("blue","        Format Nomor 08/62 Pake Salah Satu                  \n");
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        echo color("green","Masukkan Nomor : ");
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
        echo color("purple"," Masukkan OTP..")."\n";
        otp:
        echo color("white"," Otp : ");
        $otp = trim(fgets(STDIN));
        echo "\n";
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("yellow","SUKSES REGISTRASI\n");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo color("green","+] Token : ".$token."\n\n");
        save("token.txt",$token); 
}
}
echo "\n";
echo "\n";
$frdy = new frdy();
echo "Masukkan NOMOR kembali : ";
$phoneNumber = trim(fgets(STDIN));
$getOTPToken = $frdy->loginRequest($phoneNumber);
$json = json_decode($getOTPToken, true);
$OTPToken = $json['data']['otp_token'];
echo "OTP        : ";
$otpCode = trim(fgets(STDIN));
echo "OTP TOKEN : ";
echo $OTPToken;
$getAccesstoken = $frdy->getAuthToken($OTPToken, $otpCode);
$json = json_decode($getAccesstoken, true);
$accesstoken = $json['access_token'];
echo "\n";
echo color("yellow","=====!=======!!========!!!=====!!!======\n");
         
         echo "\n".color("nevy"," Mohon menunggu sebentar...     ");
        for($a=1;$a<=3;$a++)
{
        echo color("red","💞💞  ");
        sleep(0);
        }
        echo "\n";
        date_default_timezone_set('Asia/Jakarta');
$token = $accesstoken; 
echo colorreff("green","Santai dulu ya... ");
echo "\n";
sleep(0);
        
echo "\n";
        echo "\n".color("red"," ▬▬▬▬▬▬▬▬▬▬▬▬CLAIM VOUCHER▬▬▬▬▬▬▬▬▬▬▬▬");
        echo "\n".color("purple"," Note : ");
        echo "\n".color("purple"," Proses claim voc memru melalui 2x otp");
        echo "\n".color("purple"," Jam 11.00 - 12.00 WIB untuk proses Go-Mart");
        echo "\n".color("purple"," Max Percobaan limit 3x");
        echo "\n".color("red"," ▬▬▬▬▬▬▬▬▬▬▬▬CLAIM VOUCHER▬▬▬▬▬▬▬▬▬▬▬▬");
        
           echo "\n".color("green","👌🍱 Ambil Voucher G-Mart v1 ");
        echo "\n".color("nevy","Berdoa dulu bro.. ");
        for($a=1;$a<=3;$a++){
        echo color("blue","👀 ");
        sleep(8);
        }
         $code1 = requestedd('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"YEARENDSALE"}');
        $message = fetch_value12($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".colorss("green","👍🙏 Message: ".$message);
        }else{
        echo "\n".colorss("red","-] Message: ".$message);
        sleep(8);
}
echo "\n".color("green","👌🍱 Ambil Voucher G-Mart v2 ");
        echo "\n".color("nevy","Berdoa dulu bro.. ");
        for($a=1;$a<=3;$a++){
        echo color("blue","👀 ");
        sleep(8);
        }
        $code1 = requestreff('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"YEARENDSALE"}');
        $message = fetch_value12($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","👍🙏 Message: ".$message);
        }else{
        echo "\n".color("red","-] Message: ".$message);
        sleep(8);
}
echo "\n".color("green","👌🍱 Ambil Voucher G-MarT v3");
        echo "\n".color("nevy","Berdoa dulu bro.. ");
        for($a=1;$a<=3;$a++){
        echo color("blue","👀 ");
        sleep(8);
        }
        $code1 = requested('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"YEARENDSALE"}');
        $message = fetch_value12($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".colorss("green","👍🙏 Message: ".$message);
        }else{
        echo "\n".colorss("red","-] Message: ".$message);
        sleep(8);
}           
	
      sleep(1);  
        $cekvoucher = requestedd('/gopoints/v3/wallet/vouchers?limit=13&page=1', $token);
        $total = fetch_value12($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr23('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr23('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr23('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr23('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr23('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr23('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr23('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr23('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr23('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr23('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr23('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr23('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr23('"title":"','",',$cekvoucher,"13");
        echo "\n".colorss("green"," Total voucher ".$total." : ");
        echo "\n".colorss("yellow","  1. ".$voucher1);
        echo "\n".colorss("purple","  2. ".$voucher2);
        echo "\n".colorss("white","  3. ".$voucher3);
        echo "\n".colorss("green","  4. ".$voucher4);
        echo "\n".colorss("red","  5. ".$voucher5);
        echo "\n".colorss("blue","  6. ".$voucher6);
        echo "\n".colorss("yellow","  7. ".$voucher7);
        echo "\n".colorss("nevy","  8. ".$voucher8);
        echo "\n".colorss("green","  9. ".$voucher9);
        echo "\n".colorss("purple","  10. ".$voucher10);
	echo "\n".colorss("red","  11. ".$voucher11);
        echo "\n".colorss("blue","  12. ".$voucher12);
        echo "\n".colorss("white","  13. ".$voucher13);
        echo"\n";
        $expired1 = getStr23('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr23('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr23('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr23('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr23('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr23('"expiry_date":"','"',$cekvoucher,'6');
        $expired7 = getStr23('"expiry_date":"','"',$cekvoucher,'7');
        $expired8 = getStr23('"expiry_date":"','"',$cekvoucher,'8');
        $expired9 = getStr23('"expiry_date":"','"',$cekvoucher,'9');
        $expired10 = getStr23('"expiry_date":"','"',$cekvoucher,'10');
        $expired11 = getStr23('"expiry_date":"','"',$cekvoucher,'11');
        $expired12 = getStr23('"expiry_date":"','"',$cekvoucher,'12');
        $expired13 = getStr23('"expiry_date":"','"',$cekvoucher,'13');
    echo color("nevy","  SEMOGA BERMANFAAT \n");   
       
       setpin:
         echo "\n".color("yellow","  📲📟 SET PIN ?: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         	echo " Masukkan PIN Anda : ";
         $data2 = '{"pin":"'.trim(fgets(STDIN)).'"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "  📲📟 OTP PIN: ";
         $otpsetpin = trim(fgets(STDIN));
         echo "\n".color("yellow","  PIN SUDAH TERPASANG ")."\n";
         echo "\n".color("green"," PIN ANDA $data2 ")."\n";
         echo color("green","  PIN ANDA $data2 ")."\n";
         echo color("red"," SEMOGA BERMANFAAT ")."\n";
         echo color("nevy","        Waktu  : ".date('[d-m-Y] [H:i:s]')."                        \n");
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
       }