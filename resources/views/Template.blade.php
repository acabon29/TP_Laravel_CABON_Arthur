@extends('Base')


@section('content')
    {{ $voiture1->getText() }}<br>
    {{ $voiture2->getText() }}
@endsection

@section('titre')
    Aggregation
@endsection