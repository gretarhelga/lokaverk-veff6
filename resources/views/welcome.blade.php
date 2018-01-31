@extends('layouts.app')
@section('content')

	@foreach($clothes as $clothing )
		<ul>
			<li>{{ $clothing->type }}</li>
			<li>{{ $clothing->brand }}</li>
			<li>{{ $clothing->size }}</li>
		</ul>
	@endforeach

@endsection
