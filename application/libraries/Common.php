<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Common 
{ 
	public function getPerPage()
	{
		return "30";
	}
	
	public function getDate()
	{
		putenv("TZ=Asia/Calcutta");
		date_default_timezone_set('Asia/Calcutta');
		$date = date("Y-m-d H:i:s");		
		return $date; 
	}
	public  function getpreviousdate($date)
	{ 
		$date1 = str_replace('-', '/', $date);
		$preciusday = date('Y-m-d',strtotime($date1 . "-1 days"));
		return date_format(date_create($preciusday),'Y-m-d');
	}
	public function change_date_format($datatime)
	{
	    putenv("TZ=Asia/Calcutta");
		date_default_timezone_set('Asia/Calcutta');
	    return date_format(date_create($datatime),'d-m-Y H:i:s');
	}
	public function callurl_get($url)
	{
	
		$ch = curl_init();		
		curl_setopt($ch,CURLOPT_URL,  $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$buffer = curl_exec($ch);		
		curl_close($ch);		
		
		
		return $buffer;
		
	}

	public function callurl_post($url,$postdata)
	{
	
		$ch = curl_init();		
		curl_setopt($ch,CURLOPT_URL,  $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$postdata);
		$buffer = curl_exec($ch);		
		curl_close($ch);		
		return $buffer;
		
	}

	public function callurl_json($url,$postdata)
	{
	    
	    	$headers = array();
			$headers[] = 'Accept: application/json';
			$headers[] = 'Content-Type: application/json';
			
	    
		$ch = curl_init();		
		curl_setopt($ch,CURLOPT_URL,  $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$postdata);
		$buffer = curl_exec($ch);		
		curl_close($ch);		
		return $buffer;
		
	}
	public function GetPassword()
	{
		$n = rand(1000000, 999999999);
	
		return substr($n,0,6);										
	}
	public function GetTxnPassword()
	{
		$n = rand(1000000, 999999999);
	
		return substr($n,0,4);										
	}
	public function getOTP()
	{
		$n = rand(100001, 999999);
		return $n;										
	}
	

	public function ExecuteSMSApi($mobile_no,$message)
	{

		
		$url = "https://alert.pdrs.online/api/alerthub/send?user=61acfd8a51715d831e7a9f44&number=91[to]&message=[message]";
		$url = str_replace("[to]",$mobile_no,$url);
		$url = str_replace("[message]",urlencode($message),$url);
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		
		$response = curl_exec($ch);
		curl_close($ch);	
		return $response;
	}
	
	
	public function getMySqlDate()
	{
		putenv("TZ=Asia/Calcutta");
		date_default_timezone_set('Asia/Calcutta');
		$date = date("Y-m-d");		
		return $date; 
	}
	public function getMySqlTime()
	{
		putenv("TZ=Asia/Calcutta");
		date_default_timezone_set('Asia/Calcutta');
		$time = date("h:i:s A");		
		return $time; 
	}
	public function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
		  $ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
		  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
		  $ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}	
public function convert_number($number) 
{ 
    if (($number < 0) || ($number > 999999999)) 
    { 
    throw new Exception("Number is out of range");
    } 
    $Gn = floor($number / 1000000);  /* Millions (giga) */ 
    $number -= $Gn * 1000000; 
    $kn = floor($number / 1000);     /* Thousands (kilo) */ 
    $number -= $kn * 1000; 
    $Hn = floor($number / 100);      /* Hundreds (hecto) */ 
    $number -= $Hn * 100; 
    $Dn = floor($number / 10);       /* Tens (deca) */ 
    $n = $number % 10;               /* Ones */ 
    $res = ""; 
    if ($Gn) 
    { 
        $res .= $this->convert_number($Gn) . " Million"; 
    } 
    if ($kn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            $this->convert_number($kn) . " Thousand"; 
    } 
    if ($Hn) 
    { 
        $res .= (empty($res) ? "" : " ") . 
            $this->convert_number($Hn) . " Hundred"; 
    } 
    $ones = array("", "One", "Two", "Three", "Four", "Five", "Six", 
        "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", 
        "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", 
        "Nineteen"); 
    $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", 
        "Seventy", "Eigthy", "Ninety"); 
    if ($Dn || $n) 
    { 
        if (!empty($res)) 
        { 
            $res .= " and "; 
        } 
        if ($Dn < 2) 
        { 
            $res .= $ones[$Dn * 10 + $n]; 
        } 
        else 
        { 
            $res .= $tens[$Dn]; 
            if ($n) 
            { 
                $res .= "-" . $ones[$n]; 
            } 
        } 
    } 
    if (empty($res)) 
    { 
        $res = "zero"; 
    } 
    return $res; 
} 
}