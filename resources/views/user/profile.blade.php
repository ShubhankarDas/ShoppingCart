@extends('layouts.master')
@section('title')
Profile
@endsection
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1>{{ $user['name'] }}'s Profile </h1>
    </div>
</div>
@endsection
