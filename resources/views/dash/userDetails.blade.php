
@extends('dash.layouts.master')
@section('title')
User
@stop
@section('css')
@endsection

@section('content')

    <div class="panel-header panel-header-sm">      
    </div>
    <div class=" ml-5">
        <h3>client numero: {{$user->id}}</h3>
        <ul class="list-group list-group-flush mx-auto" style="display:block;background-color:transparent;width:600px;">
            <li class="list-group-item"><b>Name : {{$user->firstName}}</b></li>
            <li class="list-group-item"><b>Last Name : {{$user->lastName}}</b></li>
            <li class="list-group-item"><b>Email : {{$user->email}}</b></li>
            <li class="list-group-item"><b>Phone : {{$user->phone}}</b></li>
            <li class="list-group-item"><b>Adress : {{$user->adresse}}</b></li>
            <li class="list-group-item"><b>Postal zip : {{$user->postalZip}}</b></li>
        </ul>
    </div>
    @endsection

      @section('scripts')

      @endsection
