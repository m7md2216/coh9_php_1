<?php
session_start();
include './function.php';

$_SESSION['error'] =null;

if($_SERVER['REQUEST_METHOD'] != "POST" && empty($_POST))
die("unauthorised access");

$name = isset($_POST['name']) ? $_POST['name'] : null;
$date = isset($_POST['date']) ? $_POST['date'] : null;
$place = isset($_POST['place']) ? $_POST['place'] : null;
$major = isset($_POST['major']) ? $_POST['major'] : null;
$university = isset($_POST['university']) ? $_POST['university'] : null;
$work = isset($_POST['work']) ? $_POST['work'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$obj = isset($_POST['obj']) ? $_POST['obj'] : null;

if(isset($_POST['submit'])){
    $img_name = $_FILES['img']['name'];
    $tmp_img_name = $_FILES['img']['tmp_name'];
    $folder='./upload/';
    move_uploaded_file($tmp_img_name,$folder.$img_name);

} else {null;}

$error = false;
$error_msg = '';



if(!empty($name) && !empty($date) && !empty($place) && !empty($major) && 
!empty($university) && !empty($work) && !empty($email) && !empty($obj) && !empty($folder.$img_name))
{
    $template = json_decode(file_get_contents('./json_files/template.json'));
    
    $counter = 0 ;
    if ($template == null){$counter =1;} else {$counter = count($template) + 1 ;}
   
   
    $template[] = (object) array(  
        'id'=> $counter,   
        'date' => $date,
        'place' => $place,
        'name' => $name,
        'major' => $major,
        'university' => $university,
        'work' => $work,
        'email' => $email,
        'obj' => $obj,
        'img' => $folder.$img_name
        
    );

   
$json_template = json_encode($template);
file_put_contents('./json_files/template.json', $json_template);
} else {
    $error_msg = "Please fillout all the infromation";
    $error = true;
}

if($error){
    $_SESSION['error'] = $error_msg;
    cv_redirect("./home.php");
} else {
    cv_redirect("./home.php");

}

