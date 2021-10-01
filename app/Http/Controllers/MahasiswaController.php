<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class MahasiswaController extends Controller
{
    public function index(){
        $nama = "Tangido Halomoan Sinaga";
        $ttl = "Cianjur, 2 Februari 1998";
        $goldar = "AB";
        $nik = "123123123123456";
        $pekerjaan = "Mahasiswa";
        $statusvaksin = "Sudah Vaksin Kedua";
        $pelajaran = ['Pabwe', 'Tugas Akhir 1', 'Tugas Akhir 2'];

        return view('biodata', ['nama' => $nama , 'ttl' => $ttl , 'goldar' => $goldar , 'nik' => $nik , 'pekerjaan' => $pekerjaan , 'statusvaksin' => $statusvaksin , 'matkul' => $pelajaran]);
    }
}