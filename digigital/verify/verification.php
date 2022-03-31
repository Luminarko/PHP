<?php
include '../sign/dat/dbh.php';

#verify--------------------
$key = null;
$hash = null;

$extract = explode('###', file_get_contents('../sign/dat/data.txt')); # Otveření souboru a rozdělění dat
$extId = $extract[1]; # ID extrahované ze souboru
$extEnhash = $extract[2]; # zašifrovaný hash textu extrahovaný ze souboru


$sql = "SELECT idcertificate, md5_key, hash_value FROM certif WHERE idcertificate =('$extId')"; # SQL příkaz pro získání všech potřebných dat
$result = mysqli_query($connect, $sql); # Připojení k DB


while($row = mysqli_fetch_assoc($result)){
    $key = $row["md5_key"];
    $hash = $row["hash_value"];
};
if($key != null or $hash != null){
    if(openssl_decrypt($extEnhash, 'blowfish', $key, $options = 0) == $hash){
        echo "<p>Soubor nebyl změněn.</p>";
   }else{
       echo "<p>Soubor byl pozměněn.</p>";
   }; 
}else{
    echo "<p>Certifikát není v DB.</p>";
}
?>