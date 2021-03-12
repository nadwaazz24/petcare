  <?php session_start();
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


                  header("Location:berhasil.php");

                }elseif ($data['sebagai'] == '2') {
                 $_SESSION ['username'] = $username;
                 $_SESSION["id"]=$data["id"];
                 $_SESSION["sebagai"]='2';
                 $_SESSION["nama"]=$data["nama"];

                 header("Location:login.php");
               } else{
                echo "Username atau password salah <br><a href='login.php'></a>";
              }
            }else{
              header("location:login.php?pesan=gagal");
            }
          }

            // else{
            //   header("location:homelogin.php?pesan=gagal");
            // }


          ?>

