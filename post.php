<?php
echo "<pre>";
$number = $_POST["number"];
if ($number === ""){
    echo("lütfen boş bırakmayınız");
}
if ($number % 3 === 0){
  echo ("doğru, sayı 3 e tam bölünüyor.");
}else{
    $afterNum = $number;

while($afterNum % 3 !== 0){
    $afterNum++;
}
echo ("$number sayısı 3 ile bölünemiyor. 3 ile bölünecek sayı: $afterNum");
}



?>