<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>
</head>
<body>

<?php
    include "koneksi.php";
    $reset = mysqli_query($konek, "TRUNCATE table tabelantrian");
    $reset = mysqli_query($konek, "TRUNCATE table tabeltampil");

    if ($reset)
    {
        echo "
        <script>
            Swal.fire({            
                icon: 'success',                   
                title: 'Data berhasil dihapus!',    
                confirmButtonColor: '#39A7FF',
                confirmButtonText: 'Oke',                                                        
                showConfirmButton: true,
            }).then(result => {
                if(result.isConfirmed){
                    window.location.href = 'index.php'
                }
            })
        </script>
        ";
        // echo "<script>window.location='index.php'</script>";
    }
?>

</body>
</html>