@extends('layout')
@section('content')
    <div class="container">
        <table class="table" border="1">
        <thead>
            <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $usr_info)
            <tr>
            <th>{{$usr_info->first_name}}</th>
            <td>{{$usr_info->last_name}}</td>
            <td>{{$usr_info->email}}</td>
            <td>{{$usr_info->phone_number}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
@endsection