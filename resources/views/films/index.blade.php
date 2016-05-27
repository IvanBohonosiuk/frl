@extends('layouts.app')

@section('keywords')
	ключ1, ключ2
@stop

@section('description')
	Описание
@stop

@section('title')
	Фильмы
@stop

@section('content')
	<div class="page-header">
        <div class="row">
          <div class="col-md-4">
            <h1>Фильмы</h1>
          </div>
          <div class="col-md-8">
            <ul id="work-filter">
              <li><a href="#" data-filter="*" class="btn btn-success ione-col">Show All</a></li>
              <li><a href="#" data-filter=".graphics" class="btn ione-col">Graphics</a></li>
              <li><a href="#" data-filter=".nature" class="btn ione-col">Nature</a></li>
              <li><a href="#" data-filter=".food" class="btn ione-col">Food</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="work">
    <div class="row">
      <div class="col-md-12">
        <div id="portfolio" class="row">
        	@foreach ($films as $item)
				
          <div class="col-md-4  work-item graphics">
            <h2> {{ $item->title }} </h2>
            <p> {{ $item->description }} </p>
            <div class="sample work-item-image-container">
              <div class="work-item-overlay">
                <div class="inner">
                  <ul>
                    <li><a rel="prettyPhoto[gallery]" href="/uploads/films/full/{{ $item->img }}" class="gallery-btn">View
                      Gallery</a></li>
                    <li><a class="detail-link" href="/film/{{ $item->url }}">View Details</a></li>
                  </ul>
                </div>
              </div>
              <img src="/uploads/films/medium/{{ $item->img }}" alt="{{ $item->title }}" /> </div>
          </div>
			@endforeach
        </div>
      </div>
    </div>
  </div>
@stop