<!DOCTYPE html>
<html lang="en" class="scroll-smoth" data-theme="ligth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FASTKES - Fasilitas Kesehatan Kota Depok</title>

    <!-- CSS RESOURCE -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.17.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ICON -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="navbar bg-base-100 z-50">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="<?= base_url() ?>/">Home</a></li>
                    <li><a href="<?= base_url() ?>/daftar-faskes">Faskes</a></li>
                    <li><a href="<?= base_url() ?>/about">About</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl">FastkesDE</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal p-0">
                <li><a href="<?= base_url() ?>/">Home</a></li>
                <li><a href="<?= base_url() ?>/daftar-faskes">Faskes</a></li>
                <li><a  href="<?= base_url() ?>/about">About</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a  href="<?= base_url() ?>/login" class="btn btn-sm btn-outline">
                Login
                <span class="material-icons ml-1">
                    login
                </span>
            </a>
        </div>
    </div>