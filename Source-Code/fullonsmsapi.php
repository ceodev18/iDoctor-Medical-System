<?php
/* Haarisoft sms api.......................Fullonsms api.................... */
/* harishjose007@rediffmail.com........................ http://harishjose.in */
    $cookie_file_path = "/cookie.txt"; 
    $username="9833906508";
    $password="41240";
    $tomobno="9820089698";
    $message=urlencode("hai....");  
      
    	  $agent = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"index.php");    
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "MobileNoLogin=$username&LoginPassword=$password&x=16&y=14");
        $html=curl_exec($ch);
         curl_setopt($ch, CURLOPT_URL,"index.php");    
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "ActionScript=%2Fhome.php&CancelScript=%2Fhome.php&HtmlTemplate=%2Fvar%2Fwww%2Fhtml%2Ffullonsms%2FStaticSpamWarning.html&MessageLength=140&MobileNos=$tomobno&Message=$message&Gender=0&FriendName=Your+Friend+Name&ETemplatesId=&TabValue=contacts");
        
          $html = curl_exec($ch);
          echo $html;
header("location:index.php");
?>
