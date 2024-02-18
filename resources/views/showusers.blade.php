<!DOCTYPE html>
<html lang="en">

<head>
    @extends('common/head')
    @section('title', 'Users')

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
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">{{ $url }}</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example"
                                            class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Created At</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th> Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                    @foreach ($user as $u)
                                                    <tr>
                                                        <td>{{ $u->name }}</td>
                                                        <td>{{ $u->email }}</td>
                                                        <td>{{ $u->contact }}</td>
                                                        <td>{{ $u->created_at }}</td>
                                                        <td>{{ $u->role }}</td>
                                                        <td>
                                                            @if($u->status == 1)
                                                                Active
                                                            @else
                                                                Not Active
                                                            @endif
                                                        </td>
                                                                                                                <td>
                                                            <a href="{{ url('users/delete') }}/{{ $u->id }}">
                                                                <button class="danger">Delete</button>
                                                            </a>
                                                            <a href="{{ url('users/edit') }}/{{ $u->id }}">
                                                                <button class="success">Edit</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Contact</th>
                                                    <th>Created At</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th> Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>

                    </div>




                </section>
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
