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

                <select class="form-control" placeholder="Gender">
                  <option class="female">Female</option>
                  <option class="male">Male</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button id="do_search" type="button" class="btn btn-default">Go!</button>
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
      <th>Balance</th>
      <th>Email</th>
    </thead>
    <tbody>
      @if (is_array($contacts))

        @foreach ($contacts as $contact)
        <tr>
          <td><img src="{{ $contact->picture }}"></td>
          <td><a href="{{ url('contact_detail/'.$contact->guid) }}" class="openModal">{{ $contact->name }}</a></td>
          <td>{{ $contact->age }}</td>
          <td>{{ $contact->balance }}</td>
          <td>{{ $contact->email }}</td>
        </tr>

        @endforeach

      @else
        <div class="message">No contacts</div>
      @endif
    </tbody>
  </table>
  <div class="modal fade" id="contact_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Contact Details</h4>
        </div>
        <div id="contact_detail_body" class="modal-body">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@stop