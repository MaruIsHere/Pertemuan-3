<?php


function tampil($data){
    $username = $data['username'];
    $password1 = $data['password1'];
    $password2 = $data['password2'];

    if($password1 != $password2){

        echo "<script>alert('Password Tidak Sama')</script>";
        return false;
        
    }else{
        echo "Username anda adalah:",$username; 
        echo"<br/>";
        echo " Password anda adalah:",$password1;
        echo"<br/>";
        echo " Konfirmasi Password adalah:",$password2;
    }

    

}