<?php 
    include("koneksi.php");
    $sql = mysqli_query($konek,"SELECT * FROM tabeltampil ORDER BY id DESC limit 1");
    $result = array();
    
    while($row = mysqli_fetch_array($sql)){
        array_push($result, array(
            'huruf' => $row[1],
            'nomor' => $row[2],
            'namat' => $row[3],
            'ruang' => $row[4],
            'tujuan' => $row[5],
        ));
    }
    echo json_encode(array("result" => $result));
?>
