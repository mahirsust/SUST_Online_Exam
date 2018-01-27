@extends('layouts.dashboard')
@section('title', 'Admin desk')
@section('content')

<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title">Admin Desk</h2>
      </div>
    </div>

    <?php
        $user = Auth::user() -> type;
      ?>

      @if(Session::has('alert-success'))
      <div class="alert alert-success alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ Session::get('alert-success') }}</strong>
      </div>
      @endif
 
       @if(Session::has('alert-danger'))
      <div class="alert alert-danger alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{ Session::get('alert-danger') }}</strong>
      </div>
      @endif
 
      <div>
        <button type="submit" class="btn btn-success btn-md" data-toggle="modal" data-target="#addModal" data-whatever="@mdo">
          Assign Role To A User
        </button>
      </div>
 
      <div>
        </br>
      </div>
    <div class="content-body"><!-- Basic Tables start -->
      <div class="row">
        <div class="col-xs-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title light-blue darken-1">Admin Desk</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="display table table-bordered table-stripe table-hover" style="background-color: white;">
                  <thead>
                    <tr>
                      <th class="text-center">ID</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Role</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <?php $inc=0;  ?>
                  <tbody>
                    @foreach($data1 as $dat)

                  

                    @if($dat->user_category != "student")
                   
                    <tr>
                      <th class="text-center" scope="row">{{$inc=$inc+1}}</th>
                      <td class="text-center">{{$dat->name}}</td>
                      <td class="text-center">{{$dat->email}}</td>
                      <td class="text-center">Teacher</td>
                      <td class="text-center">
                      
                     
                        <button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#deleteModal{{$dat->id}}">Delete</button>
                      </td>
                    </tr>
             
                     <!-- modal for adding -->
                    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <strong class="modal-title" id="addModalLabel">
                              Add New Admin
                            </strong>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
             
                            <form class="form" method="POST" action="{{ url('/admin_desk/addnew')}}">
                                
                                {{ csrf_field() }}
                                
                                <div class="form-group">
                                    <label for="timesheetinput1"><h4>Email :</h4></label>
                                    <div class="position-relative has-icon-left">
                                        <input required="" type="text" id="timesheetinput1" class="form-control" name="name" 
                                        autofocus="">
                                        <div class="form-control-position">
                                            <i class="icon-mail6"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success">
                                      Save
                                    </button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of add modal -->
             
                  
                    <!-- Modal for deleting -->
                    <div class="modal fade" id="deleteModal{{$dat->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <strong class="modal-title text-center">
                              <h3>Are you sure you want to delete role of this user?</h3>
                            </strong>
                          </div>
                          <div class="modal-body col-md-offset-3">
                            <form method="POST" action="{{url('/admin_desk/delete') }}">
                              {{csrf_field()}}
                              <input type="hidden" name="id" value="{{$dat->id}}">
                              <button style="margin-left: 30px;" type="submit" class="btn btn-primary btn-md">
                                DELETE
                              </button>
                              <button style="margin-left: 10px;" type="submit" data-dismiss="modal" class="btn btn-primary btn-md">
                                CANCEL
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end of delete modal  -->
             
                    @else
                    @endif
                    @endforeach
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
<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection