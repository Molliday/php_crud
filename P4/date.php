<?php 
   // Date / Time
   // -time();
   // -date();
   // -mktime();
   // -strtotime();

//    Date, Untuk menampilkan tanggal dengan format tertentu
//    echo date("l, d-M-Y");

//    Time
//    UNIX Timestamp / EPOCH time
//    detik yang sudah berlalu sejak 1 Januari 1970
   // echo time();
   // echo date ("l", time()-60*60*24*100);
// mktime. membuat sendiri detik. formatnya, mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,1,8,1999));

// strtotime
echo date("l", strtotime("25 aug 1985"));

// String
// -strlen();
// -strcmp();
// -explode();
// -htmlspecialchars();

// Utility
// -var_dump();
// -isset();
// -empty();
// -die();
// -sleep();


?>