@extends('main')

@section('content')
<style>
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vh; /* Full height */
    }
    form {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }
    label {
        display: inline-block;
        width: 100px;
    }
    .center {
        text-align: center; /* Center align content within the cell */
    }
</style>

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

<div class="text-end mb-3">
    <a href="{{ route('employee.add') }}" class="btn btn-primary">Add</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone_no }}</td>
            <td class="center">
                <a href="{{ route('employee.edit', ['id' => $row->id]) }}" class="btn btn-success">Edit</a>
                <a href="{{ route('employee.delete', ['id' => $row->id]) }}" class="btn btn-danger">Delete</a>
                <a href="{{ route('employee.view', ['id' => $row->id]) }}" class="btn btn-primary">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
