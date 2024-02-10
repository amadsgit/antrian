<?php
    error_reporting('0');
    include "koneksi.php";
    if($nomor==10) {
        $sepuluh;
    } else if ($nomor==11) {
        $sebelas;
    } else if ($nomor==100) {
        $seratus;
    } else {
        $jumlah=strlen($nomor);
            if($jumlah==1) {
                $nomor=$nomor;
            } else if($jumlah==2) {
                $nomora=substr($nomor, 0, 1);
                $nomorb=substr($nomor, 1, 1);
            } else if($jumlah==3) {
                $nomorc=substr($nomor, 0, 1);
                $nomord=substr($nomor, 1, 1);
                $nomore=substr($nomor, 2, 1);
            }
    } 
?>

<div id="audioplay">
    <audio id="audio1" src="audio/bell.mp3" type="audio/mpeg" preload="auto"></audio>
    <audio id="audio2" src="audio/nomorantrian.mp3" type="audio/mpeg" preload="auto"></audio>

    <audio id='audio3' src='audio/<?php print"$_SESSION[huruf].mp3";?>' type='audio/mpeg' preload='auto'></audio>

    <?php
    if($jumlah==1) {
        print"<audio id='audio4' src='audio/$nomor.mp3' type='audio/mpeg' preload='auto'></audio>";
    } 
    else if($nomor==10) {
        print"<audio id='audio4' src='audio/10.mp3' type='audio/mpeg' preload='auto'></audio>";
    } 
    else if($nomor==11) {
        print"<audio id='audio4' src='audio/11.mp3' type='audio/mpeg' preload='auto'></audio>";
    } 
    else if($nomor==100) {
        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
    } 
    else if($jumlah==2 and $nomor < 20)  {
        print"<audio id='audio4' src='audio/$nomorb.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio5' src='audio/belas.mp3' type='audio/mpeg' preload='auto'></audio>";
    } 
    else if($jumlah==2 and $nomor > 19) {
        print"<audio id='audio4' src='audio/$nomora.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio5' src='audio/puluh.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio6' src='audio/$nomorb.mp3' type='audio/mpeg' preload='auto'></audio>";
    }
    else if($jumlah==3 and $nomor < 110) {
        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio5' src='audio/$nomore.mp3' type='audio/mpeg' preload='auto'></audio>";
    }
    else if($jumlah==3 and $nomor == 110) {
        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio5' src='audio/10.mp3' type='audio/mpeg' preload='auto'></audio>";
    }
    else if($jumlah==3 and $nomor == 111) {
        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio5' src='audio/11.mp3' type='audio/mpeg' preload='auto'></audio>";
    }
    else if($jumlah==3 and $nomor < 120) {
        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio5' src='audio/$nomore.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio6' src='audio/belas.mp3' type='audio/mpeg' preload='auto'></audio>";
    }
    else if($jumlah==3 and $nomor > 119) {
        print"<audio id='audio4' src='audio/seratus.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio5' src='audio/$nomord.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio6' src='audio/puluh.mp3' type='audio/mpeg' preload='auto'></audio>";
        print"<audio id='audio7' src='audio/$nomore.mp3' type='audio/mpeg' preload='auto'></audio>";
    }

    ?>

    <audio id="audio8" src="audio/<?php print"$_SESSION[panggil].mp3";?>" type="audio/mpeg" preload="auto"></audio>
    <audio id='audio9' src='audio/<?php print"$_SESSION[ruang].mp3";?>' type='audio/mpeg' preload='auto'></audio>
</div>

<!-- function panggil pasien -->
<script type="text/javascript"> 
    $(document).ready(function(){
        $("#call").click(function(){
            var val_huruf = $('#val_huruf').val()
            var val_nomor = $('#val_nomor').val()
            var val_ruang = $('#val_ruang').val()
            var val_tujuan = $('#val_tujuan').val()
            var val_nama = $('#val_nama').val()
            $.ajax({
                url:'displayinput.php',
                method:'GET',
                data:{
                    val_huruf:val_huruf,
                    val_nomor:val_nomor,
                    val_ruang:val_ruang,
                    val_tujuan:val_tujuan,
                    val_nama:val_nama,
                } 
            });
        
            var audio1 = document.getElementById('audio1');
            var audio2 = document.getElementById('audio2');
            var audio3 = document.getElementById('audio3');
            var audio4 = document.getElementById('audio4');
            var audio5 = document.getElementById('audio5');
            var audio6 = document.getElementById('audio6');
            var audio7 = document.getElementById('audio7');
            var audio8 = document.getElementById('audio8');
            var audio9 = document.getElementById('audio9');

            setTimeout(function() {document.getElementById('call').disabled = true}, 1000 );
            setTimeout(function() {document.getElementById('next').disabled = true}, 1000 );
            audio1.play();
            setTimeout(function() { audio2.play() }, 6000);
            setTimeout(function() { audio3.play() }, 8000);
            setTimeout(function() { audio4.play() }, 9000);
            setTimeout(function() { audio5.play() }, 10000);
            setTimeout(function() { audio6.play() }, 11000);
            setTimeout(function() { audio7.play() }, 12000);
            setTimeout(function() { audio8.play() }, 13000);
            setTimeout(function() { audio9.play() }, 14000);
            setTimeout(function() {document.getElementById('call').disabled = false}, 16000 );
            setTimeout(function() {document.getElementById('next').disabled = false}, 16000 );

        });
    });

</script>

