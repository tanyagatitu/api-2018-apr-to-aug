
<?php
$bbit3c="Chirakahula,Mukwana Joe.0500387482.UGANDA.+256|
 Wambua,Doe Mumbua.080023450.KENYA.+254|
 Vonbora,Katherina Luther.0600990033.GERMANY.+32
 |Boromir,Grommit Wallace.0100873901.IRELAND.+98
 |Piepont,Edwards Jonathan.0200983729.AMERICA.+1
 |Asaph,Elihu Mose.02990033.ISRAEL.+2
 |Otoyo,Wafula Joel.0777799920.KENYA.+254
 |Mapete,Mwambingu Simba.0987483292.TANZANIA.+257
 |SARATON,DAVID BREINARD.043899292.AMERICA.+1
 |POMPI,JOHN OWEN.074749292.ZAMBIA.+267
 |MAG,JOHN BUNYAN.09837328.UGANDA.+256
 |Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32
";

$bt3c = str_replace("|",".",$bbit3c);
$bit3c= explode(".",$bt3c);
 $b=array_chunk($bit3c,4);

 echo "<ol>";
 $phone;
 $country;
 foreach ($b as $a) {
   // code...
   echo "<li>";
   foreach ($a as $key=>$value) {
     // code...

     if ($key==0) {
       // code...
       $st=explode(",",$value);
       $stq=explode(" ",$st[1]);
       $st1=substr_replace($value,", ".substr($value,0,strpos($value,',')),-1);

       $st1=$stq[1]." ".$stq[0].", ".$st[0];
       $value=$st1;
echo "{$value} ";
     }
     if ($key==3) {
       // code...

       $value="(#".$value." " . $phone. " [".$country."])";
echo "{$value} ";
     }
     if ($key==1) {

       // code...
       global $phone;
       $phone = $value;
       $phone=substr_replace($value,"(0)".substr($value,1),0);

// echo "{$value}";
     }
     if ($key==2) {
       // code...
       global $country;
       $country = $value;


     }

   }
   echo "</li>";
 }
 echo "</ol>";
 echo "Summary: <p> total names: ";
 echo "total unique countries ";
 ?>







 ?>
</body>
</html>
