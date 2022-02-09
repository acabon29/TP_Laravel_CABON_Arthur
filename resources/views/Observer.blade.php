@extends('Base')


@section('content')
    {{ $sujet->showAll() }}
@endsection

@section('titre')
    Aggregation
@endsection