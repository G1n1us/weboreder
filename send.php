<?php
/*
if(mail("lait@mail.ru", "My Subject", "Line 1\nLine 2\nLine 3")) echo "message send";
else echo "message not send";

if (isset($_POST["send"])) 
{	
	$to = "teenused.peter@byroomaailm.ee";
	$subject = "Printimine tellimus";
	$charset = "utf-8";
	$headerss ="Content-type: text/html; charset=$charset\r\n";
	$headerss.="MIME-Version: 1.0\r\n";
	$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
	$msg = "E-mail: ".$_POST["email"]."\n";$msg .= "Tel.number: ".$_POST["phone"]."\n";

	mail($to, $subject, $msg, $headerss);
	print "<script>alert(\"Сообщение успешно отправлено!\");window.location = window.location.href</script>";
}*/
?>


<?php
if($_POST){
  $email = $_POST['email'];
  $name = $_POST['phone'];
  $object = $_POST['copy'];
  $message = $_POST['double'];

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP";

  $subject="$objet";
  $destinataire="teenused.peter@byroomaailm.ee";
  $body="$message";

  if(mail($destinataire,$subject,$body,$headers)) {
    $response['status'] = 'success';
    $response['msg'] = 'your mail is sent';
  } else {
    $response['status'] = 'error';
    $response['msg'] = 'Something went wrong';
  }

  echo json_encode($response);
}
?>