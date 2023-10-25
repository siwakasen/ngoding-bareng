@extends('navbar')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>indexr</title>
        <style>
            .container-fluid{
                padding: 0;
            }
            .container {
                max-width: 100%;
                padding: 0;
                margin: 0;
                text-align: center;
            }

            .left img {
                width: 100%;
                max-width: 100%;
                height: 350px;
            }

            .caption {
                font-size: 50px;
                font-weight: bold;
                margin-top: 20px;
            }

            .content-text {
                text-align: left;
                padding-left: 25%;
                padding-right: 25%;
                font-size: 25px
            }

            .box1 {
                text-align: center;
            }

            .container-gif {
                display: inline-block;
            }

            .bawah-judul {
                font-size: 15px;
                color: #999;
                padding-right: 5%;
            }

            .isi {
                font-size: 20px;
            }

            @media screen and (max-width: 800px) {

                .content-text {
                    padding-left: 2%;
                    padding-right: 2%;
                }
            }
        </style>
    </head>

    <body>
        <div class="container">
            @forelse($newsletter1 as $item)
                <section class="content">
                    <div class="left">
                        <img class="img-fluid object-fit-cover" src="{{ $item['gambar'] }}" alt="gambar atas">
                    </div>
                    <div class="content-text">
                        <div class="caption">
                            <h1><b>{{ $item['judul'] }}</b></h1>
                        </div>
                        <div class="bawah-judul" style="color: #999">
                            <p>{{ $item['deskripsi'] }}</p>
                            <div class="calender-waktu d-flex" style="color: #999">
                                <br>
                                <p style="margin-right: 15px;"><i class="fas fa-calendar"></i> {{ $item['calender'] }}</p>
                            </div>
                        </div>
                        <br>
                        <div class="isi" style="text-align: justify;">
                            <p>{{ $item['isi'] }}</p>
                            <div class="box1">
                                <div class="container-gif">
                                    <p><img src="{{ $item['gambar2'] }}" alt="gambar orang"></p>
                                </div>
                            </div>
                            <p>{{ $item['isi2'] }}</p>
                            <br>
                            <p>{{ $item['isi3'] }}</p>
                            <br>
                            <p>{{ $item['isi4'] }}</p>
                            <p>Jadi simpelnya, AI adalah cabang dari ilmu komputer yang bisa ngelakuin tugas yang butuhin
                                kemampuan berpikirnya manusia. 🖥️ Mereka ngolah data melalui langkah-langkah tertentu —
                                nama kerennya, algoritma — dan mempelajari pola, dan akhirnya ngambil keputusan.
                                <br><br>
                                Contohnya kayak AI di zaman-zaman awal pengembangannya. Pas tahun 60-an, AI muncul dalem
                                bentuk program yang bisa tahu apakah suatu gambar ngandung gambar 🐱 anabul atau 🐶 doggo.
                                <br><br>
                                Caranya dengan ngelatih program tersebut dengan gambar-gambar kucing dan anjing sampe si
                                Program ngerti.
                                <br><br>
                                Atauuu ada juga program lain bernama Merlin. Dia ini awalnya dikembangin buat jadi tutor
                                para mahasiswa buat mahamin kecerdasan buatan. Ya, AI yang ngajarin AI, ke manusia. 😧 Gila
                                banget!
                                <br><br>
                                Walaupun program ini enggak sampai berhasil dibuat karena satu dan lain hal, Merlin diakui
                                sebagai program yang ngebuka jalan lebar soal ide-ide penggunaan AI di dunia pendidikan:
                                buat ngajarin manusia. 🚶🏻‍♀️🚶🏻‍♂️
                                <br><br>
                                Ayo fast forward ke masa sekarang. ⏩
                                <br><br>
                                AI bisa makin banyak bantuin kerjaan manusia yang macem-macem. Termasuk, buat para guru!
                                🧑‍🏫 Contohnya kayak aplikasi Gradescope dan E-rater yang manfaatin kecerdasan buatan buat
                                ngebantuin para guru ngenilai tugas-tugas muridnya. 💯
                                <br><br>
                                Dua aplikasi itu bisa ngasih nilai ke para pelajar dengan ngamatin pemilihan kata yang
                                digunain murid, struktur kalimat, referensi yang digunain, dan sebagainya. Canggih banget
                                ya. 😮
                                <br><br>
                                Ada juga kecerdasan buatan di aplikasi belajar bahasa yang logonya si Burung Hijau ini:
                                Duolingo. 🦜 Perusahaan edtech ini udah lama juga gunain AI dalam proses pembuatan materi
                                dan arah pembelajaran buat para penggunanya.
                                <br><br>
                                Bahkan, mereka sampe namain “otak” di balik aplikasi mereka itu dengan nama Birdbrain yang
                                bisa ngasihin soal yang sesuai sama kemampuan setiap penggunanya. 😆 Gimana, ada yang suka
                                main Duolingo juga di sini?
                                <br><br>
                                Daaan bukan cuma bisa bantu ngecek tugas dan ngasih panduan belajar, ada juga aplikasi yang
                                bisa bantuin ibu guru ngecekin tugas hasil contekan kayak Copyleaks, chatbot Learnwise buat
                                ngebantu para pelajar yang butuh nanya-nanya seputar cara masuk suatu kampus, sampe aplikasi
                                AI kayak Sembly yang bisa bantu nulisin apa yang dibicarain bapak dosen di kelas. Super
                                duper ngebantu. ✅
                                <br><br>
                                Bahkan, walaupun kita juga belom tau apakah AI bisa bikin pelajar makin pinter apa engga,
                                nyatanya udah banyak pelajar yang bilang kalo kecerdasan buatan kayak ChatGPT udah ngebantu
                                banget dalam proses belajar mereka. 📝</p>
                        </div>
                    </div>
                </section>
            @endforeach
        </div>
    </body>

    </html>
@endsection
