<?php
$parti_adi = "";
$partiler = array("Ezilen",
"Komünist",
"Sosyalist",
"Halk",
"Türkiye",
"İşçi",
"Kürdistan",
"Troçkist",
"Leninist",
"Emekçi",
"Devrimci",
"Marksist",
"Bağımsız",
"Demokratik",
"İlerici",
"Toplumcu",
"Atılımcı",
"Sol",
"Özgür",
"Kurtuluş");

//echo sizeof($partiler).'<br/>';
//echo rand(0,sizeof($partiler)-2).'<br/>';

for($i=0;$i<=rand(1,2); $i++){
    shuffle($partiler);
    $parti_adi .= array_pop($partiler)." ";
}
$parti_adi .= "Partisi";
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $parti_adi; ?> - Sol Parti Üreteci</title>
</head>
<body>
    <br/>
    <?php echo $parti_adi; ?>
    <br/><br/>
    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a><br/><br/>
    <a href="#" onclick="window.location.reload()">Beğendmedim, Değiştir!</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</body>
</html>
