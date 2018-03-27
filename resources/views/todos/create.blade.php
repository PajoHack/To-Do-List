@extends('layouts.app')



@section('content')

    <h1>Create Todo</h1>

    {{ Form::open(['action' => 'TodosController@store', 'method' => 'POST']) }}

    <!-- text input field -->
    {{ Form::bsText('text') }}

    {{-- text area --}}
    {{ Form::bsTextArea('body') }}

    {{-- due field --}}
    {{ Form::bsText('due') }}

    {{-- submit --}}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}

@endsection