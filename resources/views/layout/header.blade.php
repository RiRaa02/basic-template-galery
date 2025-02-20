<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gallery Photo</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('tmp/src/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('tmp/src/assets/css/styles.min.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('auth/style1.css') }}">


  <style>
    body {
      background-color: #f4e1d2; /* Coklat susu */
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Sidebar dengan latar belakang transparan coklat susu */
    .left-sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 270px; /* Menambah lebar sidebar */
      background: rgba(205, 161, 124, 0.6); /* Coklat susu transparan */
      z-index: 1050;
      transition: all 0.3s ease;
      margin-top: 0;
    }

    .left-sidebar .sidebar-nav {
      position: relative;
      z-index: 1060;
    }

    /* Navbar dengan efek blur pada latar belakang */
    .app-header {
      background: rgba(205, 161, 124, 0.5); /* Coklat susu transparan */
      backdrop-filter: blur(10px); /* Efek blur pada latar belakang navbar */
    }

    .app-header .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      padding: 0;
    }

    /* Navbar Item */
    .navbar-nav {
      display: flex;
      align-items: center;
      margin-left: 0;
    }

    .navbar-nav a {
      color: #3e2723;
      margin-left: 20px;
    }

    .navbar-nav a:hover {
      color: #d32f2f;
    }

    /* Sidebar item */
    .sidebar-item {
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }

    .sidebar-item a {
      color: #f5f5f5;
    }

    .sidebar-item a:hover {
      color: #d32f2f;
    }

    .sidebar-item i {
      color: #f5f5f5;
    }

    .sidebar-item i:hover {
      color: #d32f2f;
    }

    .sidebar-nav {
      background: transparent;
      color: #f5f5f5;
    }

    /* Body Wrapper */
    .body-wrapper {
      min-height: 100vh; /* Mengatur agar body-wrapper minimal setinggi layar */
      display: flex;
      flex-direction: column; /* Membuat child elements disusun secara vertikal */
    }

    /* Footer */
    .py-6 {
      color: #3e2723;
      margin-top: auto; /* Memastikan footer selalu di bagian bawah */
    }

    .py-6 a {
      color: #d32f2f;
    }

    .py-6 a:hover {
      text-decoration: underline;
    }
  </style>
</head>