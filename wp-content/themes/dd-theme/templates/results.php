<?php 
        if(isset($_POST['qurban'])) {
          $answer = $_POST['qurban'];

            if ($answer == "kambing") {          
              header("location: google.com");
              die();
            } else {
              header("location: facebook.com");
            }
        } else {
          echo 'gagal';
        }
      ?>