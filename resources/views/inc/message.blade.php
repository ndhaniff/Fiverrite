@if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="m-0 alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
        </button>
        {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div class="m-0 alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
        </button>
    {{session('success')}}
        </div>
@endif

@if(session('error'))
    <div class="m-0 alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
        </button>
    {{session('error')}}
</div>
@endif