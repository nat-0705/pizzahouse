@extends('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="title m-b-mb">
        Pizza List

        @foreach($pizzas as $pizza)
            <div>
                {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
            </div>
        @endforeach
    </div>
</div>
@endsection