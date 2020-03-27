<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php 
    $umur = 10;
    $nama = "aleq";

    print "nama saya $nama, umur saya $umur";

    ?>
    <br>
    <?php 
    if($umur < 18){
        echo "Umur belum cukup";
    }else if($umur < 30){
        echo "Anda belum lahir";
    }else{
        echo "Silahkan Masuk Mas";
    }

    ?>
    </h1>

    <h1><?php
        for($x=1;$x<=10;$x++){
            echo $x;
            //membuat perulangan yang menampilkan angka satu sampai sepuluh sesuai dengan aturan yang sudah di buat pada kondisi di atas.
        }
    ?></h1>

    <h1> 
    <?php
      function perkenalan ($umur, $nama , $alamat){
      echo "nama saya $nama <br>";
    
      echo "umur saya $umur tahun<br>";

      print "rumah saya ada di $alamat";
      }
      perkenalan("18", "Antok" , "UES");

?>
    
    </h1>


      <?php
        class rumah{
            var $alamat;
            var $luas;

            function tampil_alamat($alamat){
                echo "alamat nya di $alamat <br>";
            }
            function tampil_luas($luas){
                echo "luasnya $luas hektar";
            }


        }
        $data_tinggal = new rumah();

        echo $data_tinggal->tampil_alamat("malang");
        echo $data_tinggal->tampil_luas("25");
      ?>
    </h1>

    
</body>
</html>