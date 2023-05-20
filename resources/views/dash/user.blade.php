
    @extends('dash.layouts.master')
    @section('title')
    USER
    @stop

    @section('css')
    @endsection

    @section('content')

    <div class="panel-header panel-header-sm pb-5">
    </div>

        <table class="table table-hover table-borderless table-sm table-primary m-1">
        <tr>
          <th>Name</th>
          <th>Last name</th> 
          <th>email</th>
          <th>role</th> 
          <th>phone</th> 
          <th>postalZip</th> 
          {{-- <th>adresse</th>  --}}
          {{-- <th>Details</th> --}}
        </tr>
        @foreach ($users as $user)
        {{-- <a href="userDetails/{{$user->id}}"> --}}
          <tr onclick='window.location.href="userDetails/{{$user->id}}"'>
          <td>{{$user->firstName}} </td>
          <td>{{$user->lastName}}</td> 
          <td>{{$user->email}}</td>
          <td>{{$user->role}}</td> 
          <td>{{$user->phone}}</td> 
          <td>{{$user->postalZip}}</td> 
          {{-- <td>{{$user->adresse}}</td>  --}}
          {{-- <td>Details</td> --}}
        </tr>
      {{-- </a> --}}
        @endforeach
      </table>  
      {{$users->links()}}
      </div>
      
  @endsection

  @section('scripts')

  @endsection
