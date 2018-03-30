@extends('layouts.app')



@section('content')

    <a href="/todo/{{ $todo->id }}" class="btn btn-default">Go Back</a>

    <h1>Edit Todo</h1>

    {{ Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) }}

    <!-- text input field -->
    {{ Form::bsText('text', $todo->text) }}

    {{-- text area --}}
    {{ Form::bsTextArea('body', $todo->body) }}

    {{-- due field --}}
    {{ Form::bsText('due', $todo->due) }}

    {{-- hidden field --}}
    {{ Form::hidden('_method', 'PUT') }}

    {{-- submit --}}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}

@endsection