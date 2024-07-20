<?php 
include_once('conn.php');
include_once('function.php');

function sanitize_input($data){

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// ...
if($_SERVER['REQUEST_METHOD'] === 'GET'){

        $name = sanitize_input($_GET['myname'] ?? '');
        $email = sanitize_input($_GET['myemail'] ?? '');
        $passowrd = sanitize_input($_GET['mypassword'] ?? '');
        $cpassword = sanitize_input($_GET['mycpassowrd'] ?? '');

        $errors = [
            'name' => '',
            'email' => '',
            'password' => '',
            'cpassword' => '',
        ];

    if(empty($name)){
        $errors['name'] = "Error: Name is required";
    }elseif(strlen($name) > 10 ){
        $errors['name'] = "Error: Name length more than 10 Charcters";
    }       

    if(empty($email)){
        $errors['email'] = "Error: Email is required";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $errors['email'] = "Error:  invalid email format";
    }

    if(empty($passowrd)){
        $errors['password'] = "Error: Password is required";
    }elseif(strlen($passowrd) < 6 ){
        $errors['password'] = "Error: Password must be  at least  6 Charcters";
    }  


    if(empty($cpassword)){
        $errors['cpassword'] = "Error: cpassword is required";
    }elseif($cpassword !== $passowrd){
        $errors['cpassword'] = "Error: password do not match";
    }
    
    if(!empty(array_filter($errors))){
            $mesg = http_build_query($errors);
            header('location:index.php?'.$mesg);
            exit;
    //     echo "<pre>";
    // print_r($errors);
    // echo "</pre>";

        // header('location:index.php?mesg='.json_encode($errors));
    }else{
        createRecord('user',[
            'u_name' => $name,
            'u_email' => $email,
            'u_pass'=> $passowrd,
        ],'index.php');

        // header('location:index.php?mesg=');


    //     $conn = getDBConnection();

    //     $sql = "INSERT INTO `user`(`u_name`, `u_email`, `u_pass`) VALUES ('$name','$email','$passowrd')";

    //    $query =  mysqli_query($conn,$sql);
    //     if($query){
    //         echo "data inserted";
    //     }else{
    //         echo "Error";
    //     }


        // echo "Welcome ".$name;
    }
}




// $name = $_GET['myname'];

// $namelength = strlen($name);

// if($namelength > 10  ){
//     $mesg ="Error length more then 10 chr";
//     header('location:index.php?mesg='.$mesg);
// }else{
//  echo "Welcome ".$name;
// }

?>
