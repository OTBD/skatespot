@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="profilepage">
            <div class="col-lg-12 col-md-12">
                <div class="profile-header">
                    <img src="https://www.noupe.com/wp-content/uploads/2009/10/pattern-13.jpg" alt="">
                </div>
                <div class="profile-picture">
                    <img src="/uploads/profile_pictures/{{ $user->avatar }}" alt="">
                </div>

                <h2>{{$user->name}}'s Profile</h2>
                <form enctype="multipart/form-data" class="" action="/profile" method="post">
                    <label>update profile image</label>
                    <input type="file" name="avatar" value="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="" class="btn btn-sm btn-primary pull-right" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
