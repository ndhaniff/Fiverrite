@extends('layouts.app') 
@section('content')
@include('auth.profiles.profilenav')
<div class="card container p-5">
    <h2 class="display-5 form-title text-left">Create A Service</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" placeholder="I will" required>
            </div>
            <div class="form-group col-md-4">
                <label for="title">For</label>
                <div class="input-group">
                    <span class="input-group-addon">RM: </span>
                    <input name="title" type="number" class="form-control" placeholder="0.00" min="1" step="any" required>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="categories">Category</label>
                <select name="categories" class="form-control" required>
                    <option selected>Graphic Design</option>
                    <option value="1">Digital Marketing</option>
                    <option value="2">Writing & Translation</option>
                    <option value="3">Music&Audio</option>
                    <option value="4">Video & Animation</option>
                    <option value="5">Programming & Tech</option>
                    <option value="6">Business & Advertising</option>
                </select>
            </div>
            <div class="form-group col-md-7">
                <label for="videourl">Video URL</label>
                <input type="url" class="form-control" name="videourl" aria-describedby="helpBlock">
                <small id="helpBlock" class="form-text text-muted">This field is optional</small>
            </div>
        </div>
    </form>
</div>
@endsection