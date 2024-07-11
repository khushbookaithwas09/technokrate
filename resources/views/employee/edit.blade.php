@extends('main')

@section('content')
<style>
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vh;
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
    .required-symbol {
        color: red;
    }
</style>

<div class="form-container">
    <form method="post" action="/employee/update/{{ $data->id }}">
        @csrf
        <label for="name">Name:<span class="required-symbol">*</span></label>
        <input type="text" name="name" id="name" value="{{ $data->name }}"><br/>
        @error('name')
        <span style="color: red;">{{ $message }}</span><br/>
        @enderror
        <br/>
        <label for="email">Email:<span class="required-symbol">*</span></label>
        <input type="text" name="email" id="email" value="{{ $data->email }}"><br/>
        @error('email')
        <span style="color: red;">{{ $message }}</span><br/>
        @enderror
        <br/>
        <label for="phone_no">Phone No:</label>
        <input type="number" name="phone_no" id="phone_no" value="{{ $data->phone_no }}"><br/>
        <br/><br/>
        <input type="submit" name="save"  value="Save">
    </form>
</div>
@endsection
