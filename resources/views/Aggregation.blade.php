@extends('Base')


@section('content')
    @while($agg->hasnext()) {
        $agg->next();
    }
@endsection

@section('titre')
    Aggregation
@endsection