<?php 
// ====================HARSHIL SONI==================================
// WHAT IS AN API ??? 
// An API (Application Programming Interface) is a software-to-software interface that enables two 
// applications to exchange data among each other.

    $users = array('harshil','hardik', 'daniel' , 'lorena' , 'diya');
    $check1 = false;
    $check2 = false;
    if (isset($_POST['button'])){
        foreach($users as $u){
            if(strtolower($_POST['user']) == $u){
                $check1 = true ;
            }
        }
        $array = explode('/',$_POST['url']);
        foreach($array as $a){
            foreach($users as $u){
                if(strtolower($a) == $u){
                    $check2 = true ;
                }
            }
        }
        if( $check1 || $check2){
            echo "success...";
        }
        else{
            echo "failure...";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input{
        padding: 10px;
        font-size: 25px;
    }
</style>
<body>
    <form action="inputvalid.php" method='POST'>
        <input type="text" name='user' placeholder='username' required>
        <input type="text" name='url' placeholder = 'URL' required>
        <input type="submit" name='button' value = 'Verify'> 
    </form>
</body>
</html>
