@extends('layouts.app')

@section('content')
<!-- alternative way to bring in the variable (no curly braces) -->
    <h1><?php echo $title; ?></h1> 
    <p>This is the about page.</p>
@endsection


