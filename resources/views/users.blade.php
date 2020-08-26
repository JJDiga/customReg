@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                  <tr>
                  <td>{{$user->name}}</td> 
                  <td> {{$user->email}} </td>
                  </tr>
                  
                  @endforeach
                </tbody>
                
              </table>
             
        </div>
    </div>
</div>
@endsection
