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
    return view('guestPage/index');
});
Route::get('/dashboard', function () {
    return view('userPage/dashboardUser');
});

Route::get('/courses', function () {
    return view('userPage/courses/coursePage');
});

Route::get('/manageCourse', function () {
    return view('adminPage/courses/manageCourse', [
        'course' =>[
            [
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Cisco_academy_logo.svg/270px-Cisco_academy_logo.svg.png?20120812062947',
                'title' => 'Cisco Foundation Untuk Pemula',
                'category' => 'Information Technology',
                'price' => '$15',
                'purchasedCount' => '34',
                'revenue' => '$510',
            ],
            [
                'image' => 'https://qph.cf2.quoracdn.net/main-qimg-28cadbd02699c25a88e5c78d73c7babc',
                'title' => 'Pemrograman Python Untuk Pemula',
                'category' => 'Information Technology',
                'price' => '$10',
                'purchasedCount' => '19',
                'revenue' => '$123',
            ],
            [
                'image' => 'https://git-scm.com/images/logos/logomark-orange@2x.png',
                'title' => 'Git: Pemula sampai Mahir',
                'category' => 'Information Technology',
                'price' => '$13',
                'purchasedCount' => '43',
                'revenue' => '$105',
            ],
            [
                'image' => 'https://previews.123rf.com/images/essaphear/essaphear1709/essaphear170900001/86808937-data-science-logo-icon-design-vector.jpg',
                'title' => 'Data Science Foundation',
                'category' => 'Information Technology',
                'price' => '$49',
                'purchasedCount' => '234',
                'revenue' => '$954',
            ],
            [
                'image' => 'https://binus.ac.id/wp-content/uploads/2019/08/cnf.jpg',
                'title' => 'Dasar Jaringan Komputer Untuk Pemula',
                'category' => 'Information Technology',
                'price' => '$17',
                'purchasedCount' => '56',
                'revenue' => '$543',
            ],
            [
                'image' => 'https://miro.medium.com/v2/resize:fit:1400/1*YheDqVOiQ7raTKDx8wUQYA.png',
                'title' => 'Data Science Lanjutan Dengan Python',
                'category' => 'Information Technology',
                'price' => '$23',
                'purchasedCount' => '34',
                'revenue' => '$456',
            ],
            [
                'image' => 'https://cdn.pixabay.com/photo/2023/06/01/12/02/excel-logo-8033473_640.png',
                'title' => 'Excel: Pengenalan Excel',
                'category' => 'Information Technology',
                'price' => '$15',
                'purchasedCount' => '34',
                'revenue' => '$510',
            ]
        ]
    ]);
});

Route::get('/articles', function () {
    return view('userPage/articles/articlePage');
});

Route::get('/manageArticle', function () {
    return view('adminPage/manageArticle',[
        'article' => [
            [
                'thumbnail' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/6530ea2e02784517680f705e_Thumbnail%20FOX-BYTE%20(1)%20(1).jpg',
                'title' => 'Sebuah Perusahaan Mobil Listrik Tiongkok Bersiap Ngalahin Tesla',
                'desc' => 'Selama ini, kalo nyebut mobil listrik mungkin langsung kebayangnya Tesla. Tapi, kini ada BYD; pesaing dari Tiongkok yang perlahan melangserkan sang raksasa...'
            ],
            [
                'thumbnail' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/652e67c147d93d6ef2dba7fa_thumbnail-fox%20aied-01-p-500.jpg',
                'title' => 'Akankan AI Bikin Kacau Sistem Pendidikan Kita?',
                'desc' => 'AI banyak bantu kita nugas dan belajar, tapi muncul pertanyaan: apakah AI bikin siswa malas & tak kritis, atau justru majuin pendidikan?'
            ],
            [
                'thumbnail' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64e46f1da8d1070a8c1f0283_thumbnail-fox%20quco-01-p-500.jpg',
                'title' => 'Komputer Kuantum Bukan Seperti yang Kalian Kira (Dan Bisa Bahaya)',
                'desc' => 'Komputer kuantum bakal segera jadi kenyataan. Namun ternyata, komputer kuantum yang sebenarnya jauh berbeda dari yang selama ini kita dengar...'
            ],
            [
                'thumbnail' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64d221bdf6c98bfceebc4da5_thumbnail-fox%20agsi-01-p-500.jpg',
                'title' => 'Artificial Superintelligence: Ketika Otak Manusia Pun Ketinggalan Zaman',
                'desc' => 'Kita udah pernah bahas AI yang kini ada di seluruh aspek hidup kita. Tapi, apa jadinya kalau mereka jadi jauh lebih pintar dibanding manusia?'
            ],
            [
                'thumbnail' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/63ee77741911ea4cc9e69fe5_thumbnail-FOX-RBSV-p-500.png',
                'title' => 'Robot Pelayan: Tadinya Science Fiction, Sekarang Mulai jadi Kenyataan',
                'desc' => 'Baru-baru ini Tesla Bot diumumkan ke publik. Mimpi untuk punya robot pelayan mungkin tak lagi jauh dari kenyataan. Bisa seperti apa robot pelayan ini nantinya?'
            ],
            [
                'thumbnail' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/63ee6577ebd725464b8c7b7f_thumbnail-FOX-AIRV-B.png',
                'title' => 'Revolusi AI: Bagaimana AI Akan Mengubah Dunia Selamanya',
                'desc' => 'Kecerdasan buatan yang menandingi manusia bukan lagi teknologi masa depan. Diam-diam, mereka sudah hadir dan akan "muncul" di mana-mana. Sudah siapkah kalian?'
            ],
            [
                'thumbnail' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64f94c107d21b7897148be52_thumbnail-fox%20matw-01-p-500.jpg',
                'title' => 'Matematika yang Kita Pelajari Ternyata Cacat',
                'desc' => 'Tahun 1931, seorang matematikawan muda menggebrak dunia dengan bilang: "Matematika itu nggak sempurna." Apa yang jadi masalah?'
            ]
        ]
    ]);
});
Route::get('/profile', function () {
    return view('userPage/profilePage');
});
Route::get('/login', function () {
    return view('guestPage/loginPage');
});

Route::get('/createCourse', function () {
    return view('adminPage/courses/createCourse');
});

Route::get('/createContent', function () {
    return view('adminPage/courses/createContent');
});