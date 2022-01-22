<?php
const data=
[
    'email'=>'admin',
    'password'=>1234
];

$nameerr=$emailerr=$passworderr='';

if( isset($_POST['submit']) ):
    if( empty($_POST['name']) ):
        $name="Name is not required";
    else:
        
    endif;
else:
    header('location:index.php');
    endif;
    
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}



?>