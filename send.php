<?php
if($_POST){
  $email	 = $_POST['email'];
  $phone	 = $_POST['phone'];
  $copy	     = $_POST['copy'];
  $double	 = $_POST['double'];
  $color 	 = $_POST['color'];
  $link		 = $_POST['link'];
  $comment   = $_POST['comment'];

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "Tellija: $email 
  Telefoni number: $phone";
  $message =" Kliendi e-mail: $email
  Kliendi telefon: $phone
  ---------------------------------
  Printimine: 
  1) Koopia kogus: $copy
  2) 1-poolne voi 2-poolne: $double
  3) Varviline voi Must/valge: $color
  4) We-transfer link: $link
  5) Lisa info: $comment";
  $subject = "E-tellimine printimine teenus";
  //$from="E-printimine@byroomaailm.ee";
  $to="aleksei.rusin@byroomaailm.ee, byroomaailm.teenuse@gmail.com, aleksei.rusin@tptlive.ee";

  if(mail($to,$subject,$message,$headers)) {
	 ?>
         <script type="text/javascript">
            alert("Aitäh, teie tellimus on vastu võetud!");
        </script>
        <?php
	echo " 
	<html>
	<head>
	<title>Printimine tellimuse õnnestatud</title>
	</head>	
	<body>
	<style>
	.center
	{
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
	}
	h1
	{
		font-size:20px;
	}
	</style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />

	<div class='container'>
<img src='pic/bm_logo.png' alt='B&uuml;roomaailm logo' class='center' width='auto' height='20%'>
<BR>
<div class='center'>
<h1>Täname tellimuse eest</h1>
</div>
<BR><BR><BR>
<div class='center'>
	<a class='btn btn-primary' href='index.html' role='button'>Esitada uue tellimus</a>
	<a class='btn btn-primary' href='https://www.byroomaailm.ee/' role='button'>Byroomaailm.ee</a>
	</div>
</div>
</body>
</html>";
  } else {
    echo " 
	<html>
	<head>
	<title>Printimine tellimuse õnnestatud</title>
	</head>	
	<body>
	<style>
	.center
	{
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
	}
	h1
	{
		font-size:20px;
	}
	</style>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' />

	<div class='container'>
<img src='pic/bm_logo.png' alt='B&uuml;roomaailm logo' class='center' width='auto' height='20%'>
<BR>
<div class='center'>
<h1>Kahjuks midagi läks valesti, proovige uuesti tellimus esitada</h1>
</div>
<BR><BR><BR>
<div class='center'>
	<a class='btn btn-primary' href='index.html' role='button'>Alustada uuesti tellimus</a>
	<a class='btn btn-primary' href='https://www.byroomaailm.ee/' role='button'>Byroomaailm.ee</a>
	</div>
</div>
</body>
</html>";
  }
}
?>