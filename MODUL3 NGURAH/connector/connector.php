<?php
$connector = new mysqli("localhost", "", "", "modul3");

if (!$connector) {
  die("Koneksi Gagal: " . $connector->connect_error);
}