<!DOCTYPE html>
<html>
<head>
    <title>Edit evenement</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('evenement') }}">Evenementen</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('evenement') }}">View All Evenement</a></li>
        <li><a href="{{ URL::to('evenement/create') }}">Create a Evenement</a>
    </ul>
</nav>

<h1>Edit {{ $evenement->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($evenement, array('route' => array('evenement.update', $evenement->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('naam', 'Naam') }}
        {{ Form::text('naam', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('beginDatum', 'BeginDatum') }}
        {{ Form::text('beginDatum', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('eindDatum', 'EindDatum') }}
        {{ Form::text('eindDatum', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('klantId', 'KlantId') }}
        {{ Form::number('klantId', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('prijs', 'Prijs') }}
        {{ Form::text('prijs', null, array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the Evenement!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>