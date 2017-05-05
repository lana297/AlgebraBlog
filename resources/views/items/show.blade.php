@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<h2>{{ $item ->title }}</h2>
			<p>{{$item->created_at}}</p>
			<div>{{ $item->content}}</div>
		</div>
	</div>
</div>
@endsection