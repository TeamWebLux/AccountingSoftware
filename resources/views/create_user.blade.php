<!DOCTYPE html>
<html lang="en">
<head>
    @extends('common/head')
    @section('title', $tittle)

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
                <div class="content">
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body wizard-content">
                            <form action="{{ $url }}" class="" method="POST">
                                @csrf
                                <!-- Step 1 -->
                              <center>  <h4>{{ $tittle }}</h4></center>
                                <section>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wfirstName2" class="form-label"> Name : <span class="danger">*</span> </label>
                                                <input type="text" name="name" class="form-control" id="wfirstName2" name="firstName" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wlocation2" class="form-label"> Role : <span class="danger">*</span> </label>
                                                <select class="form-select required" id="wlocation2" name="role">
                                                    <option value="">Select Role</option>
                                                    @foreach ($role as $r)  
                                                   <option value="{{ $r->name }}">{{ $r->name }}</option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemailAddress2" class="form-label"> Email Address : <span class="danger">*</span> </label>
                                                <input type="email" name="email" class="form-control required" id="wemailAddress2" name="emailAddress"> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wphoneNumber2" class="form-label">Phone Number :</label>
                                                <input type="tel" name="phone" class="form-control" id="wphoneNumber2"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wemailAddress2" class="form-label"> User Name : <span class="danger">*</span> </label>
                                                <input type="text" name="username" class="form-control required" id="wemailAddress2" name="emailAddress"> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wphoneNumber2" class="form-label">Password :</label>
                                                <input type="password" name="password" class="form-control" id="wphoneNumber2"> 
                                            </div>
                                        </div>
                                    </div>

                                </section>
                                    <button type="submit">Submit</button>
                                </section>
                            </form>
                        </div>
                        <!-- /.box-body -->
                      </div>
                </div>
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
