<!DOCTYPE html>
<html>
<head>
    <title>Evenement beheer</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('evenement') }}">Evenementen</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('evenement') }}">View All Evenementen</a></li>
        <li><a href="{{ URL::to('evenement/create') }}">Create a Evenement</a>
    </ul>
</nav>

<h1>All the Evenementen</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Naam</td>
            <td>beginDatum</td>
            <td>eindDatum</td>
            <td>klantId</td>
            <td>prijs</td>
        </tr>
    </thead>
    <tbody>
    @foreach($evenement as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->naam }}</td>
            <td>{{ $value->beginDatum }}</td>
            <td>{{ $value->eindDatum }}</td>
            <td>{{ $value->klantId }}</td>
            <td>{{ $value->prijs }}</td>


            <td>


                <a class="btn btn-small btn-success" href="{{ URL::to('evenement/' . $value->id) }}">Show this evenement</a>


                <a class="btn btn-small btn-info" href="{{ URL::to('evenement/' . $value->id . '/edit') }}">Edit this evenement</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>