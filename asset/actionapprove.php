<!DOCTYPE html>
<html lang="en">
<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update status</title>
</head>
<body>
    <?php 
  if(isset($_POST['add'])) {


            include_once("../Configure/connection.php");
            $id = $_GET['kode_asset'];
           
            $kode_asset       = $_POST['kode_asset'];
            $deskripsi       = $_POST['deskripsi'];
            $outlet_dari       = $_POST['outletdari'];
            $outlet_ke       = $_POST['outletke'];
        
            $query = mysqli_query($db, "update asset set kode_asset = '$kode_asset',deskripsi = '$deskripsi',outlet_dari = '$outlet_dari',outlet_ke = '$outlet_ke' WHERE kode_asset='$id'");
            echo "<script> Swal.fire({
                title: 'Success!',
                text: 'Successfully update asset',
                icon: 'success',
                confirmButtonTex :'Oke!'
            });  
                setTimeout(function(){window.location='../asset/read.php'} , 2000);
        
                </script>";

        }else{

            include_once("../Configure/connection.php");
            $id = $_GET['kode_asset'];

            $query = mysqli_query($db, "update asset set status = 'Butuh Approve OM',tanggal_approve = CURRENT_DATE() WHERE kode_asset='$id'");
            echo "<script> Swal.fire({
                title: 'Success!',
                text: 'Successfully update asset',
                icon: 'success',
                confirmButtonTex :'Oke!'
            });  
                setTimeout(function(){window.location='../asset/read.php'} , 2000);
        
                </script>";
        }
                ?>


</body>
</html>