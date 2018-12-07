<?php

session_start();

// connect to database
$con = mysqli_connect('localhost', 'root', '', 'pengmas');

// variable declaration
$username = '';
$email = '';
$errors = array();

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
    register();
}

// REGISTER USER
function register()
{
    // call these variables with the global keyword to make them available in function
    global $con, $errors, $username, $email;

    // receive all input values from the form. Call the e() function
    // defined below to escape form values
    $username = e($_POST['username']);
    $email = e($_POST['email']);
    $password_1 = e($_POST['password_1']);
    $password_2 = e($_POST['password_2']);
    $nama = e($_POST['nama']);
    $telepon = e($_POST['telepon']);
    $jk = e($_POST['jk']);
    $alamat = e($_POST['alamat']);
    $angkatan = e($_POST['angkatan']);

    // form validation: ensure that the form is correctly filled
    if ($username == NULL) {
        array_push($errors, 'Username is required');
    }
    if ($email == NULL) {
        array_push($errors, 'Email is required');
    }
    if ($password_1 == NULL) {
        array_push($errors, 'Password is required');
    }
    if ($password_1 != $password_2) {
        array_push($errors, 'The two passwords do not match');
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        //if (isset($_POST['user_type'])) {
        //$user_type = e($_POST['user_type']);
        $query = "INSERT INTO users (username, email,user_type, password, nama, telepon, jk, alamat, angkatan) 
			VALUES('$username', '$email', 'user', '$password', '$nama' ,'$telepon', '$jk' , '$alamat', '$angkatan')";
        mysqli_query($con, $query);
        header('location: login.php');
        // } else {
        //     $query = "INSERT INTO users (username, email, user_type, password, nama, telepon, jk, alamat, angkatan)
        // 	VALUES('$username', '$email', 'user', '$password', '$nama' ,'$telepon', '$jk' , '$alamat', '$angkatan')";
        //     mysqli_query($con, $query);
        //     header('location: login.php');
        // }
    }
}

// return user array from their id
// function getUserById($id){
// 	global $con;
// 	$query = "SELECT * FROM users WHERE id=" . $id;
// 	$result = mysqli_query($con, $query);

// 	$user = mysqli_fetch_assoc($result);
// 	return $user;
// }

// escape string
function e($val)
{
    global $con;

    return mysqli_real_escape_string($con, trim($val));
}

function Display_error()
{
    global $errors;

    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo $error.'<br>';
        }
        echo '</div>';
    }
}

function isLoggedIn()
{
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
    login();
}

// LOGIN USER
function login()
{
    global $con, $username, $errors;

    // grap form values
    $username = e($_POST['username']);
    $password = e($_POST['password']);

    // make sure form is filled properly
    if ($username == NULL) {
        array_push($errors, 'Username is required');
    }
    if ($password == NULL) {
        array_push($errors, 'Password is required');
    }

    // attempt login if no errors on form
    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($con, $query);

        if (mysqli_num_rows($results) == 1) { // user found
            // check if user is admin or user
            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['user_type'] == 'admin') {
                $_SESSION['user'] = $logged_in_user;
                header('location: halo_admin.php');
            } else {
                if ($logged_in_user['user_status'] == 'konfirmed') {
                    $_SESSION['user'] = $logged_in_user;
                    header('location: index.php');
                } else {
                    array_push($errors, 'Akun belun terverifikasi. Mohon menunggu  atau hubungi Admin :085786869894');
                }
            }
        } else {
            array_push($errors, 'salah username/password');
        }
    }
}

function isAdmin()
{
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
        return true;
    } else {
        return false;
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header('location: index.php');
}

// function verifakun($id)
// {
// 	$id = $_GET['$id'];

// 	$sql = "DELETE FROM users WHERE id = $id";
// 	$result = mysqli_query($con, $sql);

// 	if($result){
// 	    header('Location: verifikasi_user.php');

// 	  } else{

// 	     echo "gagal";
// 	  }
// 		mysql_close();
// }
// if (isset($_POST['logout_btn'])) {
// 	session_destroy();
// 	unset($_SESSION['user']);
// 	header("location: index.php");}

    if (isset($_POST['Ubah_profil'])) {
        Ubah_profil();
    }

// REGISTER USER
    function Ubah_profil()
    {
        // call these variables with the global keyword to make them available in function
        global $con, $errors;

        // receive all input values from the form. Call the e() function
        // defined below to escape form values
        $nama = e($_POST['nama']);
        $kelamin = e($_POST['kelamin']);
        $telp = e($_POST['telp']);
        $alamat = e($_POST['alamat']);
        $angkatan = e($_POST['angkatan']);
        $id = $_SESSION['user']['id'];

        // form validation: ensure that the form is correctly filled
        if ($nama == NULL) {
            array_push($errors, 'Nama Dibutuhkan');
        }
        if ($kelamin == NULL) {
            array_push($errors, 'Jenis kelamin Dibutuhkan');
        }
        if ($telp == NULL) {
            array_push($errors, 'Telefon Dibutuhkan');
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $query = "UPDATE users set nama='$nama', jk='$kelamin' ,telepon='$telp' , alamat='$alamat' , angkatan='$angkatan' where id='$id' ";
            mysqli_query($con, $query);
            header('location: profil.php');
        }
    }
