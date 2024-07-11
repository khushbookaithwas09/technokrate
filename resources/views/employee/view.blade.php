@extends('main')

@section('content')
<style>
    .employee-details {
        width: 50%;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }
    label {
        display: inline-block;
        width: 100px;
        font-weight: bold;
    }
</style>

<div class="employee-details">
    <h2>Employee Details</h2>
    <hr>
    <div>
        <label for="name">Name:</label>
        <span>{{ $employee->name }}</span>
    </div>
    <div>
        <label for="email">Email:</label>
        <span>{{ $employee->email }}</span>
    </div>
    <div>
        <label for="phone_no">Phone No:</label>
        <span>{{ $employee->phone_no }}</span>
    </div>

    <a href="{{ route('employee.list') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
