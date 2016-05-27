@extends('layouts.app')

@section('title')
	Проекти
@stop

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h2>Категорії</h2>
			</div>
			<div class="col-md-9">
				<h2>Список проектів</h2>
				@foreach ($project as $item)
				<div class="prj">
					<a href="/projects/{{$item->id}}/{{ $item->title }}.html">{{ $item->title }}</a>
					<div class="meta">
						
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@stop