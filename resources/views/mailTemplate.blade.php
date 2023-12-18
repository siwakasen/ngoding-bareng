<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Akun Ngoding Bareng</title>
</head>
<body>
    <center>
    <h1>P 4 Punten, we are Ngoding-Bareng</h1>
    <p>Halo <b>{{$details['username']}}</b></p>
    <p>Berikut data anda</p>
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>{{$details['username']}}</td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td>{{$details['website']}}</td>
        </tr>
        <tr>
            <td>Tanggal Register</td>
            <td>:</td>
            <td>{{$details['datetime']}}</td>
        </tr>
    </table>
        <h3>Klik link di bawah ini cuy untuk verifikasi login</h3>
        <b style="color: blue"> {{$details['url']}}</b>
        <p>
            <b>Terima kasih telah mendaftar di Ngoding-Bareng</b>
            <b>Selamat belajar xixixi</b>
        </p>
    </center>
</body>
</html>
