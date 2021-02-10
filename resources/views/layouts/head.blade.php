<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/admin/assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('/admin/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('/admin/assets/css/font-awesome.min.css')}}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('/admin/assets/css/line-awesome.min.css')}}">
		
		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{asset('/admin/assets/plugins/morris/morris.css')}}">

		<!-- Datatable CSS -->
        <link rel="stylesheet" href="{{ asset('/admin/assets/css/dataTables.bootstrap4.min.css') }}">

        <!-- CSS for sweetalert -->
		<link rel="stylesheet" href="{{ asset('/admin/assets/css/sweetalert.css') }}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('/admin/assets/css/style.css')}}">
		
    </head>