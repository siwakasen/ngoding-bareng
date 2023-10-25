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
Route::get('/profile', function () {
    return view('userPage/profilePage');
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
