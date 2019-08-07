@extends("layouts.page_lay")
@section("content")
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Employees Data</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
                        <span class="input-icon">
                            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                        </span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>

                    <div class="ace-settings-box clearfix" id="ace-settings-box">
                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hide">
                                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                                <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                                <label class="lbl" for="ace-settings-add-container">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->

                <div class="page-header">
                    <h1>
                        Employees
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                    </div><!-- /.col -->

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Table Test</div>
                            <div class="panel-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="active">
                                            <a data-toggle="tab" href="#home">
                                                <i class="green ace-icon fa fa-users bigger-120"></i>
                                                All Employees
                                                <span class="badge badge-danger">4</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#messages">
                                                <i class="green ace-icon fa fa-user-plus bigger-120"></i>
                                                Add Employee
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <div class="table-responsive">
                                                <table id="dynamic-table" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Emp. No.</th>
                                                        <th>Full Name</th>
                                                        <th>National ID</th>
                                                        <th>Phone</th>
                                                        <th>Email Address</th>
                                                        <th>County</th>
                                                        <th>Reg Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $count=1;
                                                    ?>
                                                    @foreach($user as $u)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$u->emp_no}}</td>
                                                        <td>{{$u->emp_fname}} {{$u->emp_lname}}</td>
                                                        <td>{{$u->emp_nationalid}}</td>
                                                        <td>{{$u->phone}}</td>
                                                        <td>{{$u->email}}</td>
                                                        <td>{{$u->county}}</td>
                                                        <td>{{$u->created_at}}</td>
                                                        <td>
                                                            <a href="{{url('show_profile')}}/{{$u->emp_id}}" class="btn btn-info btn-sm">Details <i class="fa fa-forward"></i></a>
                                                            <a class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                        <?php
                                                        $count++;
                                                        ?>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div id="messages" class="tab-pane fade">
                                            <form method="post" action="{{url('new_employee')}}">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Member Number:</label>
                                                        <input class="form-control" name="emp_number" placeholder="Member Number" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>First Name:</label>
                                                        <input class="form-control" name="fname" placeholder="First Name" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Middle Name:</label>
                                                        <input class="form-control" placeholder="Middle Name" name="mname">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Last Name:</label>
                                                        <input class="form-control" name="lname" placeholder="Last Name" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Date of Birth:</label>
                                                        <input type="date" class="form-control" placeholder="D.O.B" name="dob" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Marital Status:</label>
                                                        <select class="form-control" name="marital_status" required>
                                                            <option value="">Select Status</option>
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Gender:</label>
                                                        <select class="form-control" name="gender" required>
                                                            <option value="">Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>National ID:</label>
                                                        <input class="form-control" name="national_id" placeholder="National ID" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Phone Number:</label>
                                                        <input name="phone" class="form-control" placeholder="Phone Number" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Email Address:</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Department:</label>
                                                        <select class="form-control" name="department">
                                                            <option value="">Select Department</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Religion:</label>
                                                        <select class="form-control" name="religion">
                                                            <option value="">Select Religion</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>County:</label>
                                                        <select class="form-control" name="county">
                                                            <option value="">Select County</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Account Status:</label>
                                                        <select class="form-control" name="status" required>
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div><br/>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <button type="submit" class="btn btn-info btn-sm">Add Employee</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection