<?php 

// daftar nilai 

$nilai = "95";

if ( $nilai > 89) {
    $grade = "sangat baik";
} elseif ( $nilai > 79) {
    $grade = "baik";
} elseif ( $nilai > 69) {
    $grade = "cukup";
} elseif ( $nilai > 49) {
    $grade = "kurang";
} else {
    $grade = "sangat kurang";
}

echo ( "nilai mtk anda ".$nilai. " mendapat predikat ".$grade);

?>