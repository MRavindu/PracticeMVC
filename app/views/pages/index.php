<?php
    foreach ($data['users'] as $user){
        echo "Information: " . $user->user_name . $user->user_emai;
        echo "<br>";
    }
?>