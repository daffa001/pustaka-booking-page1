<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pustaka-Booking | <?= $judul; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?>logo-pb.png">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>user/css/bootstrap.css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">Pustaka</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
                    <?php
                    if (!empty($this->session->userdata('email'))) { ?>
                        <a class="nav-item nav-link" href="<?= base_url('booking'); ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>

                        <a class="nav-item nav-link" onclick="information('Waktu Pengambilan Buku 1x24 jam dari Booking!!!')" href="<?php echo base_url() . 'booking/exportToPdf/' . $this->session->userdata('id_user'); ?>">Bukti Cetak Pinjam</a>
                        <a class="nav-item nav-link" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a>
                        <a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a>

                    <?php } else { ?>

                        <a class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal" href="#"><i class="fas fw fa-login"></i> Daftar</a>

                        <a class="nav-item nav-link" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fw fa-login"></i> Log in</a>

                    <?php } ?>
                    <span class="nav-item nav-link nav-right" style="display:block; margin-left:20px;">Selamat Datang <b><?= $user; ?></b></span>
                </div>
            </div>
        </div>
    </nav>
    <header>
        
        <div id="intro-example" class="p-5 text-center bg-image" style="background-image: url('https://images.unsplash.com/photo-1600673645627-1c47394132ac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8YWJzdHJhY3QlMjBibGFja3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'); background-size: cover;">
            <!-- <div class="mask h-100" style="background-color: rgba(0, 0, 0, 0.7);"> -->
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Cari Buku dan Booking Secara Cepat</h1>
                        <h5 class="mb-4">Temukan Buku dan booking buku yang kamu inginkan sekarang juga</h5>
                        <a class="btn btn-primary btn-lg m-2" href="#" role="button" rel="nofollow" target="_blank">Cari buku</a>
                        <a class="btn btn-outline-light btn-lg m-2" href="#" target="_blank" role="button">Booking</a>
                    </div>
                </div>
            <!-- </div> -->
        </div>
    </header>
    
    <div class="container mt-5">

