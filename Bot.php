<?php
date_default_timezone_set("Asia/Jakarta");
awalmula:

echo @color('nevy', " *============================================* \n");
echo @color('nevy', " 1.> MAK ATIK SELALU DI DEPAN       \n");
echo @color('green', " 2.> MARI CUAN BERSAMA    \n");
echo @color('nevy', " *============================================* \n");

echo @color('green', "[".date("l, Y-m-d H:i:s")."]\n");
echo @color('yellow', "MENU:\n");
echo @color('yellow', "[1] DAFTAR IPOIN\n");
echo @color('yellow', "[2] DAFTAR AKUN KLIK\n");
echo @color('yellow', "[3] CEK KUPON DELAY\n");
echo @color('red', "[X] KELUAR\n");
echo @color('yellow', "Choice: ");
$choice = trim(fgets(STDIN));
echo "\n";
switch ($choice) {
	case '1':
		echo color('yellow', "Nomor : ");
$nomor = trim(fgets(STDIN));

            $headersx = array();
            $headersx[] = 'Authority: www.uuidtools.com';
            $headersx[] = 'Cache-Control: max-age=0';
            $headersx[] = 'Sec-Ch-Ua: "Chromium";v="88", "Google Chrome";v="88", ";Not A Brand";v="99"';
            $headersx[] = 'Sec-Ch-Ua-Mobile: ?0';
            $headersx[] = 'Upgrade-Insecure-Requests: 1';
            $headersx[] = 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36';
            $headersx[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
            $headersx[] = 'Accept-Language: en-US,en;q=0.9';
            $xaxa = curl('https://www.uuidtools.com/api/generate/v4/count/1', null, $headersx);
            $xaxaxa = json_decode($xaxa[0]);
            $ciuli = $xaxaxa;
            $xuid = $ciuli."-".round(microtime(true) * 1000);
            $uuid = urut(16);
            $ip = mt_rand(0, 255).".". mt_rand(0, 255).".".mt_rand(0, 255).".". mt_rand(0, 255);

$fid = urut2(22);
$bodi = '{"fid":"'.$fid.'","appId":"1:998816605328:android:dc02f786893a91906e6415","authVersion":"FIS_v2","sdkVersion":"a:17.0.0"}';
$headers1 = array();
$headers1[] = 'Content-Type: application/json';
$headers1[] = 'Accept: application/json';
$headers1[] = 'Content-Encoding: gzip';
$headers1[] = 'Cache-Control: no-cache';
$headers1[] = 'X-Android-Package: mypoin.indomaret.android';
$headers1[] = 'X-Firebase-Client: fire-analytics-ktx/19.0.1 fire-analytics/19.0.1 android-target-sdk/30 fire-core-ktx/20.0.0 kotlin/1.5.21 device-name/havoc_vince fire-core/20.0.0 fire-cfg-ktx/21.0.1 fire-android/29 fire-abt/21.0.0 android-installer/com.android.vending fire-installations/17.0.0 fire-rc/21.0.1 fire-fcm/22.0.0 android-platform/ device-model/vince android-min-sdk/21 fire-cls-ktx/18.2.1 device-brand/Xiaomi fire-cls/18.2.1';
$headers1[] = 'X-Firebase-Client-Log-Type: 3';
$headers1[] = 'X-Android-Cert: A04FF9360D853349782EC0B69EDDDAFBE2F55C18';
$headers1[] = 'X-Goog-Api-Key: AIzaSyBaP3PQ6uohRZ8QNdr4dD_SScoTCtaF7ok';
$headers1[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10; Redmi 5 Plus Build/QQ3A.200805.001)';
$headers1[] = 'Host: firebaseinstallations.googleapis.com';
$headers1[] = 'Connection: close';
$headers1[] = 'Content-Length: '.strlen($bodi);
$a = curl('https://firebaseinstallations.googleapis.com/v1/projects/idm-corp-prd/installations', $bodi, $headers1);


$a1 = json_decode($a[1]);
$tkn = $a1->authToken->token;
$bodi2 = '{"appInstanceId":"'.$fid.'","appVersion":"3.9.2","countryCode":"ID","analyticsUserProperties":{},"appId":"1:998816605328:android:dc02f786893a91906e6415","platformVersion":"27","timeZone":"Asia/Jakarta","sdkVersion":"20.0.3","packageName":"mypoin.indomaret.android","appInstanceIdToken":"'.$tkn.'","languageCode":"id-ID"}';
$headers2 = array();
$headers2[] = 'X-Goog-Api-Key: AIzaSyBaP3PQ6uohRZ8QNdr4dD_SScoTCtaF7ok';
$headers2[] = 'X-Android-Package: mypoin.indomaret.android';
$headers2[] = 'X-Android-Cert: A04FF9360D853349782EC0B69EDDDAFBE2F55C18';
$headers2[] = 'X-Google-Gfe-Can-Retry: yes';
$headers2[] = 'X-Goog-Firebase-Installations-Auth: '.$tkn;
$headers2[] = 'Content-Type: application/json';
$headers2[] = 'Accept: application/json';
$headers2[] = 'Content-Length: '.strlen($bodi2);
$headers2[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 8.1.0; MI 6 Build/OPM7.181105.004)';
$headers2[] = 'Host: firebaseremoteconfig.googleapis.com';
$headers2[] = 'Connection: close';

$b = curl('https://firebaseremoteconfig.googleapis.com/v1/projects/998816605328/namespaces/firebase:fetch', $bodi2, $headers2);
            $asu = array();
            $asu[] = 'authorization: NNKSkTdooQo7vUGVG5eGkgYSVW7SabSjffafao35nfoan3ygfaa';
            $asu[] = 'content-type: application/json; charset=UTF-8';
            $asu[] = 'user-agent: okhttp/5.0.0-alpha.2';
            $gas01 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Redmi Note 8","device_id":"'.$uuid.'","os_name":"Android Q","os_version":"Android 10"},"core":{"event_name":"page_view","event_timestamp":'.round(microtime(true) * 1000).',"page_name":"splash","page_urlpath":""},"user":{"session_id":"'.$xuid.'","user_ip_address":"'.mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255).'"}}]}', $asu);
            $gas2 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Redmi Note 8","device_id":"'.$uuid.'","os_name":"Android Q","os_version":"Android 10"},"core":{"activity_details":"resume_app","event_name":"app_activity","event_timestamp":'.round(microtime(true) * 1000).'},"user":{"session_id":"'.$xuid.'","user_ip_address":"'.$ip.'"}}]}', $asu);
                $xoxo = array();
                $xoxo[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
                $xoxo[] = 'apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Redmi Note 8","device_id":"'.$uuid.'","os_name":"Android Q","os_version":"Android 10"}';
                $xoxo[] = 'Host: edtsapp.indomaretpoinku.com';
                $xoxo[] = 'User-Agent: okhttp/5.0.0-alpha.2';
                $coks = curl('https://edtsapp.indomaretpoinku.com/configuration/api/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);
            $gas3 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Redmi Note 8","device_id":"'.$uuid.'","os_name":"Android Q","os_version":"Android 10"},"core":{"event_name":"page_view","event_timestamp":'.round(microtime(true) * 1000).',"page_name":"login","page_urlpath":""},"user":{"session_id":"'.$xuid.'","user_ip_address":"'.$ip.'"}}]}', $asu);
            $fcm = ''.$fid.':APA91bGxVvyTN6Jivl5bm45ETkTqBWwkCu-'.urut2(35).'_odRvalvU3mAaawssSEHXb_'.urut2(26).'-wc6s4X1fOZLvjGq6vJWq';
            $bodi3 = '{"userId":0,"deviceType":"01","deviceId":"'.$uuid.'","fcmToken":"'.$fcm.'"}';
            $headers3 = array();
$headers3[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
$headers3[] = 'Apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Mi4c","device_id":"'.$uuid.'","os_name":"Android O_MR1","os_version":"Android 7.0"}';
$headers3[] = 'Content-Type: application/json; charset=UTF-8';
$headers3[] = 'Content-Length: '.strlen($bodi3);
$headers3[] = 'Host: edtsapp.indomaretpoinku.com';
$headers3[] = 'Connection: close';
$headers3[] = 'User-Agent: okhttp/5.0.0-alpha.2';
$c = curl('https://edtsapp.indomaretpoinku.com/notification/api/push-notifications/fcm-registration', $bodi3, $headers3);

        $headers = array();
        $headers[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
        $headers[] = 'Apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Mi4c","device_id":"'.$uuid.'","os_name":"Android O_MR1","os_version":"Android 7.0"}';
        $headers[] = 'Content-Type: application/json; charset=UTF-8';
        $headers[] = 'Host: edtsapp.indomaretpoinku.com';
        $headers[] = 'Connection: close';
        $headers[] = 'User-Agent: okhttp/5.0.0-alpha.2';
        $cekdevice = curl('https://edtsapp.indomaretpoinku.com/login/api/open/pin/check-device', '{"phoneNumber":"'.$nomor.'","deviceId":"'.$uuid.'"}', $headers);
        send:
        $respon = curl('https://edtsapp.indomaretpoinku.com/login/api/open/login-sms', '{"deviceId":"'.$uuid.'","phoneNumber":"'.$nomor.'"}', $headers);

            if (strpos($respon[1], '"message":"Success"')) {
                $cekdevice = curl('https://edtsapp.indomaretpoinku.com/login/api/open/pin/check-device', '{"phoneNumber":"'.$nomor.'","deviceId":"'.$uuid.'"}', $headers);
                echo "OTP masuk ? {y/n} : ";
                $again = trim(fgets(STDIN));
                if(strtolower($again) == 'y') {
                    echo color('yellow', "OTP : ");
                $otp = trim(fgets(STDIN));
                    
                    $xoxo = array();
                    $xoxo[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
                    $xoxo[] = 'apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Mi4c","device_id":"'.$uuid.'","os_name":"Android O_MR1","os_version":"Android 7.0"}';
                    $xoxo[] = 'Host: edtsapp.indomaretpoinku.com';
                    $xoxo[] = 'User-Agent: okhttp/5.0.0-alpha.2';
                    $xoxo[] = 'Content-Type: application/json; charset=UTF-8';
          
                    $coks = curl('https://edtsapp.indomaretpoinku.com/configuration/api/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);

                    verified:
                    $respon2 = curl('https://edtsapp.indomaretpoinku.com/login/api/open/login-verification-sms', '{"deviceId":"'.$uuid.'","otp":"'.$otp.'","phoneNumber":"'.$nomor.'"}', $headers);
                   

        
            if (strpos($respon2[1], '"message":"Success"')) {
                $token = json_decode($respon2[1]);
                $xx = $token->data->access_token;

                $xoxo = array();
                $xoxo[] = 'Authorization: Bearer '.$xx;
                $xoxo[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
                $xoxo[] = 'apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Mi4c","device_id":"'.$uuid.'","os_name":"Android O_MR1","os_version":"Android 7.0"}';
                $xoxo[] = 'User-Agent: okhttp/5.0.0-alpha.2';
                $xoxo[] = 'Content-Type: application/json; charset=UTF-8';
                $cust = curl('https://edtsapp.indomaretpoinku.com/customer/api/mobile/get-data-customer', null, $xoxo);
                $id = json_decode($cust[1])->data->id;
                $memberid = json_decode($cust[1])->data->memberId;

                $jancokx = curl('https://edtsapp.indomaretpoinku.com/configuration/api/mobile/skip-module/tr-skip-module', null, $xoxo);
                $coks = curl('https://edtsapp.indomaretpoinku.com/configuration/api/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);

                $bodi4 = '{"userId":'.$id.',"deviceType":"01","deviceId":"'.$uuid.'","fcmToken":"'.$fcm.'"}';
                $headers4 = array();
                $headers4[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
                $headers4[] = 'Authorization: Bearer '.$xx;
                $headers4[] = 'Apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Mi4c","device_id":"'.$uuid.'","os_name":"Android O_MR1","os_version":"Android 7.0"}';
                $headers4[] = 'Content-Type: application/json; charset=UTF-8';
                $headers4[] = 'Host: edtsapp.indomaretpoinku.com';
                $headers4[] = 'Content-Length: '.strlen($bodi4);
                $headers4[] = 'Connection: close';
                $headers4[] = 'User-Agent: okhttp/5.0.0-alpha.2';
                $d = curl('https://edtsapp.indomaretpoinku.com/notification/api/push-notifications/fcm-registration', $bodi4, $headers4);


                $gas4 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Redmi Note 8","device_id":"'.$uuid.'","os_name":"Android Q","os_version":"Android 10"},"core":{"event_name":"page_view","event_timestamp":'.round(microtime(true) * 1000).',"page_name":"success login","page_urlpath":""},"user":{"session_id":"'.$xuid.'","user_id":'.$id.',"user_ip_address":"'.$ip.'"}}]}', $asu);
                $gas5 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Redmi Note 8","device_id":"'.$uuid.'","os_name":"Android Q","os_version":"Android 10"},"core":{"failed_reason":"Success WA Verification","event_label":"login","event_name":"event_submission","event_status":"success","event_timestamp":'.round(microtime(true) * 1000).'},"user":{"session_id":"'.$xuid.'","user_id":'.$id.',"user_ip_address":"'.$ip.'"}}]}', $asu);
                $gas6 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Redmi Note 8","device_id":"'.$uuid.'","os_name":"Android Q","os_version":"Android 10"},"core":{"event_name":"page_view","event_timestamp":'.round(microtime(true) * 1000).',"page_name":"Exchange code","page_urlpath":""},"user":{"session_id":"'.$xuid.'","user_id":'.$id.',"user_ip_address":"'.$ip.'"}}]}', $asu);
                $cokss = curl('https://edtsapp.indomaretpoinku.com/configuration/api/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);

                $coksss = curl('https://edtsapp.indomaretpoinku.com/configuration/api/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);
                $kakaka = curl('https://edtsapp.indomaretpoinku.com/customer/api/is-whatsapp-verified', null, $xoxo);

                #
                $createpin = curl('https://edtsapp.indomaretpoinku.com//login/api/pin/create-pin', '{"pinCode":"767006"}', $xoxo);
                if (strpos($createpin[1], '"message":"Success"')) {
                   echo @color('green', "Pin : 767006\n");
                } else {
                    echo @color('red', "Gagal buat pin\n");
                }

                inputcok:
                $xoxos = array();
                $xoxos[] = 'Host: edtsapp.indomaretpoinku.com';
                $xoxos[] = 'authorization: Bearer '.$xx;
                $xoxos[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
                $xoxos[] = 'apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Mi4c","device_id":"'.$uuid.'","os_name":"Android O_MR1","os_version":"Android 7.0"}';
                $xoxos[] = 'content-type: application/json; charset=UTF-8';
                $xoxos[] = 'content-length: 26';
                $xoxos[] = 'accept-encoding: gzip';
                $xoxos[] = 'user-agent: okhttp/5.0.0-alpha.2';

             
                echo color('yellow', "KODE TOKO: ");
                $tokox = trim(fgets(STDIN));
                $toko = strtoupper($tokox);

                $kode = curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/gift/redeem', '{"couponPromoCode":"'.$toko.'"}', $xoxos);
                if (strpos($kode[1], '"message":"Success"')) {
                    $nano = json_decode($kode[1]);
                    echo "$kode[1]\n";                
                
                sleep(5);
                $tempikkk = array();
$tempikkk[] = 'Authorization: Bearer '.$xx;
$tempikkk[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
$tempikkk[] = 'Apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Mi4c","device_id":"'.$uuid.'","os_name":"Android O_MR1","os_version":"Android 7.0"}';
$tempikkk[] = 'Connection: Keep-Alive';
$tempikkk[] = 'User-Agent: okhttp/5.0.0-alpha.2';

                cekkvc:
                $getkpn =  curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons/has-new-coupon', null, $tempikkk);
                if (strpos($getkpn[1], '"hasNewCoupon":true')) {
                    $cek = curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons?unpaged=true', null, $tempikkk);
                if (strpos($cek[1], '"message":"Success"')) {
                    $list = json_decode($cek[1]);
                    if ($list->data->content == null) {
                        echo "delay..\n";
                        sleep(5);
                        goto cekkvc;
                    } else {
                    	save("===========================\n".$nomor."\n", 'vocerlain.txt');
                        echo @color('green', "[".date("l, Y-m-d H:i:s")."]\n");
                        foreach($list->data->content as $mydata)

                            {
                                echo color('nevy', "$mydata->couponName =>  ");
                                 echo color('green', "$mydata->couponCode\n");
                                 if ($mydata->couponName== "Diskon Rp 25.000 Klik Indomaret") {
                                 	save($nomor.";".$mydata->couponCode."\n", 'akunvocer25k.txt');
                                 	echo color('yellow', "Tersimpan di akunvocer25k.txt\n");
                                 }
                                 save($mydata->couponName.";".$mydata->couponCode."\n", 'vocerlain.txt');                                
                                                              }
                            }
                            save("===========================\n", 'vocerlain.txt');
                            save($nomor.";".$uuid."; 230414\n", 'akunadavocer.txt');
                        } else {
                            echo color('red', "$cek[1]\n");
                            goto cekkvc;
                        }
                } else {
                    echo color('red', "$getkpn[1]\n");
                    save($nomor.";".$uuid."; 230414\n", 'akundelay.txt');
                    echo color('yellow', "Tersimpan di akundelay.txt\n");
                }

                
                    } else {
                        echo color('red', "$kode[1]\n");
                    }
                } else {
                    echo color('red', "$respon2[1]\n");
                }
            } else {
                goto send;
            }
            } else {
                echo color('red', "$respon[1]\n");
            }
            goto awalmula;
		break;
	case '2':
		echo @color('yellow', "Masukkan nomor : ");
    $nomor = trim(fgets(STDIN));
 
        $kuntul = array();
$kuntul[] = 'Content-Type: application/json';
$kuntul[] = 'Host: api.klikindomaret.com';
$kuntul[] = 'User-Agent: okhttp/3.12.1';
$reg = curl('https://api.klikindomaret.com/api/PreRegistration/SendOTPSMS?NoHP='.$nomor, null, $kuntul);
echo @color('yellow', "OTP : ");
$otp = trim(fgets(STDIN));
$reg2 = curl('https://api.klikindomaret.com/api/PreRegistration/ValidationOTPCodeSMS?NoHP='.$nomor.'&otpCode='.$otp, null, $kuntul);
if (strpos($reg2[1], '"Message":"Verifikasi berhasil dilakukan."')) {
    $data = file_get_contents("https://swappery.site/data.php?qty=1&domain=tinta.co.id");
    $datas = json_decode($data);
    $nama = $datas->result[0]->firstname;
    $nama2 = $datas->result[0]->lastname;
    $email = $datas->result[0]->email;
    
$getdev = curl('https://api.klikindomaret.com/api/MobileAppsVersion/getDevice_Token?device_token=740f4707bebcf74f9b7c25d48e3358945f6aa01da5ddb387462c7eaf61bb78ad', null, $kuntul);
    $regis = curl('https://api.klikindomaret.com/api/Customer/RegisterViaMobileApps?districtID=2483&mfp_id=9525d94cce3e723ca591fbb655e2bf56fed124feeacead050566290598b579ac', '{"FName":"'.$nama.'","LName":"'.$nama2.'","Email":"'.$email.'","KonfirmasiEmail":"","Gender":"Wanita","Mobile":"'.$nomor.'","Password":"kintil123","ConfirmPassword":"kintil123","IsConfirmed":true,"district":{"id":2483,"name":"Gunung Sahari Selatan"},"isShowPassword":false,"isShowPasswordConfirm":false,"errorMessageEmail":null,"errorMessageConfirmPassword":null,"ID":"00000000-0000-0000-0000-000000000000","IPAddress":"192.168.56.132","IsSubscribed":1,"IsNewsLetterSubscriber":1,"AllowSMS":false,"LastUpdate":"0001-01-01T00:00:00","DateOfBirth":"1996-01-'.rand(01, 30).'T00:00:00.000Z","DateOfBirthStringFormatted":"1996-01-'.rand(01, 30).'","TypePushEmail":0,"IsUpload":false,"IsActivated":false,"MobileVerified":true,"DateOfBirthExists":"0001-01-01T00:00:00","OTPValidationExpired":false,"IsFromOtherSystem":false,"OTPCount":0,"OTPAvailable":0}', $kuntul);
    if (strpos($regis[1], '"IsSuccess":true')) {
        echo @color('green', "Registrasi Berhasil\n");
                        echo @color('yellow', "Nomor : ");
                        echo @color('nevy', "$nomor\n");
                        echo @color('yellow', "Password : ");
                        echo @color('nevy', "kintil123\n");
                        save($nomor.";kintil123", 'akunklik.txt');
                        echo @color('yellow', "Tersimpan di akunklik.txt\n");
        $respi = json_decode($regis[1]);
                $respid = $respi->ResponseID;
                $send = curl('https://api.klikindomaret.com/api/Customer/GetByID/'.$respid.'?mfp_id=9525d94cce3e723ca591fbb655e2bf56fed124feeacead050566290598b579ac', null, $kuntul);
                if (strpos($send[1], '"IsActivated":true')) {
                    echo @color('yellow', "Sedang verif email\n");
                    $emails = explode("@", $email);
        $emailx = "surl=".trim($emails[1])."%2F".trim($emails[0]);
        $xixi = array();
        $xixi[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0';
        $xixi[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
        $xixi[] = 'Accept-Language: en-US,en;q=0.5';
        $xixi[] = 'Connection: keep-alive';
        $xixi[] = 'Cookie: '.$emailx;
        Awal:
        $xyz = curl('https://generator.email/', null, $xixi, true);
        if (strpos($xyz[1], 'Terima kasih telah melakukan registrasi di Klikindomaret.')) {
            $res = remove_space($xyz[1]);
            $link = get_between($res, 'https://www.klikindomaret.com/Customer/ActivationByEmail?Token=', '"rel="nofollow"target="_blank">');
            if (empty($link)) die("Error!");
            echo "\n";
        } else {
            echo ".";
            goto Awal;
        }
        $pecah = explode('&amp;KodePIN=', $link);
                    $token = $pecah[0];
                    $pin = $pecah[1];
                    $verif = curl('https://api.klikindomaret.com/api/Customer/ActivationWithPINCode?mfp_id=2badfdf8-5d76-4c49-81cd-c7c3588eebc4', '{"PINCode":"'.$pin.'","Token":"'.$token.'"}', $kuntul);
                    if (strpos($verif[1], '"Message":"Success"')) {
                        echo @color('green', "Verifikasi Email Berhasil\n");
                        echo @color('yellow', "Email : ");
                        echo @color('nevy', "$email\n");
                        



                    } else {
                        echo @color('red', "GAGAL\n");
                    }
                } else {
                        echo @color('red', "GAGAL MENGIRIM EMAIL\n");
                    }

    } else {
                        echo @color('red', "GAGAL REGIS\n");
                    }
}
goto awalmula;
		break;
	case '3':
	masalx:
		echo "[+] Input File: ";
$file = trim(fgets(STDIN));
if(empty($file) || !file_exists($file)) {
    echo"[+] File not found!\n";
    goto masalx;
}
$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
$no = 0;
$total = count($list)-1;
$success = 0;
$error = 0;
foreach ($list as $kode) {
    if(empty($kode)) {
                continue;
            }
            
    echo "Total: $no/$total\n";

    $akunxx = explode(';', trim($kode));
    $nomor = trim($akunxx[0]);
    $uuid = trim($akunxx[1]);
    $pin = trim($akunxx[2]);
    $xoxo = array();
                    $xoxo[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
                    $xoxo[] = 'apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Mi4c","device_id":"'.$uuid.'","os_name":"Android O_MR1","os_version":"Android 7.0"}';
                    $xoxo[] = 'Host: edtsapp.indomaretpoinku.com';
                    $xoxo[] = 'User-Agent: okhttp/5.0.0-alpha.2';
                    $xoxo[] = 'Content-Type: application/json; charset=UTF-8';

                    $login = curl('https://edtsapp.indomaretpoinku.com/login/api/open/pin/validate-pin', '{"phoneNumber":"'.$nomor.'","deviceId":"'.$uuid.'","pinCode":"'.$pin.'"}', $xoxo);
                    if (strpos($login[1], '"message":"Success"')) {
                    	$data = json_decode($login[1]);
                    	$xx = $data->data->access_token;
                    	$tempikkk = array();
$tempikkk[] = 'Authorization: Bearer '.$xx;
$tempikkk[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
$tempikkk[] = 'Apps: {"app_version":"3.9.2","device_class":"Phone","device_family":"Xiaomi Mi4c","device_id":"'.$uuid.'","os_name":"Android O_MR1","os_version":"Android 7.0"}';
$tempikkk[] = 'Connection: Keep-Alive';
$tempikkk[] = 'User-Agent: okhttp/5.0.0-alpha.2';
                    	cekkkvc:
                $getkpn =  curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons/has-new-coupon', null, $tempikkk);
                if (strpos($getkpn[1], '"hasNewCoupon":true')) {
                    $cek = curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons?unpaged=true', null, $tempikkk);
                if (strpos($cek[1], '"message":"Success"')) {
                    $list = json_decode($cek[1]);
                    if ($list->data->content == null) {
                        echo "delay..\n";
                        sleep(5);
                        goto cekkkvc;
                    } else {
                    	save("===========================\n".$nomor."\n", 'vocerlain.txt');
                        foreach($list->data->content as $mydata)

                            {
                                echo color('nevy', "$mydata->couponName =>  ");
                                 echo color('green', "$mydata->couponCode\n");
                                 if ($mydata->couponName== "Diskon Rp 25.000 Klik Indomaret") {
                                 	save($nomor.";".$mydata->couponCode."\n", 'akunvocer25k.txt');
                                 	echo color('yellow', "Tersimpan di akunvocer25k.txt\n");
                                 }
                                 save($mydata->couponName.";".$mydata->couponCode."\n", 'vocerlain.txt');                                
                                                              }
                            }
                            save("===========================\n", 'vocerlain.txt');
                            save($nomor.";".$uuid.";767007\n", 'akunadavocer.txt');
                        } else {
                            echo color('red', "$cek[1]\n");
                            goto cekkkvc;
                        }
                } else {
                    echo color('red', "$getkpn[1]\n");
                }
                    } else {
                    	echo @color('red', "GAGAL LOGIN\n");
                    }
                    $no++;
                  }
                    goto awalmula;
		break;
	
	
}

function encrypt($rawcode, $password){
	$password = sha1($password);
	$iv            = "ed403c319b371da4";
	$comp 		   = "defd8f80ffc5ec00edf88fd33d8439c8a35d3c08";
	$salt          = hash('sha256', $password.$comp);
	$kode = $rawcode;

	$encrypted_msg = openssl_encrypt(
	$kode, 'aes-256-cbc', $salt, null, $iv
	);

	return $encrypted_msg;
}

function decrypt2($msg_encrypted_bundle, $password){
	$password = sha1($password);
	$iv            = "ed403c319b371da4";
	$comp 		   = "defd8f80ffc5ec00edf88fd33d8439c8a35d3c08";
	$salt          = hash('sha256', $password.$comp);
	$encrypted_msg = $msg_encrypted_bundle;

	$decrypted_msg = openssl_decrypt(
	  $encrypted_msg, 'aes-256-cbc', $salt, null, $iv
	);

	if ( $decrypted_msg === false )
		return false;

	$msg = substr( $decrypted_msg, 41 );
	return $decrypted_msg;
}

function curl($url,$post,$headers,$follow=false,$method=null)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		if ($follow == true) curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		if ($method !== null) curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		if ($headers !== null) curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		if ($post !== null) curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		$result = curl_exec($ch);
		$header = substr($result, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		$body = substr($result, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
		$cookies = array();
		foreach($matches[1] as $item) {
		  parse_str($item, $cookie);
		  $cookies = array_merge($cookies, $cookie);
		}
		return array (
		$header,
		$body,
		$cookies
		);
	}

function save($data, $file) 
	{
		$handle = fopen($file, 'a+');
		fwrite($handle, $data);
		fclose($handle);
	}

function urut($length) 
    {
        $str = "";
        
            $characters = array_merge(range('0','9'),range('a','z'));
        
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

function get_between($string, $start, $end) 
    {
        $string = " ".$string;
        $ini = strpos($string,$start);
        if ($ini == 0) return "";
        $ini += strlen($start);
        $len = strpos($string,$end,$ini) - $ini;
        return substr($string,$ini,$len);
    }

function remove_space($var) {
    $new = str_replace("\n", "", $var);
   $new = str_replace("\t", "", $new);
    $new = str_replace(" ", "", $new);
    return $new;
}
function urut2($length) 
    {
        $str = "";
        
            $characters = array_merge(range('0','9'),range('a','z'),range('A','Z'));
        
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }
    function urut3($length) 
    {
        $str = "";
        
            $characters = array_merge(range('0','9'));
        
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

    function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
function color($color = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
    function retrieveText($file, $init, $end, $sulfix = '')
{
    $i = 1;
    $output = '';

    $handle = fopen($file, 'r');
    while (false === feof($handle) && $i <= $end) {
        $data = fgets($handle);

        if ($i >= $init) {
            $output .= $data . $sulfix;
        }
        $i++;
    }
    fclose($handle);

    return $output;
}

?>
