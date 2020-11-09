<?php
if($_POST){
  $email	 = $_POST['email'];
  $phone	 = $_POST['phone'];
  //$copynr	 = $_POST['copynr'];
  $double	 = $_POST['double'];
  $color 	 = $_POST['color'];
  $link		 = $_POST['link'];
  $comment   = $_POST['comment'];

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "$email /n $phone /n $double /n $color /n $link /n $comment";
  $message = 
  " 
  <html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
  ";
  $subject = "E-tellimine printimine teenus";
  $to="aleksei.rusin@byroomaailm.ee, byroomaailm.teenuse@gmail.com";

  if(mail($to,$subject,$headers)) {
    $response['status'] = 'success';
    $response['msg'] = 'your mail is sent';
  } else {
    $response['status'] = 'error';
    $response['msg'] = 'Something went wrong';
  }

  echo json_encode($response);
}
?>