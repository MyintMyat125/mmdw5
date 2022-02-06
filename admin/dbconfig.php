<?php
   $servername ="localhost"; // ကိုယ်ပိုင်ဆာဗာအထဲတွင်အသုံးပြုမည်ဖြစ်သောကြောင့် localhost ဘဲ သုံးရပါမည်။
   $username = "root"; // default အနေဖြင့် root ဘဲ သုံးရပါမည်။
   $password = ""; // XAMPP အသုံးပြုသူများအတွက် "" ထားခဲ့ပြီး MAMPP သုံးသူများအတွက် home page တွင်ကြည့်ရန်
   $dbname = "dw_hge"; //ကိုယ်အသုံးပြုမည့် database အမည်

   $conn = new mysqli($servername,$username,$password,$dbname);
   //var_dump($conn); 

   if($conn->connect_error){
       die('error'.$conn->connect_error);
   }
?>