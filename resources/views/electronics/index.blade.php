@extends('layout')
@section('title', ' الالكترونيات')
@section('Page')
<link rel="stylesheet" href="css/Elec.css">
    <section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>الالكترونيات</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home.index') }}">الرئيسية</a></li>
              <li class="breadcrumb-item active" aria-current="page">الالكترونيات</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
  <section>
  <div class="container">
  <div class="row">
    <div class="col">
                @if(count($electronics) > 0)
                <ul>
               
                @foreach($electronics as $electronic)
                <a href="{{ route('electronics.show', ['electronic' => $electronic['id']]) }}">
                <li>
                <div class="card border-0" style="width: 15rem;">
                  <img class="card-img-top" src="{{ '/uploads/' . data_get($electronic,"image.0") }}" >
                  <div class="card-body">
                    <h5 class="card-title"> أسم المنتج: {{ $electronic->name }}</h5>
                    <p class="card-text"> السعر: {{ $electronic->price }} YER</p>
                  </div>
                </div>
                </li>
                </a>
                @endforeach
                </ul>
                @else
                <p>There are no Electronic to display.</p>
                @endif
    </div>
  </div>
</div>
</section>
@endsection

 

