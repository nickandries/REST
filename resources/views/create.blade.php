<!DOCTYPE html>
<html>
<head>
    <title>Creating evenement</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('evenement') }}">Evenement Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('evenement') }}">View All evenement</a></li>
            <li><a href="{{ URL::to('evenement/create') }}">Create a evenement</a>
        </ul>
    </nav>

    <h1>Create a evenement</h1>
    <h1>Create a evenement</h1>

    <!-- if there are creation errors, they will show here -->
    {{ Html::ul($errors->all()) }}

    {{ Form::open(array('url' => 'evenement')) }}

    <div class="form-group">
        {{ Form::label('naam', 'Naam') }}
        {{ Form::text('naam', Input::old('Naam'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('beginDatum', 'BeginDatum') }}
        {{ Form::text('beginDatum', Input::old('beginDatum'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('eindDatum', 'EindDatum') }}
        {{ Form::text('eindDatum', Input::old('eindDatum'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('klantId', 'KlantId') }}
        {{ Form::text('KlantId', Input::old('klantId'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('prijs', 'Prijs') }}
        {{ Form::text('prijs', Input::old('prijs'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the evenement!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</body>
</html>