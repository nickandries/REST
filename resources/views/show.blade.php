<!DOCTYPE html>
<html>
<head>
    <title>Show evenement</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('evenement') }}">Evenementen beheer</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('evenement') }}">View All evenementen</a></li>
            <li><a href="{{ URL::to('evenement/create') }}">Create a evenementen</a>
        </ul>
    </nav>

    <h1>Showing {{ $evenement->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $evenement->name }}</h2>
        <p>
            <strong>beginDatum:</strong> {{ $evenement->beginDatum }}<br>
            <strong>eindDatum:</strong> {{ $evenement->eindDatum }}<br>
            <strong>klantId:</strong> {{ $evenement->klantId }}<br>
            <strong>prijs:</strong> {{ $evenement->prijs }}
        </p>
    </div>

</div>
</body>
</html>