<?php
//接口格式
//https://api.ucpaas.com/{SoftVersion}/Accounts/{accountSid}/{function}/{operation}?sig={SigParameter}
use think\Session;

$SoftVersion = '2014-06-30';

$Account = 'Accounts';


$accountSid = 'b5beb9e3270ba7925cbfe60d819d3b09';

$function= 'Messages';

$operation ='templateSMS';

$token = '3fe4a93cb1579c17398caa807b1293d5';

$time = date("YmdHis");

$SigParameter	 = strtoupper(md5($accountSid.$token.$time));

$Authorization = base64_encode($accountSid.":".$time);
$header = [
	'Accept:application/json',
	'Content-Type:application/json;charset=utf-8',
	'Authorization:'.$Authorization,
];

/*
POST/2014-06-30/Accounts/e03bc9106c6ed0eaebfce8c368fdcd48/Messages/templateSMS? sig=769190B9A223549407D2164CAE92152E
Host:api.ucpaas.com
Accept:application/json
Content-Type:application/json;charset=utf-8
Authorization:ZTAzYmM5MTA2YzZlZDBlYWViZmNlOGMzNjhmZGNkNDg6MjAxNDA2MjMxODUwMjE=
{
 "templateSMS" : {
    "appId"       : "e462aba25bc6498fa5ada7eefe1401b7",
    "param"       : "0000",
    "templateId"  : "1",
    "to"          : "18612345678"
    }
}
*/

$phone = input('post.phone');
$data = [
	'templateSMS'=>[
		'appId'=>'37ff1984b5634457b8bfa950c0dcf64d',
		'param'=>'1111',//要发送的信息
		'templateId'=>'39821',//模板ID
		'to'=>$phone,//手机号
	]
];


$body = json_encode($data);

$url = 'https://api.ucpaas.com/'.$SoftVersion.'/'.$Account . '/' . $accountSid . '/'. $function
	.'/' . $operation . '?sig=' .  $SigParameter;
 $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

			curl_setopt($ch,CURLOPT_POST,1);
			curl_setopt($ch,CURLOPT_POSTFIELDS,$body);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $result = curl_exec($ch);
            curl_close($ch);
