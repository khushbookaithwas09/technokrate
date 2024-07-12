@extends('main')
@section('content')

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
            <th>Contact</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->phone_no }}</td>
            <td>
                <a href="{{ route('employee.edit', ['id' => $row->id]) }}" class="btn btn-success">Edit</a>

                <form id="delete-form-{{ $row->id }}" action="{{ route('employee.delete', ['id' => $row->id]) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete {{ $row->name }}?')">Delete</button>
                </form>

                <a href="{{ route('employee.view', ['id' => $row->id]) }}" class="btn btn-primary">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
