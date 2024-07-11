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
    <form method="POST" action="/employee/store">
        @csrf

        <label for="name">Name:<span class="required-symbol">*</span></label>
        <input type="text" name="name" id="name"><br/>
        @error('name')
        <span style="color: red;">{{ $message }}</span><br/>
        @enderror
        <br/>
        <label for="email">Email:<span class="required-symbol">*</span></label>
        <input type="text" name="email" id="email"><br/>
        @error('email')
        <span style="color: red;">{{ $message }}</span><br/>
        @enderror
        <br/>
        <label for="number">Phone No:</label>
        <input type="number" name="number" id="number"><br/>
        <br/><br/>
        <input type="submit" name="save" value="Save">
    </form>
</div>
@endsection
