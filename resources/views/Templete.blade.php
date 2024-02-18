<!DOCTYPE html>
<html lang="en">
<head>
    @extends('common/head')
    @section('title', 'Templete')

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <div class="wrapper">
        <div id="loader"></div>
        @include('common/header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('common/sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                @include('common/contentheader')
                <!-- Main content -->
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- Side panel -->
        @include('common/stickytoolbar')
        <!-- quick_panel_toggle -->
        @include('common/toggelnotfi')
        <!-- /quick_panel_toggle -->
    </div>
    <!-- ./wrapper -->
    <!-- ./side demo panel -->
    <!-- Sidebar -->
    <!-- Page Content overlay -->
    @include('common/chatmodel')
    {{-- script files --}}
    @include('common/script')
</body>
</html>
