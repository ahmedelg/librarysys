<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/style1.css') }}"> --}}

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        
       
        <style>
            *{
                color:#454d55;
            }a{
                color:#454d55 !important;
                text-decoration:none !important;
            }.dashboard-links{
                   
            }.dashboard-links li{
               
                padding: 5px 14px;
                background-color: #454d55;
                color: white;
                margin: 12px 12px;
                border-radius: 5px;
            }.dashboard-links li a{
                color: white !important;
            }.tbl-books{
                color: white !important;
                width: 56%;
                border-radius: 9px;
                margin: 5px 10px;
            }.tbl-books tr td, th{
                color:white;
            }.btn{
                padding:0px 24px
            }.frm-borrow-book{
                width: 30%;
                background: #9E9E9E;
                margin: 20px 12px;
                padding: 16px;
                border-radius: 12px;
                /* color: white !important; */
            }.tbl-show{
                width: 30%;
                /* background: #9E9E9E; */
                margin: 20px 12px;
                padding: 16px;
                /* border-radius: 12px; */
            }.tbl-show td{
                background-color:#3a3a3a;
                text-align:center;
            }
            
        
        </style>
    
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-dropdown')
            <div>
                <ul style="display:flex;flex-direction:row;" class="dashboard-links">
                <li><a href="/books">Books</a></li>
                    <li><a href="/borrowedbooks">Borrowed Books</a></li>
                    <li><a href="/details">Profile</a></li>
                </ul>
            </div>
             @yield('contents')
            <!-- Page Heading -->
            <header class="bg-white shadow">
            </header>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


        @stack('modals')

        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
