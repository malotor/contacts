@extends('layout')

@section('content')

  <div class="card ">
    <div>
      <div class="card__label col-xs-12 col-sm-4">Picture</div>
      <div class="col-xs-12 col-sm-8"><img src="{{ $contact->picture }}"></div>
    </div>
    <div>
      <div class="card__label col-xs-12 col-sm-4">Name</div>
      <div class="col-xs-12 col-sm-8">{{ $contact->name }}</div>
    </div>

    <div>
      <div class="card__label col-xs-12 col-sm-4">Balance</div>
      <div class="col-xs-12 col-sm-8">{{ $contact->balance }}</div>
    </div>

    <div>
      <div class="card__label col-xs-12 col-sm-4">Gender</div>
      <div class="col-xs-12 col-sm-8">{{ $contact->gender }}</div>
    </div>


    <div>
      <div class="card__label col-xs-12 col-sm-4">Company</div>
      <div class="col-xs-12 col-sm-8">{{ $contact->company }}</div>
    </div>

    <div>
      <div class="card__label col-xs-12 col-sm-4">¡</div>
      <div class="col-xs-12 col-sm-8"></div>
    </div>

    <div>
      <div class="card__label col-xs-12 col-sm-4">¡</div>
      <div class="col-xs-12 col-sm-8"></div>
    </div>

  </div>


{{ $contact->picture }}
{{ $contact->isActive }}

{{ $contact->age }}
{{ $contact->balance }}
{{ $contact->name }}


{{ $contact->email }}
{{ $contact->phone }}
{{ $contact->address }}
{{ $contact->registered }}

{{ $contact->latitude }}
{{ $contact->longitude }}


@if (is_array($contact->tags))
  <ul>
    @foreach ($contact->tags as $tag)
    <li>{{ $tag }}</li>
    @endforeach
  </ul>
@endif

@if (is_array($contact->friends))
<ul>
  @foreach ($contact->friends as $friend)
  <li>{{ $friend->name }}</li>
  @endforeach
</ul>
@endif

@stop