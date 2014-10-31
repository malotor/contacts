@extends('layout')

@section('content')
  <h1>Contacts</h1>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
            Search
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
          <form id="form_search" class="form-horizontal" role="form" method="post">
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="gender" class="col-sm-2 control-label">Gender</label>
              <div class="col-sm-10">

                <select class="form-control" id="gender" placeholder="Gender">
                  <option value="" defaulselected></option>
                  <option value="female">Female</option>
                  <option value="male">Male</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button id="do_search" type="submit" class="btn btn-default">Go!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <table id="table_search" class="table table-bordered table-hover">

    <thead>
      <th>Picture</th>
      <th>Name</th>
      <th>Age</th>
      <th>Email</th>
      <th>Sexo</th>
      <th>Balance</th>
    </thead>
    <tbody>

    </tbody>
  </table>
  <div class="modal fade" id="contact_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Contact Details</h4>
        </div>
        <div id="contact_detail_body" class="modal-body row-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@stop