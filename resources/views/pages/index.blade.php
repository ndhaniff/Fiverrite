@extends('layouts.app') 

    @section('content')
    @include('inc.hero')
        <div class="container text-center">
            <span class="heading m-0"><strong>Buy</strong>, <strong>Sell</strong> or <strong>Request</strong> services from <strong>RM 5</strong></span>
            <a href="#" class="mb-2 ml-2 btn btn-outline-secondary">Getting Started</a>
            <section class="services-loop row">
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
            </section>
    </div>

    @endsection