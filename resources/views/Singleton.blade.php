@extends('Base')


@section('content')
<h1>
    test 
    {{ $a->increment()}} 
    {{ $b->increment()}} 
    {{ $a->increment()}}
</h1>
@endsection