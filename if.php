<?php
// $kalimat = "belajar ngoding";
// $sub_kalimat = substr($kalimat, -5, -2);
// echo $sub_kalimat;
//
//
// =====================elseif==========================
// $nilai = 30;
//
// if($nilai >= 80){
//   echo "dapat prestasi A";
// }
// elseif($nilai >= 70){
//   echo "dapat prestasi B";
// }
// elseif($nilai >= 50){
//   echo "dapat prestasi C";
// }
// elseif($nilai >= 40){
//   echo "dapat prestasi D";
// }
// elseif($nilai < 40){
//   echo "dapat prestasi D";
// }

// ======================ifbersaran=============

// $nilai = 80;
// $wawancara = 'C';
//
// if($nilai >= 70){
//   echo "anda lulus";
//
//   if ($wawancara == 'A') {
//   echo "nilai anda sangat memuaskan";
//   }
//   if ($wawancara == 'B') {
//   echo "nilai anda memuaskan";
//   }
//   if ($wawancara == 'C') {
//   echo "nilai anda cukup";
//
//   }
// }
// else {
//   echo "anda belum lulus";
// }

// ========================switch================

// berguna hanya untuk sama dengan saja kalau selain sama dengan pakai if saja

// $nilai = 'J';
//
// switch ($nilai) {
//   case 'A':
//     echo "nilai anda sangat memuaskan";
//       break;
//   case 'B':
//     echo "nilai anda memuaskan";
//       break;
//   case 'C':
//     echo "nilai anda cukup";
//       break;
//   case 'D':
//     echo "nilai anda kurang";
//       break;
//     default:
//       echo "anda tidak lulus";
//     break;
// }
//


// =========================pengecekan ganda=========================
// && = kudu true kabeh
// || = salah siji tok seng true

// $warna = 'biru';
// $ukuran = 'L';
//
// $harga = '50000';
// $harga_tambahan = '15000';
//
// if($warna == 'biru' || $ukuran == 'L'){
//   echo "total pembayaran: " .($harga+$harga_tambahan);
// }
// else{
//   echo "total pembayaran: " .$harga;
// }


// ===================pengecekan sederhana ternary operator=============

// $nilai = '90';
// echo ($nilai >= 80) ? "anda lulus" : "anda tidak lulus";


// =======perulangan for===============================================

// $warna = ["kuning", "merah","kuning", "biru", "kuning", "merah","kuning", "biru"];
//
// $jumlah_warna = 0 ;
//
// for ($i=0; $i < 8; $i++) {
//   if ($warna[$i] == 'kuning'){
//       $jumlah_warna++;
//   }
// }
//
// echo "totalnya adalah: $jumlah_warna";

?>
