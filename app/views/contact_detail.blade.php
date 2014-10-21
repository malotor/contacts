@extends('layout')

@section('content')
<img src="{{ $contact->picture }}">
{{ $contact->picture }}
{{ $contact->isActive }}
{{ $contact->balance }}
{{ $contact->age }}
{{ $contact->balance }}
{{ $contact->name }}
{{ $contact->gender }}
{{ $contact->company }}
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