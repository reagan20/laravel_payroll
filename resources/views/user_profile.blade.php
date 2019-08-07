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
                    <!--<form class="form-search">
                        <span class="input-icon">
                            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                        </span>
                    </form>-->
                </div>
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        Employee Profile
                    </h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                    </div><!-- /.col -->

                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 center">
                        <div class="well well-sm">
                          <span class="profile-picture">
                            <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="assets/images/avatars/profile-pic.jpg" />
                        </span>

                            <div class="space space-4"></div>

                            <a href="#" class="btn btn-sm btn-block btn-success">
                                <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                                <span class="bigger-110">Add as a friend</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-block btn-primary">
                                <i class="ace-icon fa fa-envelope-o bigger-110"></i>
                                <span class="bigger-110">Send a message</span>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Table Test</div>
                            <div class="panel-body">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li class="active">
                                            <a data-toggle="tab" href="#home">
                                                <i class="green ace-icon fa fa-flag bigger-120"></i>
                                                Employee Details
                                            </a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" href="#messages">
                                                <i class="green ace-icon fa fa-user-plus bigger-120"></i>
                                                Next of Kin Details
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <form method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Member Number:</label>
                                                        <input class="form-control" placeholder="Member Number">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>First Name:</label>
                                                        <input class="form-control" placeholder="First Name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Middle Name:</label>
                                                        <input class="form-control" placeholder="Middle Name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Last Name:</label>
                                                        <input class="form-control" placeholder="Last Name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Date of Birth:</label>
                                                        <input type="date" class="form-control" placeholder="D.O.B">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Marital Status:</label>
                                                        <select class="form-control" name="">
                                                            <option value="">Select Status</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Gender:</label>
                                                        <select class="form-control" name="">
                                                            <option value="">Select Gender</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>National ID:</label>
                                                        <input class="form-control" placeholder="National ID">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Phone Number:</label>
                                                        <input class="form-control" placeholder="Phone Number">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Email Address:</label>
                                                        <input class="form-control" placeholder="Email Address">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Department:</label>
                                                        <select class="form-control" name="">
                                                            <option value="">Select Department</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Religion:</label>
                                                        <select class="form-control" name="">
                                                            <option value="">Select Religion</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>County:</label>
                                                        <select class="form-control" name="">
                                                            <option value="">Select County</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>Account Status:</label>
                                                        <select class="form-control" name="">
                                                            <option value="Active">Active</option>
                                                            <option value="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                </div><br/>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button class="btn btn-sm btn-info"><i class="fa fa-save"></i> Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="messages" class="tab-pane fade">
                                            <div class="table-responsive">
                                                <a data-toggle="modal" data-target="#" class="btn btn-info btn-sm"><i class="fa fa-user-plus"></i> Add Kin</a>
                                                <table id="dynamic-table" class="table table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>S/N</th>
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
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>Otieno Reagan</td>
                                                        <td>32809990</td>
                                                        <td>+254717052892</td>
                                                        <td>journalreagan@gmail.com</td>
                                                        <td>Kisumu</td>
                                                        <td>2019/07/25</td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm">Details <i class="fa fa-forward"></i></a>
                                                            <a class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
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
    </div>
@endsection