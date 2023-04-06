@extends('layouts.layout')

@section('content')
<div>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="pt-8 text-gray-900 header">
            <div>Pizzas find here</div>
{{ $name }}
{{ $age }}

            @foreach ($pizzas as $pizza)
                <div>{{ $pizza['name'] }} -- {{ $pizza['type'] }} -- {{ $pizza['price'] }}</div>
            @endforeach
        </div>

    </div>
</div>
@endsection
