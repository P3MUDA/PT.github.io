<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>UPLOAD IMAGE EVENT</title>
          <!--<style>
                    *, html{
                              margin: 0;
                              padding: 0;
                    }

                    .container{
                              width: 100%;
                              height: 100vh;
                              background-color: black;
                              display: flex;
                              flex-direction: column;
                              align-items: center;
                              justify-content: center;
                              gap: 50px;
                    }
                    .box{
                              padding: 20px;
                              background-color: grey;
                              display: flex;
                              flex-direction: column;
                              align-items: center;
                              justify-content: center;
                              gap: 50px;
                              border-radius: 20px;
                    }
                    form{
                              display: flex;
                              flex-direction: column;
                              align-items: center;
                              justify-content: center;
                              gap: 10px;
                    }
                    form input{
                              width: 200px;
                              padding: 5px;
                              border-radius: 10px;
                    }
                    form b{
                              font-size: 20px;
                    }
                    form button{
                              width: 150px;
                              padding: 5px;
                              border: none;
                              border-radius: 5px;
                              color: white;
                              background-color: black;
                              transition: all .3s;
                    }
                    form button:hover{
                              padding: 10px;
                              width: 200px;
                              font-size: 15px;

                    }
                    
          </style>-->
</head>
<body>
          <div class="container">
                    <div class="box">
                              <h1>upload image for event nomadic</h1>
                              <form method="POST" action="" enctype="multipart/form-data">

                                        <label for="gambar"></label>
                                        <b>pilih gambar</b>
                                        <input type="file" name="gambar">

                                        <input type="submit" name="proses" value="upload">
                              </form>

                              <?php
                                        /*$koneksi = mysqli_connect("localhost", "root", "", "db_gambar");

                                        if (mysqli_connect_errno()) {
                                                  echo "gagal koneksi";
                                        }else {
                                        }*/
                                        if (isset($_POST['proses'])) {

                                                  $direktori = "berkas/";

                                                  $file = $_FILES['gambar']['name'];
                                                  $tmp_name = $_FILES['gambar']['tmp_name'];

                                                  move_uploaded_file ($tmp_name, "berkas/" .$file);

                                                  /*mysqli_query($koneksi, "insert into gambar set gambar ='$file_name'");

                                                  echo $file_name;*/
                                        
                              ?>
                              <img src="berkas/<?php $file ?>" alt="">

                              <?php } ?>
</body>
</html> 