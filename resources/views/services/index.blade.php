@extends('layouts.app')

@section('content')
    @if(count($services) > 0)
                @foreach($services as $service)
                        <a href="/services/{{$service->id}}">
                            <div class="card-columns pt-3">
                            <div class="card">
                                <img class="card-img-top" src="https://source.unsplash.com/random/150x150" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">{{$service->title}}</h4>
                                <p class="card-text">{{$service->body}}</p>
                                </div>
                            </div>        
                        </div>
                        </a>
                @endforeach
            @else
                <small>No Post Found!</small>
            @endif
@endsection