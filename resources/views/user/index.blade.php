@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Company name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>

            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->company_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td><a href='/user/{{$user->id}}'><button class="btn btn-primary">Details</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class='row '>
            <div class='col-12 d-flex justify-content-center'>
                {{$users->links() }}
            </div>
        </div>
    </div>
@endsection
