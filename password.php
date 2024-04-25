<?php

$hashedPassword = password_hash("password123", PASSWORD_BCRYPT);

// Test if the same result will appear with the same output.
// echo $hashedPassword.'<br>';
// echo password_hash("password123", PASSWORD_BCRYPT).'<br>';
// echo password_hash("password123", PASSWORD_BCRYPT).'<br>';
// echo password_hash("password123", PASSWORD_BCRYPT).'<br>';


// Staff_ID = 1
// echo password_hash("password", PASSWORD_BCRYPT).'<br>';
// // Staff_ID = 3
// echo password_hash("abc12345", PASSWORD_BCRYPT).'<br>';
// // Staff_ID = 4
// echo password_hash("test321", PASSWORD_BCRYPT).'<br>';


if (password_verify("password123", $hashedPassword)){
    echo "password correct !!";
}else{
    echo "password incorrect !!";
};



?>