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
  2) 1-poolne või 2-poolne: $double
  3) Värviline või Must/valge: $color
  4) We-transfer link: $link
  5) Lisa info: $comment";
  $subject = "E-tellimine printimine teenus";
  //$from="E-printimine@byroomaailm.ee";
  $to="aleksei.rusin@byroomaailm.ee, byroomaailm.teenuse@gmail.com, aleksei.rusin@tptlive.ee";

  if(mail($to,$subject,$message,$headers)) {
    $response['status'] = 'success';
    $response['msg'] = 'your mail is sent';
   if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
  } else {
    $response['status'] = 'error';
    $response['msg'] = 'Something went wrong';
  }

  echo json_encode($response);
}
?>