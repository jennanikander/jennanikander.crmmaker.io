<?php 

/*echo $_POST["supplier1"];
echo $_POST["supplier2"];
echo $_POST["supplier3"];
echo $_POST["supplier4"];
echo $_POST["supplier5"];
echo $_POST["supplier6"];*/

if ($_POST["supplier1"] == true && isset($_POST["name"])){ 
// the message
if(isset($_POST["message"]) && !empty($_POST["message"])){
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä viestillä: \n\n\"".$_POST["message"]."\"\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";
}
else{
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä.\n\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = "From: contact@crmratkaisu.fi";

// send email
mail("info@fenixsolutions.fi","Yhteydenottopyyntö crmratkaisu.fistä",$msg,$headers); //fenix
}

if ($_POST["supplier2"] == true && isset($_POST["name"])){
	// the message
if(isset($_POST["message"]) && !empty($_POST["message"])){
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä viestillä: \n\n\"".$_POST["message"]."\"\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";
}
else{
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä.\n\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = "From: contact@crmratkaisu.fi";

// send email
mail("myynti@innofactor.fi","Yhteydenottopyyntö crmratkaisu.fistä",$msg,$headers); // innofactor
}
if ($_POST["supplier3"] == true && isset($_POST["name"])){
	// the message
if(isset($_POST["message"]) && !empty($_POST["message"])){
$msg = $_POST["name"]." on jättänyt ecraftille yhteydenottopyynnön crmratkaisu.fi:ssä viestillä: \n\n\"".$_POST["message"]."\"\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}
else{
$msg = $_POST["name"]." on jättänyt ecraftille yhteydenottopyynnön crmratkaisu.fi:ssä.\n\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = "From: contact@crmratkaisu.fi";

// send email
mail("info@ecraft.com","Yhteydenottopyyntö crmratkaisu.fistä",$msg,$headers); //ecraft
}
if ($_POST["supplier4"]== true && isset($_POST["name"])){
	// the message
if(isset($_POST["message"]) && !empty($_POST["message"])){
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä viestillä: \n\n\"".$_POST["message"]."\"\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}
else{
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä.\n\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = "From: contact@crmratkaisu.fi";

// send email
mail("myynti@cloudriven.fi","Yhteydenottopyyntö crmratkaisu.fistä",$msg,$headers); //cloudriven
}
if ($_POST["supplier5"]== true && isset($_POST["name"])){
	// the message
if(isset($_POST["message"]) && !empty($_POST["message"])){
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä viestillä: \n\n\"".$_POST["message"]."\"\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}
else{
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä.\n\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = "From: contact@crmratkaisu.fi";

// send email
mail("myynti@digitalillustrated.com","Yhteydenottopyyntö crmratkaisu.fistä",$msg,$headers); //digital illustrated
}
if ($_POST["supplier6"]== true && isset($_POST["name"])){

// the message
if(isset($_POST["message"]) && !empty($_POST["message"])){
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä viestillä: \n\n\"".$_POST["message"]."\"\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}
else{
$msg = $_POST["name"]." on jättänyt teille yhteydenottopyynnön crmratkaisu.fi:ssä.\n\n
Tiedot:\nPuhelinnumero: ".$_POST["puh"]."\nSähköpostiosoite: ".$_POST["email"]."\n\nTerveisin,\ncrmratkaisu.fi";//," on lähettänyt yhteydenottooyynnön.\nPuhelinnumero: ",$_POST["puh"],".\nSähköpostiosoite: ",$_POST["email"];
}
// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);
$headers = "From: contact@crmratkaisu.fi";

// send email
mail("sales@meteoriitti.com","Yhteydenottopyyntö crmratkaisu.fistä",$msg,$headers); //sininen meteoriitti
}
?>

<!DOCTYPE HTML>

<!--
	Typify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
    
    

<html>
<head>
<title>Viestisi on lähetetty</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css"/>
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
<body>
    <section id="one" class="wrapper special">
        <div class="inner">

            <p id="content">
                Kiitos! Viestisi on lähetetty.
            </p>
			<p>
			<a href="https://www.crmratkaisu.fi/"><-- Takaisin</a>
			
			</p>

            <!--<div class="features">
						<div class="feature">
							<i class="fa fa-diamond"></i>
							<h3>Etiam consequat</h3>
							<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
						<div class="feature">
							<i class="fa fa-copy"></i>
							<h3>Sed adipiscing</h3>
							<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
						<div class="feature">
							<i class="fa fa-paper-plane-o"></i>
							<h3>Feugiat nullam</h3>
							<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
						<div class="feature">
							<i class="fa fa-save"></i>
							<h3>Amet imperdiet</h3>
							<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
						<div class="feature">
							<i class="fa fa-envelope-o"></i>
							<h3>Tempus lorem</h3>
							<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
						</div>
					</div>--></div>
					</section>
					</body>
					</html>
					