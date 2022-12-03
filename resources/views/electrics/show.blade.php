@extends('layout')
@section('title', 'المنتج')
@section('Page')

<section lang="ar" dir="rtl" >
  <div class="container" >
  <div class="row">
    <div class="col">
    <div class="card mb-3 border-0" style="width: 100%; margin: 5px;  padding:5px; background: #F1F6F7;">
  <div class="row g-0">
    <div class="col-md-4">




      @if(count(data_get($electric,'image')??[]))
      @foreach(data_get($electric,'image') as $image)
        <img src="{{ '/uploads/' . $image }}" class="img-fluid rounded-start" style="padding: 5px;">
      @endforeach
      @endif

    </div>
    <div class="col-md-8">
      <div class="card-body" style="padding: 5px;">
        <h5 class="card-title" style="float: right;">أسم المنتج: {{ $electric['name'] }}</h5>
        <p class="card-text" style="font-weight: bold;  margin-top: 15px; float: right;">الوصف: {{ $electric['disc'] }}</p>
        <p class="card-text" style="color: blue; font-weight: bold; float: right;">السعر: {{ $electric['price'] }} YER </p>
      </div>
    </div>
    <a href='#'  class="btn btn-outline-info btn-lg btn-block"  style="cursor: pointer; border: none; margin: 10px; font-weight: bold;">إضافة الى السلة</a>
  </div> 
</div>   
</div>
<div class="row">
    <div class="col">
      <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
    <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">التصنيفات</a>
                <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="#"> الالكترونيات ⌚</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('electrics.index') }}">الكهربائيات ⚡</a></li>
                  <li class="nav-item"><a class="nav-link" href="#"> الادوات المنزلية 🏠</a></li>
                  <li class="nav-item"><a class="nav-link" href="#"> الطبية 🏥</a></li>
                  <li class="nav-item"><a class="nav-link" href="#"> الجديد🤩 </a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Shopping Cart</a></li>
                </ul>
							</li>
              </ul>
    </div>
  </div>
</div>
</section>
@endsection