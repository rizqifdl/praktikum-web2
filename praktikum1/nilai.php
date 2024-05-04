<?php
$nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
$nilai2 = ["id" => 2, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
$nilai3 = ["id" => 3, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
$nilai4 = ["id" => 4, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];

$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

echo $kumpulan_nilai[0]["nim"];
?>