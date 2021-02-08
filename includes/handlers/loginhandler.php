<?php
      if(isset ($_POST['loginButton'])) {
        $username = $_POST['loginUsername'];
        $userPassword = $_POST['loginPassword'];
    
        $result = $account->login($username, $userPassword);
        
        if($result == true) {
          $_SESSION['userLoggedIn'] = $username;
          header("Location: index.php");
        }
    
      }
?>