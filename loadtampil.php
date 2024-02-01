<?php 
    // session_start();
    // $query = mysqli_query($konek, "SELECT * from tabeltampil ORDER BY id DESC ");
    // $data = mysqli_fetch_array($query);

    include("koneksi.php");
    $sql = mysqli_query($konek,"SELECT * FROM tabeltampil ORDER BY id DESC limit 1");
    $result = array();
    
    while($row = mysqli_fetch_array($sql)){
        array_push($result, array(
            'huruf' => $row[1],
            'nomor' => $row[2],
            'ruang' => $row[3],
            'tujuan' => $row[4],
        ));
    }
    echo json_encode(array("result" => $result));

?>
