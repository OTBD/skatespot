@extends('layouts.app')
@section('pageTitle', 'Admin Dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="adminpage">
            <div class="col-lg-3">
                <div class="quick-links">
                    <ul>
                        <li><i class="fa fa-globe" aria-hidden="true"></i><a href="#" id="dashboard">Dashboard</a></li>
                        <li><i class="fa fa-beer" aria-hidden="true"></i><a href="#" id="users">Users</a></li>
                        <li><i class="fa fa-map" aria-hidden="true"></i><a href="#" id="spots">Spots</a></li>
                        <li><i class="fa fa-camera" aria-hidden="true"></i><a href="#" id="crews">Crews</a></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><a href="#" id="media"> Media</a></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><a href="#" id="events"> Events</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 ">
                <div class="dashboard">
                    <div class="col-lg-4">
                        <div class="dashboard-sq orange">
                            <h5>Total Users Registered</h5>

                            <h3>{{ $users }}</h3>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dashboard-sq blue">
                            <h5>Total Spots Added</h5>
                            <h3>{{ $spots }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dashboard-sq green">
                            <h5>Total Users Registered</h5>
                            <h3>10,321</h3>
                        </div>
                    </div>
                </div>
                <div class="user-list">
                    <div class="panel panel-default">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                     <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
