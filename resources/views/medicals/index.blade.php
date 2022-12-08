@extends('layout')
@section('title', ' الطبية')
@section('Page')
<link rel="stylesheet" href="css/Elec.css">
    <section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>الطبية</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home.index') }}">الرئيسية</a></li>
              <li class="breadcrumb-item active" aria-current="page">الطبية</li>
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
                @if(count($medicals) > 0)
                <ul>
            
                @foreach($medicals as $medical)
                <a href="{{ route('medicals.show', ['medical' => $medical['id']]) }}">
                <li>
                <div class="card border-0" style="width: 15rem;">
                  <img class="card-img-top" src="{{ '/uploads/' . data_get($medical,"image.0") }}" >
                  <div class="card-body">
                    <h5 class="card-title">  {{ $medical->name }}</h5>
                    <p class="card-text"> السعر: {{ $medical->price }} YER</p>
                  </div>
                </div>
                </li>
                </a>
                @endforeach
                </ul>
                @else
                <p>There are no Medical to display.</p>
                @endif
    </div>
  </div>
</div>
</section>
@endsection

 

