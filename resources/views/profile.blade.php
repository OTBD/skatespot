@extends('layouts.app')
@section('pageTitle', 'Profile')
@section('content')
<div class="container">
    <div class="row">
        <div class="profilepage">
            <!-- <div class="col-lg-12 col-md-12">
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
            </div> -->

            <div class="col-lg-12">
                <div class="col-lg-3">
                    <div class="profile-picture">
                        @if(Auth::check() && Auth::user())

                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        @endif
                        <img src="/uploads/profile_pictures/{{ $user->avatar }}" alt="">
                        <div class="profile-name">
                            <h5><b>{{$user->username}}</b></h5>
                        </div>
                        <div class="profile-location">
                            <h5>{{$user->location}}</h5>
                        </div>
                        <div class="profile-type">
                            <h5>{{$user->skate_type}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="profile-header">
                        <img src="#" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
