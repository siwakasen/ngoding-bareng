<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('adminPage/dashboardAdmin');
});

Route::get('/dashboard', function () {
    return view('userPage/dashboardUser');
});
Route::get('/courses', function () {
    return view('userPage/courses/coursePage');
});
Route::get('/articles', function () {
    return view('userPage/articles/articlePage');
});
Route::get('/profile', function () {
    return view('userPage/profilePage');
});
Route::get('/login', function () {
    return view('guestPage/loginPage');
});

Route::get('/contentArticle', function () {
    return view('userPage/articles/contentArticle',[
        'newsletter1'=>[
            [
            'gambar' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64e46f1da8d1070a8c1f0283_thumbnail-fox%20quco-01-p-500.jpg',
            'gambar2' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64e3b3ba9cfc2ea4c1144d3a_gif1-fox-quco%20(1)%20(1)-min.gif',
            'judul' => '🖥️ Komputer Kuantum Bukan Seperti yang Kalian Kira (Dan Bisa Bahaya)',
            'isi' => 'Kalau denger kata “komputer kuantum”, apa sih yang muncul di pikiran kalian? Apa mungkin langsung kebayang komputer yang bisa bikin manusia mengecil, terus bisa jalan-jalan lintas waktu? 👀',
            'isi2' => ' Gak cuma di dunia fiksi, komputer kuantum sebenernya udah ada di dunia nyata. Perusahaan-perusahaan teknologi besar kayak Google, IBM, dan bahkan negara-negara besar kayak 🇨🇳 Tiongkok dan 🇺🇸 Amerika sekarang lagi berlomba-lomba untuk ngebangun komputer kuantum! Nggak percaya? Nih, denger sendiri dari CEO Google, Sundar Pichai:',
            'isi3' => '🗣️ Sundar Pichai intinya bilang: Potensi komputer kuantum sangatlah besar. Komputer kuantum ini bakalan jadi salah satu alat berharga untuk keberlangsungan perkembangan teknologi. Saya percaya bahwa kombinasi dari kecerdasan buatan (artificial intelligence, AI) dan (komputer) kuantum akan membantu kita menyelesaikan persoalan-persoalan besar di zaman modern.',
            'isi4' => 'Dan ya, jumlah investasi yang digelontorin ke bidang ini juga nggak main-main. Sampe 2,3 miliar dolar atau setara 35 triliun rupiah. 🤑 Duit segitu kalo dibeliin bakso… bisa buat ngasih makan hampir setengah penduduk dunia! 🌏 Belum lagi, jumlah ini diprediksi naik terus seiring kemajuan teknologi komputer kuantum.'
            ]
        ]
    ]);
});

Route::get('/profile', function () {
    return view('userPage/profilePage',[
        'isiProfile' => [
            [
                'gProfile' => 'https://th.bing.com/th/id/OIP.MUg4Xlf4DFZYhZJG66hWegHaEK?w=308&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
                'isiProfile1' => 'Kelompok 5 Pemrograman Web',
                'isiProfile2' => 'PemrogramanWebKelompok5@student.uajy.ac.id',
                'isiProfile3' => '0869696969696969'
            ]
        ]
    ]);
});

Route::get('/articles', function () {
    return view('userPage/articles/articlePage',[
        'isiArticlePage' => [
            [
                'gambarArticle' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64e46f1da8d1070a8c1f0283_thumbnail-fox%20quco-01-p-500.jpg',
                'jArticle' => ' 🖥️ Komputer Kuantum Bukan Seperti yang Kalian Kira (Dan Bisa Bahaya)',
                'desArticle' => 'Komputer kuantum adalah teknologi yang dianggap sebagai terobosan besar dalam dunia komputasi. Mereka memiliki potensi untuk mengubah cara kita memproses dan menganalisis informasi.',
                'jamArticle' => 'October 20, 2023',
                'lamaArticle' => '5 Menit Waktu Baca'
            ]
        ]
    ]);
});