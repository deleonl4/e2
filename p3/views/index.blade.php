@extends('templates.master')

@section('title')

<title>Project 3</title>
<meta charset='utf-8'>

@endsection

@section('content')

<h2>INSTRUCTIONS</h2>

<ul>
    <li>Player 1 (You) and Player 2 (Computer) select between items: <strong>Rock</strong>, <strong>Scissors</strong>, or <strong>Paper</strong>.</li>
    <li>The game will be a tie if both players select the same item and you will have to shoot again, otherwise:</li>
    <li><strong>Rock</strong> beats <strong>Scissors</strong></li>
    <li><strong>Scissors</strong> beats <strong>Paper</strong></li>
    <li><strong>Paper</strong> beats <strong>Rock</strong></li>
</ul>


<h2>PLAY</h2>
<form method='POST' action='/play'>
    <input type='radio' name='move' value='Rock' id='Rock'><label for='Rock'>Rock</label>
    <input type='radio' name='move' value='Scissors' id='Scissors'><label for='Scissors'>Scissors</label>
    <input type='radio' name='move' value='Paper' id='Paper'><label for='Paper'>Paper</label>

    <button class='button' type='submit'>Shoot</button>

    @if($app->errorsExist())
    <div class='error alert alert-danger'>
        @foreach($app->errors() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
</form>


@if($results)

<div class='{{ $results['win'] ? 'won' : ' lost' }}'>
    @if($results['win'])
    You WON!
    @else
    Shoot AGAIN!
    @endif

    <p>Computer shot: {{ $results['comp'] }}</p>
    <p>You shot: {{ $results['move'] }}</p>
</div>


@endif

<button class='button'><a href='/history'>Game History</a></button>

@endsection
