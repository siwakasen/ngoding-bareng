@extends('navbar')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            
            .dashboard {
                text-align: left;
                padding: 20px;
            }
            
            .line {
                border-top: 10px solid #000; 
                margin: 20px 0;
            }
            
            .box-container {
                display: flex;
                justify-content: space-between;
                margin: 20px 0;
            }
            
            .box {
                width: 30%;
                height: 100px;
                border: 1px solid #000;
                padding: 10px;
                text-align: center;
                background-color: blue;
                color: white;
                margin: 0 10px;
            }
            
            .users {
                text-align: left;
                margin-top: 20px;
            }
            
            .user-list {
                list-style: none;
                padding: 0;
                max-height: 400px; 
                overflow: auto; 
            }
            
            .user-box {
                width: 100%; 
                border: 1px solid #000;
                padding: 10px;
                margin: 10px 0; 
            }
            
            .monospace {
                font-family: monospace;
            }
                       
            .user-box p {
                margin: 5px 0; 
            }
            
            .box.visitor {
                background-color: blue;
            }
            
            .box.visitor h2, .box.visitor p {
                color: white;
            }
            
            .user-info {
                margin-bottom: 10px; 
                
                
            } 
            </style>
</head>
<body>
    <div class="dashboard">
    <h1>Dashboard</h1>
    <div class="line"></div>
    <div class="box-container">
        <div class="box">
            <h2>42</h2>
            <p>Guest Visitors</p>
        </div>
        <div class="box">
            <h2>15</h2>
            <p>Logged Users Online</p>
        </div>
        <div class="box">
            <h2>120</h2>
            <p>Registered Users</p>
        </div>
    </div>
    <div class="line"></div>
    <h2 class="users">Users</h2>
    <ul class="user-list">
        @for ($i = 1; $i <= 10; $i++)
        <li class="user-box monospace">
            <p class="user-info">
                User {{ $i }} | user{{ $i }} | Login Time: 08:{{ $i }} AM | Logout Time: 05:{{ $i }} PM
            </p>
        </li>
        @endfor
    </ul>
</div>    
    
</body>
</html>

@endsection
