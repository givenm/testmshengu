<?php

$url = 'http://localhost:8084/mshengu/web/' . $_POST['mapping'];

unset($_POST['mapping']); //remove mapping because its use is no longer needed.
$query_string = http_build_query($_POST);

//open connection
$ch = curl_init($url);

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
curl_setopt($ch, CURLOPT_FORBID_REUSE, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

//for authentication
//curl_setopt($ch, CURLOPT_USERPWD, 'admin:admin');
//curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);


//execute post
$result = curl_exec($ch);

print "<br>error:" . curl_error($ch) . "<br>";
print "output:" . $result . "<br ><br >";
print "field:" . $query_string . "<br ><br >";

//close connection
curl_close($ch);
?>

