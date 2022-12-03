@extends('layout')
@section('title', 'اتصل بنا')
@section('Page')

<section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>اتصل بنا</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
              <li class="breadcrumb-item active" aria-current="page">اتصل بنا</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<section style="margin-top: 10px; margin-bottom: 10px;">
	<div class="col-md-12 col-lg-12">
          <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="ادخل اسمك">
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="عنوان البريد الإلكتروني ">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="الموضوع">
                </div>
              </div>
              <div class="col-lg-7">
                <div class="form-group">
                    <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="ادخل الرسالة"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-info">إرسال</button>
            </div>
          </form>
        </div>
	</section>


@endsection