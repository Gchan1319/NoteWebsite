<?php
$judulnya = $_POST['judulNote'];
$isinya = $_POST['isinote'];
$urlGambar = $_POST['urlGambar'];
$stringDate = date("D, d M Y h:i:s");
if($urlGambar==null){
    $urlGambar="hero.jpeg";
}
$data = ',{"title":"'.$judulnya.'","LastUpdate":"'.$stringDate.'","hero":"'.$urlGambar.'","isi":"'.$isinya.'"}]';
$tempArray = json_encode($data);
$before = file_get_contents("database.json");
$res = str_replace("]","",$before);
$f1 = fopen("database.json","w");
fwrite($f1,$res);
fclose($f1);
$f = fopen("database.json",'a');
fwrite($f,$data);
fclose($f);

echo "
<!DOCTYPE HTML>
<html lang='en-US'><head>
        <meta charset='UTF-8'>
        <meta http-equiv='refresh' content='0; url=../'>
        <script type='text/javascript'>
        setTimeout(function(){
          window.location.href='../'
        },1000)
        </script>
        <title>Page Redirection</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow this <a href='../'>link to example</a>.
    </body>
</html>"
?>