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
                <li class="active">Allowances</li>
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
            <div class="page-header">
                <h1>
                    Allowances
                </h1>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-md-12 col-sm-12">

                </div><!-- /.col -->

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Employee Allowances</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    @if(Session::has('message'))
                                    <div class="alert alert-success alert-dismissable">{{Session::get('message')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="tabbable">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active">
                                        <a data-toggle="tab" href="#home">
                                            <i class="green ace-icon fa fa-users bigger-120"></i>
                                            All Allowances
                                            <span class="badge badge-danger">4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#messages">
                                            <i class="green ace-icon fa fa-plus bigger-120"></i>
                                            Add Allowance
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
                                                    <th>Allowance Name</th>
                                                    <th>Amount</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $count=1;
                                                ?>
                                                    @foreach($allowance as $allow)
                                                        <tr>
                                                            <td><?php echo $count;?>.</td>
                                                            <td>{{$allow->name}}</td>
                                                            <td>{{$allow->description}}</td>
                                                            <td>{{$allow->amount}}</td>
                                                            <td>
                                                                <a data-toggle="modal" data-target="#edit_allowance{{$allow->id}}" href="" class="btn btn-info btn-sm">Update<i class="fa fa-forward"></i></a>
                                                                <a class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                                            </td>
                                                        </tr>
                                                        <div id="edit_allowance{{$allow->id}}" class="modal fade" tabindex="-1">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header no-padding">
                                                                        <div class="table-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                                                <span class="white">&times;</span>
                                                                            </button>
                                                                            Update Allowance
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-body ">
                                                                        <form method="post" action="">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <label>Allowance Name: </label><span class="required">*</span>
                                                                                    <input value="{{$allow->name}}" class="form-control" placeholder="Allowance Name" name="name" required>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label>Amount: </label><span class="required">*</span>
                                                                                    <input type="number" value="{{$allow->amount}}" class="form-control" placeholder="Allowance Amount" name="amount" required>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <label>Description: </label>
                                                                                    <textarea value="{{$allow->description}}" class="form-control" name="description">{{$allow->description}}</textarea>
                                                                                </div>
                                                                            </div><br/>
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <button type="submit" name="updatedepartment_btn" class="btn btn-md btn-info"><i class="fa fa-save"></i> Save Changes</button>
                                                                                    <button class="btn btn-md btn-danger" data-dismiss="modal">
                                                                                        <i class="ace-icon fa fa-times"></i>
                                                                                        Close
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="modal-footer no-margin-top">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $count++;
                                                        ?>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div id="messages" class="tab-pane fade">
                                        <form method="post" action="{{url('add_allowance')}}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Allowance Name:</label> <span class="required">*</span>
                                                    <input class="form-control" name="name" placeholder="Allowance Name" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Amount:</label> <span class="required">*</span>
                                                    <input class="form-control" name="allow_amount" placeholder="Amount" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Description:</label>
                                                    <textarea class="form-control" name="description" placeholder="Description"></textarea>
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