@extends('layout')

@section('content')

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
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" placeholder="Name">
            </div>
          </div>
          <div class="form-group">
            <label for="gender" class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="gender" placeholder="Gender">
            </div>
          </div>>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Go!</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>



  <table class="table table-bordered table-hover">

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
          <td><img src="{{ $contact->getPicture() }}"></td>
          <td><a href="#detail">{{ $contact->getName() }}</a></td>
          <td>{{ $contact->getAge() }}</td>
          <td>{{ $contact->getBalance() }}</td>
          <td>{{ $contact->getEmail() }}</td>
        </tr>

        @endforeach

      @else
        <div class="message">No contacts</div>
      @endif
    </tbody>
  </table>
@stop