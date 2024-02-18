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
                <section class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="box">

                                <div class="box-header with-border">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h3 class="box-title">All Roles</h3>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <ul class="nav">
                                                <li class="btn-group nav-item">
                                                    <a href="{{ route('addrole') }}" class="waves-effect waves-light nav-link bg-primary btn-primary w-auto fs-14" title="Full Screen">
                                                        Add Role
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                                                            
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example"
                                            class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                            <thead>
                                                <tr>
                                                    <th>Role</th>
                                                    <th>Create User</th>
                                                    <th>Edit user</th>
                                                    <th>Delete User</th>
                                                    <th>View User</th>
                                                    <th>Create Agent</th>
                                                    <th>Edit Agent</th>
                                                    <th>Delete Agent</th>
                                                    <th>View Agent</th>
                                                    <th>Create Manager</th>
                                                    <th>Edit Manager</th>
                                                    <th>Delete Manager</th>
                                                    <th>View Manager</th>
                                                    <th>Create Admin</th>
                                                    <th>Edit Admin</th>
                                                    <th>Delete Admin</th>
                                                    <th>View Admin</th>
                                                    <th> Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($role as $u)
                                                <tr>
                                                    <td>{{ $u->name }}</td>
                                                    <td>{{ $u->create_user ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->edit_user ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->delete_user ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->show_user ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->create_agent ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->edit_agent ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->delete_agent ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->show_agent ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->create_manager ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->edit_manager ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->delete_manager ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->show_manager ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->create_admin ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->edit_admin ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->delete_admin ? 'Yes' : 'No' }}</td>
                                                    <td>{{ $u->show_admin ? 'Yes' : 'No' }}</td>
                                            
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
                                                    <th>Role</th>
                                                    <th>Create User</th>
                                                    <th>Edit user</th>
                                                    <th>Delete User</th>
                                                    <th>View User</th>
                                                    <th>Create Agent</th>
                                                    <th>Edit Agent</th>
                                                    <th>Delete Agent</th>
                                                    <th>View Agent</th>
                                                    <th>Create Manager</th>
                                                    <th>Edit Manager</th>
                                                    <th>Delete Manager</th>
                                                    <th>View Manager</th>
                                                    <th>Create Admin</th>
                                                    <th>Edit Admin</th>
                                                    <th>Delete Admin</th>
                                                    <th>View Admin</th>
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
