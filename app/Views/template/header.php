<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi|List-User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<style>
    .containier{
        max-width:500px;
    }

    .error{
        display:block;
        padding-top:5px;
        font-size:14px;
        color:red;
    }
</style>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
  <div class="container">
  <a class="navbar-brand" href="#">CI4 CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('UserCrud')?>">User</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Produk')?>">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('grafik-morris')?>">Grafik Produk</a>
      </li>
      
    
  </div>
  </div>
</nav>
<div class="container mt-4">