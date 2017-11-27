<?
$handle=fopen("text.txt","a+");
$name=$_POST['name'];
$surname=$_POST['surname'];
$yearBirth=$_POST['year'];
$gender=$_POST['gender'];
$login=$_POST['login'];
$passw=$_POST['password'];

$user="name: ".$name."; surname: ".$surname."; year: ".$yearBirth."; gender: ".$gender."; login: ".$login;

fwrite($handle,$user.PHP_EOL);
fclose($handle);

//function read(){
    $handle=fopen("text.txt","r");
    if($handle){
        while(!feof($handle)){
            $user=fgets($handle,100);
            echo $user."<br>";
        }
    }
    else{
        echo "Error...";
    }
    fclose($handle);
//}