@extends('layouts.app')
@section('content')

	@foreach($hoodies as $hoodie )
		<ul>
			<li>{{ $hoodie->type }}</li>
			<li>{{ $hoodie->brand }}</li>
			<li>{{ $hoodie->size }}</li>
		</ul>
	@endforeach

@endsection
