@extends('templates.master')

@section('title')
Round Details
@endsection

@section('content')

<h2> ROUND DETAILS </h2>

<ul>
    <li><strong>Player Move:</strong> {{ $round['move']}}</li>
    <li><strong>Results:</strong> {{ $round['win'] == 1 ? 'Player won' : 'Player lost' }}</li>
    <li><strong>Time:</strong> {{ $round['time']}} </li>
</ul>

@endsection
