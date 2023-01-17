<?php 

//if else harga motor


$merk_motor = "Yamaha mio 2019";

if ( $merk_motor == "Yamaha mio 2019" ) {
    $harga = "16.000.000";
} else if ( $merk_motor == "Yamaha Jupiter MX 2014" ) {
    $harga = "11.000.000";
} else if ( $merk_motor == "Honda Vario 125cc 2020" ) {
    $harga = "18.000.000";
} else if ( $merk_motor == "Honda Supra 125 2015" ) {
    $harga = "10.000.000";
} else if ( $merk_motor == "Honda PCX 150cc 2018 " ) {
    $harga = "23.000.000";
} else {
    $harga = "kosong";
}

echo ( "harga motor ".$merk_motor."  adalah  ".$harga);

echo $merk_motor;
?>