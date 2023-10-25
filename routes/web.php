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
    return view('guestPage/index',[
        'course'=>[
            [   
                "image"=> "https://i.ytimg.com/vi/wriGST3vp5M/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLCR8wCjPDJnuw1tE0M4-Cjcmc8pGQ",
                'title'=> 'HTML Dasar',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/AQOBN9XByf0/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBJMg3R7ba-3F41Yx-etBVWEGGghw",
                'title'=> 'CSS Dasar',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/pJpnMyFNaz0/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLD6XInzA980lKTwEIjwuaZf66XfYw",
                'title'=> 'Bootstrap Dasar',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/bxOPd_b0rg4/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCb3MocLWTJWD_f742Et8caUaCe_A",
                'title'=> 'Java OOP',
                'category'=> 'Object Oriented Programming',
                'price'=> 25000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/WtBF_-pLrjE/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAS1cFgZ6xwimHwtXkkuDaS9naL7Q",
                'title'=> 'C++',
                'category'=> 'Dasar Pemrograman',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/uHyfQV0kbgo/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBCbUKei--c6pfGruPirTh5DtBygw",
                'title'=> 'Java',
                'category'=> 'Dasar Pemrograman',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/vp5CsI0Qn28/hqdefault.jpg?sqp=-oaymwE2CNACELwBSFXyq4qpAygIARUAAIhCGAFwAcABBvABAfgB_gmAAtAFigIMCAAQARhFIEMoZTAP&rs=AOn4CLDaByNR5HxeBycZ8j9avVjzYPcbmQ",
                'title'=> 'PHP',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/JXXUBiJGu94/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLDnQT-BNLIdmeglftGRJ5MEvP3oYQ",
                'title'=> 'MongoDB',
                'category'=> 'Database',
                'price'=> 30000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/LLT6EAtX-x8/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLCZo1OcSY_YlnwOilz8fG9xkwitog",
                'title'=> 'Javascript Async',
                'category'=> 'Pemrograman Web',
                'price'=> 25000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/6dSNbskzlz4/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLD5XF2jCeFVPBVadjrowmc25XjtZw",
                'title'=> 'Kotlin',
                'category'=> 'Mobile',
                'price'=> 35000,
            ],

        ],
        'article'=>[
            [
                "image"=>"https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64e46f1da8d1070a8c1f0283_thumbnail-fox%20quco-01-p-500.jpg",
                'title'=>'Komputer Kuantum Tidak Seperti Yang Kalian Kira',
                'description'=>'Komputer kuantum bakal segera jadi kenyataan. Namun ternyata, komputer kuantum yang sebenarnya jauh berbeda dari yang selama ini kita dengar',
            ],
            [
                "image"=>"https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64d221bdf6c98bfceebc4da5_thumbnail-fox%20agsi-01.jpg",
                'title'=>' Artificial Superintelligence: Ketika Otak Manusia Pun Ketinggalan Zaman',
                'description'=>'Kita udah pernah bahas AI yang kini ada di seluruh aspek hidup kita. Tapi, apa jadinya kalau mereka jadi jauh lebih pintar dibanding manusia?',
            ],
            [
                "image"=>"https://assets-global.website-files.com/62d577cf8d48796fc4c03527/63ee6c9a09a40f6610962eea_thumbnail-FOX-TRHM-p-500.png",
                'title'=>'Transhumanisme: Masa Depan yang Tak Pernah Kita Bayangkan',
                'description'=>'Apa jadinya jika tak akan ada robot di masa depan — tapi malah akan ada manusia setengah mesin di mana-mana? Apakah kalian siap dengan versi masa depan ini?',
            ],
            [
                "image"=>"https://assets-global.website-files.com/62d577cf8d48796fc4c03527/63ee77741911ea4cc9e69fe5_thumbnail-FOX-RBSV-p-500.png",
                'title'=>'Robot Pelayan: Tadinya Science Fiction, Sekarang Mulai Jadi Kenyataan',
                'description'=>'Baru-baru ini Tesla Bot diumumkan ke publik. Mimpi untuk punya robot pelayan mungkin tak lagi jauh dari kenyataan. Bisa seperti apa robot pelayan ini nantinya?',
            ],
            [
                "image"=>"https://assets-global.website-files.com/62d577cf8d48796fc4c03527/652e67c147d93d6ef2dba7fa_thumbnail-fox%20aied-01-p-500.jpg",
                'title'=>'Akankah AI Bikin Kacau Sistem Pendidikan Kita?',
                'description'=>'AI banyak bantu kita nugas dan belajar, tapi muncul pertanyaan: apakah AI bikin siswa malas & tak kritis, atau justru majuin pendidikan?',
            ],
        ]
    ]);
});
Route::get('/admin',function(){
    return view('adminPage/dashboardAdmin');
});
Route::get('/signUp',function(){
    return view('/guestPage/signUpPage');
});
Route::get('/dashboard', function () {
    return view('userPage/dashboardUser',[
        'course'=>[
            [
                "image"=> "https://i.ytimg.com/vi/bxOPd_b0rg4/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCb3MocLWTJWD_f742Et8caUaCe_A",
                'title'=> 'Java OOP',
                'category'=> 'Object Oriented Programming',
                'price'=> 25000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/WtBF_-pLrjE/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAS1cFgZ6xwimHwtXkkuDaS9naL7Q",
                'title'=> 'C++',
                'category'=> 'Dasar Pemrograman',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/uHyfQV0kbgo/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBCbUKei--c6pfGruPirTh5DtBygw",
                'title'=> 'Java',
                'category'=> 'Dasar Pemrograman',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/vp5CsI0Qn28/hqdefault.jpg?sqp=-oaymwE2CNACELwBSFXyq4qpAygIARUAAIhCGAFwAcABBvABAfgB_gmAAtAFigIMCAAQARhFIEMoZTAP&rs=AOn4CLDaByNR5HxeBycZ8j9avVjzYPcbmQ",
                'title'=> 'PHP',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/JXXUBiJGu94/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLDnQT-BNLIdmeglftGRJ5MEvP3oYQ",
                'title'=> 'MongoDB',
                'category'=> 'Database',
                'price'=> 30000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/LLT6EAtX-x8/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLCZo1OcSY_YlnwOilz8fG9xkwitog",
                'title'=> 'Javascript Async',
                'category'=> 'Pemrograman Web',
                'price'=> 25000,
            ],

        ],
    ]);
});
Route::get('/courses', function () {
    return view('userPage/courses/coursePage',[
        'categories'=>['Dasar Pemrograman','Pemrograman Web', 'Database','OOP','Mobile'],
        'course'=>[
            [   
                "image"=> "https://i.ytimg.com/vi/wriGST3vp5M/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLCR8wCjPDJnuw1tE0M4-Cjcmc8pGQ",
                'title'=> 'HTML Dasar',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/AQOBN9XByf0/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBJMg3R7ba-3F41Yx-etBVWEGGghw",
                'title'=> 'CSS Dasar',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/pJpnMyFNaz0/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLD6XInzA980lKTwEIjwuaZf66XfYw",
                'title'=> 'Bootstrap Dasar',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/bxOPd_b0rg4/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCb3MocLWTJWD_f742Et8caUaCe_A",
                'title'=> 'Java OOP',
                'category'=> 'Object Oriented Programming',
                'price'=> 25000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/WtBF_-pLrjE/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAS1cFgZ6xwimHwtXkkuDaS9naL7Q",
                'title'=> 'C++',
                'category'=> 'Dasar Pemrograman',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/uHyfQV0kbgo/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBCbUKei--c6pfGruPirTh5DtBygw",
                'title'=> 'Java',
                'category'=> 'Dasar Pemrograman',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/vp5CsI0Qn28/hqdefault.jpg?sqp=-oaymwE2CNACELwBSFXyq4qpAygIARUAAIhCGAFwAcABBvABAfgB_gmAAtAFigIMCAAQARhFIEMoZTAP&rs=AOn4CLDaByNR5HxeBycZ8j9avVjzYPcbmQ",
                'title'=> 'PHP',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/JXXUBiJGu94/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLDnQT-BNLIdmeglftGRJ5MEvP3oYQ",
                'title'=> 'MongoDB',
                'category'=> 'Database',
                'price'=> 30000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/LLT6EAtX-x8/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLCZo1OcSY_YlnwOilz8fG9xkwitog",
                'title'=> 'Javascript Async',
                'category'=> 'Pemrograman Web',
                'price'=> 25000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/6dSNbskzlz4/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLD5XF2jCeFVPBVadjrowmc25XjtZw",
                'title'=> 'Kotlin',
                'category'=> 'Mobile',
                'price'=> 35000,
            ],

        ],
    ]);
});
Route::get('/articles', function () {
    return view('userPage/articles/articlePage');
});
Route::get('/login', function () {
    return view('guestPage/loginPage');
});
Route::get('/cartPage', function () {
    return view('userPage/courses/chartPage',[
        'course'=>[
            [   
                "image"=> "https://i.ytimg.com/vi/wriGST3vp5M/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLCR8wCjPDJnuw1tE0M4-Cjcmc8pGQ",
                'title'=> 'HTML Dasar',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/AQOBN9XByf0/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBJMg3R7ba-3F41Yx-etBVWEGGghw",
                'title'=> 'CSS Dasar',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/pJpnMyFNaz0/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLD6XInzA980lKTwEIjwuaZf66XfYw",
                'title'=> 'Bootstrap Dasar',
                'category'=> 'Pemrograman Web',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/bxOPd_b0rg4/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCb3MocLWTJWD_f742Et8caUaCe_A",
                'title'=> 'Java OOP',
                'category'=> 'Object Oriented Programming',
                'price'=> 25000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/WtBF_-pLrjE/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAS1cFgZ6xwimHwtXkkuDaS9naL7Q",
                'title'=> 'C++',
                'category'=> 'Dasar Pemrograman',
                'price'=> 15000,
            ],
            [
                "image"=> "https://i.ytimg.com/vi/uHyfQV0kbgo/hqdefault.jpg?sqp=-oaymwEcCPYBEIoBSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBCbUKei--c6pfGruPirTh5DtBygw",
                'title'=> 'Java',
                'category'=> 'Dasar Pemrograman',
                'price'=> 15000,
            ],
        ],
    ]);
});
Route::get('/checkout', function () {
    return view('userPage/courses/checkoutPage');
});
Route::get('/contentCourse', function () {
    return view('userPage/courses/contentCourse',[
        'content'=>[
                "video"=> '<iframe width="560" height="315" src="https://www.youtube.com/embed/wriGST3vp5M?si=a3CD6bb7kuzePJrW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
                'title'=>'HTML Dasar',
                'description'=>'HyperText Markup Language, or HTML, serves as the backbone of the World Wide Web. It is a simple yet powerful markup language designed to structure and present information on web pages. With HTML, you create the fundamental structure and layout for web content, facilitating consistent and accessible information presentation.',
        ],
        'thumbnails'=>[
            "https://i.ytimg.com/vi/wriGST3vp5M/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLCR8wCjPDJnuw1tE0M4-Cjcmc8pGQ",
            "https://i.ytimg.com/vi/GAd6FTsGSY8/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLBRz2gygdYL7-6zQ9nwzSiDd1Qc3w",
            "https://i.ytimg.com/vi/TM12RA6cmOQ/hqdefault.jpg?sqp=-oaymwEbCKgBEF5IVfKriqkDDggBFQAAiEIYAXABwAEG&rs=AOn4CLB_bFuRWfLjO1ofFcpCe-lwUiUmoA"
        ],
        'asideTitles'=>[
            'Apa itu HTML',
            'Instalasi dan Persiapan',
            'Struktur HTML'
        ],
        'userData'=>[
            [
                'id'=>'1',
                'name'=>'Harrison Ford',
                'quest'=>'Is HTML a programming language?',
                'time'=>'2 days ago',
                
            ],
            [
                'id'=>'2',
                'name'=>'Jason Statham',
                'quest'=>'What is div used for?',
                'time'=>'4 days ago'
            ],
            [
                'id'=>'3',
                'name'=>'Keanu Reeves',
                'quest'=>'Damn son',
                'time'=>'10 days ago'
            ],
            [
                'id'=>'4',
                'name'=>'Clint Eastwood',
                'quest'=>'What is the best browser for web programming?',
                'time'=>'1 month ago'
            ],
        ]

    ]);
});

Route::get('/contentArticle', function () {
    return view('userPage/articles/contentArticle',[
        'newsletter1'=>[
            [
            'gambar' => 'images/cyber-monday.jpg',
            'gambar2' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64e3b3ba9cfc2ea4c1144d3a_gif1-fox-quco%20(1)%20(1)-min.gif',
            'judul' => '🖥️ Komputer Kuantum Bukan Seperti yang Kalian Kira (Dan Bisa Bahaya)',
            'isi' => 'Kalau denger kata “komputer kuantum”, apa sih yang muncul di pikiran kalian? Apa mungkin langsung kebayang komputer yang bisa bikin manusia mengecil, terus bisa jalan-jalan lintas waktu? 👀',
            'isi2' => ' Gak cuma di dunia fiksi, komputer kuantum sebenernya udah ada di dunia nyata. Perusahaan-perusahaan teknologi besar kayak Google, IBM, dan bahkan negara-negara besar kayak 🇨🇳 Tiongkok dan 🇺🇸 Amerika sekarang lagi berlomba-lomba untuk ngebangun komputer kuantum! Nggak percaya? Nih, denger sendiri dari CEO Google, Sundar Pichai:',
            'isi3' => '🗣️ Sundar Pichai intinya bilang: Potensi komputer kuantum sangatlah besar. Komputer kuantum ini bakalan jadi salah satu alat berharga untuk keberlangsungan perkembangan teknologi. Saya percaya bahwa kombinasi dari kecerdasan buatan (artificial intelligence, AI) dan (komputer) kuantum akan membantu kita menyelesaikan persoalan-persoalan besar di zaman modern.',
            'isi4' => 'Dan ya, jumlah investasi yang digelontorin ke bidang ini juga nggak main-main. Sampe 2,3 miliar dolar atau setara 35 triliun rupiah. 🤑 Duit segitu kalo dibeliin bakso… bisa buat ngasih makan hampir setengah penduduk dunia! 🌏 Belum lagi, jumlah ini diprediksi naik terus seiring kemajuan teknologi komputer kuantum.',
            'calender' => '22 Agustus',
            'waktu' => '5 Menit Waktu Baca',
            'deskripsi' => 'Komputer kuantum bakal segera jadi kenyataan. Namun ternyata, komputer kuantum yang sebenarnya jauh berbeda dari yang selama ini kita dengar...'
            ]
        ]
    ]);
});

Route::get('/profile', function () {
    return view('userPage/profilePage',[
        'user' => [
            [
                'name' => 'Ryan Gosling',
                'email' => 'ryangosling@student.uajy.ac.id',
                'phoneNumber' => '08721347916123'
            ]
        ]
    ]);
});

Route::get('/articles', function () {
    return view('userPage/articles/articlePage',[
        'isiArticlePage' => [
            [
                'gambarArticle' => 'images/cyber-monday.jpg',
                'jArticle' => ' Cyber Monday! IC3 menemukan Ransomware baru yang berbahaya',
                'desArticle' => 'Komputer kuantum adalah teknologi yang dianggap sebagai terobosan besar dalam dunia komputasi. Mereka memiliki potensi untuk mengubah cara kita memproses dan menganalisis informasi.',
                'jamArticle' => 'October 20, 2023',
            ],
            [
                'gambarArticle' => 'https://img.freepik.com/free-vector/gradient-colored-vpn-illustration_23-2149226916.jpg?size=626&ext=jpg&ga=GA1.1.1861995214.1697819799&semt=sph',
                'jArticle' => ' 🧠 Bagaimana VPN Bekerja?',
                'desArticle' => 'Komputer kuantum adalah teknologi yang dianggap sebagai terobosan besar dalam dunia komputasi. Mereka memiliki potensi untuk mengubah cara kita memproses dan menganalisis informasi.',
                'jamArticle' => 'October 20, 2023',
            ],
            [
                'gambarArticle' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/64e46f1da8d1070a8c1f0283_thumbnail-fox%20quco-01-p-500.jpg',
                'jArticle' => ' 🤖 Robot Pelayan: Tadinya Science Fiction, Sekarang
                Mulai Jadi Kenyataan',
                'desArticle' => 'Baru-baru ini Tesla Bot diumumkan ke publik. Mimpi untuk punya robot pelayan mungkin
                tak lagi jauh dari kenyataan. Bisa seperti apa robot pelayan ini nantinya?
                Klick untuk tau lebih lanjut, dan baca keseluruhan beritanya!!',
                'jamArticle' => 'October 20, 2023',
            ],
            [
                'gambarArticle' => 'images/internet-day.jpg',
                'jArticle' => 'Selamat Hari Internet Sedunia',
                'desArticle' => 'Bagaimana sih awal mula diciptakannya internet? Kok bisa ya kita berkomunikasi dengan orang yang jaraknya ribuan kilometer dari rumah kita,',
                'jamArticle' => 'October 20, 2023',
            ],
            [
                'gambarArticle' => 'https://assets-global.website-files.com/62d577cf8d48796fc4c03527/63ee6577ebd725464b8c7b7f_thumbnail-FOX-AIRV-B-p-500.png',
                'jArticle' => ' 💿 Revolusi AI: Bagaimana AI Akan Mengubah Dunia
                Selamanya',
                'desArticle' => 'Kecerdasan buatan yang menandingi manusia bukan lagi teknologi masa depan.
                Diam-diam, mereka sudah hadir dan akan "muncul" di mana-mana. Sudah siapkah kalian?
                Klick untuk tau lebih lanjut, dan baca keseluruhan beritanya!!',
                'jamArticle' => 'October 20, 2023',
            ],
        ]
    ]);
});
