<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Employee Information|  {{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:lightblue">
    <div class="container mt-5 card"  style="padding:32px;">
        <h1 class="text-primary mt-3 mb-4 text-center"><b>Employee Information</b></h1>
        @yield('content')
    </div>
</body>
</html>
