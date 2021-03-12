<?php session_start();?>

<?

error_reporting(0);

ob_start();

include 'koneksi.php'; ?>
<!DOCTYPE html>

<html class="no-js " lang="en">
<head>
<TITLE>Login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
  rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
  rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
  <div class="phppot-container">
    <div class="sign-up-container">
      <div class="login-signup">
        <a href="user-registration.php">Sign up</a>
      </div>
      <div class="signup-align">
        <form name="login" action="" method="post">
          <div class="signup-heading">Login</div>
        <div class="row">
            <div class="inline-block">
              <div class="form-label">
                Username<span class="required error" id="username"></span>
              </div>
              <input class="input-box-330" type="text" name="username"
                id="username">
            </div>
          </div>
          <div class="row">
            <div class="inline-block">
              <div class="form-label">
                Password<span class="required error" id="password"></span>
              </div>
              <input class="input-box-330" type="password"
                name="password" id="password">
            </div>
          </div>
          <div class="row">
            <input class="btn" type="submit" name="masuk" value="simpan">
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
</body>

<?php 
if(!isset($_SESSION)){
session_start();

            if(isset($_POST['masuk'])){
              include 'koneksi.php';
              $username = $_POST['username'];
              $password = md5($_POST['password']);
              $ambil = mysqli_query($koneksi,"SELECT * FROM login WHERE username = '$username' AND password = '$password'");
              $cocok =mysqli_num_rows($ambil);

              if($cocok > 0){
                $data =mysqli_fetch_assoc($ambil);
                if($data['sebagai'] == '1'){
                  $_SESSION ['username'] = $username;
                  $_SESSION["id"]=$data["id"];
                  $_SESSION["sebagai"]='1';
                  $_SESSION["nama"]=$data["nama"];


                  header("Location:adminnpet/index.php");

                }elseif ($data['sebagai'] == '2') {
                 $_SESSION ['username'] = $username;
                 $_SESSION["email"]=$data["email"];
                 $_SESSION["sebagai"]='2';
                 $_SESSION["nama_lengkap"]=$data["nama_lengkap"];

                 header("Location:index_user.php");
               } else{
                echo "Username atau password salah <br><a href='login.php'></a>";
              }
            }else{
              header("location:login.php?pesan=gagal");
            }
          }

}
            // else{
            //   header("location:homelogin.php?pesan=gagal");
            // }


          ?>
         
</html>