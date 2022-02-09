@extends('Base')


@section('content')
<pre>
3 concession :
    {{ print_r($concessions) }}

Les factures associés :
    {{ print_r($factures) }}

</pre>
@endsection

@section('titre')
    Facade
@endsection