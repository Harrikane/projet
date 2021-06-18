<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$guest = ['name' => 'cedric', 'mdp' => '1234'];
$admin = ['name' => 'modo', 'mdp' => '123', 'role' => 'admin']; //  $admin
$users = [$guest, $admin];

foreach($users as $user) {
    if($_POST['kakaroto'] == $user['name'] && $_POST['pwdKakaroto'] == $user['mdp'] ){
        $_SESSION['pseudo'] = $_POST['kakaroto'];
        
            if (isset($user['role']) && $user['role']=== 'admin' ){  
                $_SESSION['isadmin'] = true;
            }
            
            header('Location: /');
        exit();
    }   
}
header('Location: /connection.php');
exit();

// foreach($users as $user){
//     if($_POST['kakaroto'] != $user['name'] || $_POST['pwdKakaroto'] != $user['mdp' || $_POST['kakaroto'] != $admin['name'] ||$_POST['pwdKakaroto'] != $admin['mdp']){
//         header('Location: /connection.php');
//         exit();
//     }
// ?> <br> <?php
// }