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
                <div class="box">
                    <div class="box-body">
                        <div class="box">
                            <div class="box-body">
                                <div class="row">
                                    <form action="{{ $url }}" method="POST">
                                        @csrf

                                        <div class="row">

                                            <!-- User Permissions -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <center>
                                                        <h4>{{ $tittle }}<span class="text-danger">*</span></h4>
                                                    </center>
                                                    <div class="controls">
                                                        <h5>Enter Role Name<span class="text-danger">*</span></h5>
                                                        <input type="text" name="role" class="form-control"
                                                            required
                                                            data-validation-required-message="This field is required">
                                                    </div>

                                                    <div class="controls">
                                                        <fieldset>
                                                            <input type="checkbox" id="select_all_user"
                                                                class="check-all-user" data-target=".user-checkbox">
                                                            <label for="select_all_user">Select All Users
                                                                Permission</label>
                                                        </fieldset>

                                                        <fieldset>
                                                            <input type="checkbox" id="create_user"
                                                                class="user-checkbox" name="permissions[user][create]"
                                                                value="1">
                                                            <label for="create_user">Create User</label>
                                                            <input type="hidden" name="permissions[user][create]"
                                                                value="0">
                                                        </fieldset>

                                                        <fieldset>
                                                            <input type="checkbox" id="edit_user" class="user-checkbox"
                                                                name="permissions[user][edit]" value="1">
                                                            <label for="edit_user">Edit User</label>
                                                            <input type="hidden" name="permissions[user][edit]"
                                                                value="0">
                                                        </fieldset>

                                                        <fieldset>
                                                            <input type="checkbox" id="show_user" class="user-checkbox"
                                                                name="permissions[user][show]" value="1">
                                                            <label for="show_user">Show User</label>
                                                            <input type="hidden" name="permissions[user][show]"
                                                                value="0">
                                                        </fieldset>

                                                        <fieldset>
                                                            <input type="checkbox" id="delete_user"
                                                                class="user-checkbox" name="permissions[user][delete]"
                                                                value="1">
                                                            <label for="delete_user">Delete User</label>
                                                            <input type="hidden" name="permissions[user][delete]"
                                                                value="0">
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Agent Permissions -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Agent Permissions<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <fieldset>
                                                        <input type="checkbox" id="select_all_agent"
                                                            class="check-all-agent" data-target=".agent-checkbox">
                                                        <label for="select_all_agent">Select All Agent
                                                            Permissions</label>
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="create_agent" class="agent-checkbox"
                                                            name="permissions[agent][create]" value="1">
                                                        <label for="create_agent">Create Agent</label>
                                                        <input type="hidden" name="permissions[agent][create]"
                                                            value="0">
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="edit_agent" class="agent-checkbox"
                                                            name="permissions[agent][edit]" value="1">
                                                        <label for="edit_agent">Edit Agent</label>
                                                        <input type="hidden" name="permissions[agent][edit]"
                                                            value="0">
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="show_agent" class="agent-checkbox"
                                                            name="permissions[agent][show]" value="1">
                                                        <label for="show_agent">Show Agent</label>
                                                        <input type="hidden" name="permissions[agent][show]"
                                                            value="0">
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="delete_agent"
                                                            class="agent-checkbox" name="permissions[agent][delete]"
                                                            value="1">
                                                        <label for="delete_agent">Delete Agent</label>
                                                        <input type="hidden" name="permissions[agent][delete]"
                                                            value="0">
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Manager Permissions -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Manager Permissions<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <fieldset>
                                                        <input type="checkbox" id="select_all_manager"
                                                            class="check-all-manager" data-target=".manager-checkbox">
                                                        <label for="select_all_manager">Select All Manager
                                                            Permissions</label>
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="create_manager"
                                                            class="manager-checkbox"
                                                            name="permissions[manager][create]" value="1">
                                                        <label for="create_manager">Create Manager</label>
                                                        <input type="hidden" name="permissions[manager][create]"
                                                            value="0">
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="edit_manager"
                                                            class="manager-checkbox" name="permissions[manager][edit]"
                                                            value="1">
                                                        <label for="edit_manager">Edit Manager</label>
                                                        <input type="hidden" name="permissions[manager][edit]"
                                                            value="0">
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="show_manager"
                                                            class="manager-checkbox" name="permissions[manager][show]"
                                                            value="1">
                                                        <label for="show_manager">Show Manager</label>
                                                        <input type="hidden" name="permissions[manager][show]"
                                                            value="0">
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="delete_manager"
                                                            class="manager-checkbox"
                                                            name="permissions[manager][delete]" value="1">
                                                        <label for="delete_manager">Delete Manager</label>
                                                        <input type="hidden" name="permissions[manager][delete]"
                                                            value="0">
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Admin Permissions -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Admin Permissions<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <fieldset>
                                                        <input type="checkbox" id="select_all_admin"
                                                            class="check-all-admin" data-target=".admin-checkbox">
                                                        <label for="select_all_admin">Select All Admin
                                                            Permissions</label>
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="create_admin"
                                                            class="admin-checkbox" name="permissions[admin][create]"
                                                            value="1">
                                                        <label for="create_admin">Create Admin</label>
                                                        <input type="hidden" name="permissions[admin][create]"
                                                            value="0">
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="edit_admin" class="admin-checkbox"
                                                            name="permissions[admin][edit]" value="1">
                                                        <label for="edit_admin">Edit Admin</label>
                                                        <input type="hidden" name="permissions[admin][edit]"
                                                            value="0">
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="show_admin" class="admin-checkbox"
                                                            name="permissions[admin][show]" value="1">
                                                        <label for="show_admin">Show Admin</label>
                                                        <input type="hidden" name="permissions[admin][show]"
                                                            value="0">
                                                    </fieldset>

                                                    <fieldset>
                                                        <input type="checkbox" id="delete_admin"
                                                            class="admin-checkbox" name="permissions[admin][delete]"
                                                            value="1">
                                                        <label for="delete_admin">Delete Admin</label>
                                                        <input type="hidden" name="permissions[admin][delete]"
                                                            value="0">
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </div>
                                    </form>

                                </div>

                                <!-- Repeat the above structure for Manager and Admin -->

                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        let checkboxes = document.querySelectorAll('.user-checkbox, .agent-checkbox, .manager-checkbox, .admin-checkbox');
                                        let checkAllManager = document.querySelector('.check-all-manager');
                                        let checkAllUser = document.querySelector('.check-all-user');
                                        let checkAllAdmin = document.querySelector('.check-all-admin');
                                        let checkAllAgent = document.querySelector('.check-all-agent');
                                
                                        function handleCheckAll(checkAllCheckbox, role) {
                                            checkAllCheckbox.addEventListener('change', function() {
                                                checkboxes.forEach(function(checkbox) {
                                                    if (checkbox.classList.contains(role)) {
                                                        checkbox.checked = checkAllCheckbox.checked;
                                                        updateHiddenValue(checkbox);
                                                    }
                                                });
                                            });
                                        }
                                
                                        handleCheckAll(checkAllManager, 'manager-checkbox');
                                        handleCheckAll(checkAllUser, 'user-checkbox');
                                        handleCheckAll(checkAllAdmin, 'admin-checkbox');
                                        handleCheckAll(checkAllAgent, 'agent-checkbox');
                                
                                        checkboxes.forEach(function(checkbox) {
                                            checkbox.addEventListener('change', function() {
                                                updateHiddenValue(checkbox);
                                            });
                                        });
                                
                                        function updateHiddenValue(checkbox) {
                                            let hiddenInput = checkbox.nextElementSibling.nextElementSibling; // Adjusted to target the correct hidden input
                                            hiddenInput.value = checkbox.checked ? '1' : '0';
                                        }
                                    });
                                </script>
                                                                <!-- /.content -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
