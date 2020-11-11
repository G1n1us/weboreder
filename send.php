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
  $to="aleksei.rusin@tptlive.ee, aleksei.rusin.pv.11@gmail.com";

  if(mail($to,$subject,$message,$headers)) {
	 $response['status'] = 'success';
	 ?>
         <script type="text/javascript">
            alert("Aitäh, teie tellimus on vastu võetud!");
        </script>
        <?php
		header ('Location: thankyou.html');  
		exit();    
  } else {
      $response['status'] = 'error';
	  ?>
	   <script type="text/javascript">
            alert("Kahjuks midagi läks valesti, provige uuesti!");
        </script>
		<?php
		header ('Location: bad.html');  
		exit();  
  }
}
?>