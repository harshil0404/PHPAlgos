<?php
    if(isset($_POST['user'])){
        $s = '6Lere-EZAAAAACnRoAxLewkCi7INexl_KAoPNqex';
        $tkn = $_POST['g-recaptcha-response'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$s&response=$tkn&remoteip=$ip";
        $req = file_get_contents($url);
        $response = json_decode($req);
        if($response->score > 0.8){
            echo "VALIDATION SUCCESSFUL...";
        }
        else{
            echo "\n VALIDATION NOT-SUCCESSFUL...";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js?render=6Lere-EZAAAAADTkJgxtE_-gE0bHLLh_vn-al274"></script>
    <title>Document</title>
</head>

<script>
   function onSubmit(token) {
     document.getElementById("harshil").submit();
   }
 </script>
 
<style>
    input{
        padding: 10px;
        font-size: 25px;
    }
</style>
<body>
    <form id='harshil' method='POST' action='APIRobot.php'>
        <input type="text" name='user' placeholder='username' required>
        <input type="hidden" id='tkn' name='token'>
        <button name='yes' class="g-recaptcha" 
        data-sitekey="6Lere-EZAAAAADTkJgxtE_-gE0bHLLh_vn-al274" 
        data-callback='onSubmit' 
        data-action='submit'>Verify by API</button>
    </form>
</body>
<script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lere-EZAAAAADTkJgxtE_-gE0bHLLh_vn-al274', {action: 'homepage'}).then(function(token) {
            console.log(token);
            document.getElementById('tkn').value = $_POST['g-recaptcha'] ;
          });
        });
      }
  </script>
</html>