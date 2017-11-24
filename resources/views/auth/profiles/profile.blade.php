@extends('layouts.app') 
@section('content')
@include('auth.profiles.profilenav')
<div class="card container px-0">
 <h3 class="card-header">Profile</h3>
    <div class="row p-5">
            <div class="col-md-4">
                <img style="border-radius:50%" width="200px" height="200px" src="{{$user['avatar']}}" alt="">
            </div>
             <div class="col-md-8 p-5">
                <h3><strong>{{$user['name']}}</strong> </h3>
                <p><strong>{{$user['country']}}</strong></p>
                <p><strong>Last Login&nbsp;</strong>{{$user['last_login']}}</p>
                <p><strong>Description:&nbsp;</strong>{{$user['description']}}</p>
                <p><strong>Role:&nbsp;</strong>{{$user['role']}}</p>
                
                <p><strong>Address:&nbsp;</strong>{{$user['address']}}</p>
             </div>

            <ul class="">
            @foreach($user['services'] as $service)
                <li class=" card p-3">
                    <h4 class="card-title">{{$service->title}}</h4>
                    <p class="card body">{{$service->body}}</p>
                </li>
            @endforeach
            </ul>
    </div>
</div>
@endsection
