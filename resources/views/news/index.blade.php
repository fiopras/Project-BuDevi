@extends('layouts.master')

@section('title','News')

@section('container')

<section class="home-slider  inner-page owl-carousel">
    <div class="slider-item" style="background-image: url('frontend/img/slider-1.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center text-center">
          <div class="col-md-7 col-sm-12 element-animate">
            <h1>Blog</h1>
          </div>
        </div>
      </div>

    </div>


  </section>
  <!-- END slider -->

<section class="section bg-light">
    <div class="container">
        <div class="row">
            @foreach($post as $ps)
        <div class="col-lg-4 col-md-6 element-animate">
          <div class="media d-block media-custom text-left">
            {{-- <img src="frontend/img/work_thumb_1.jpg" alt="Image Placeholder" class="img-fluid"> --}}
            <img src="{{ asset($ps->gambar) }}" alt="Image Placeholder" class="img-fluid" >
            <div class="media-body">
              <span class="meta-post">January 7, 2018 </span>
              <h3 class="mt-0 text-black"><a href="#" class="text-black">{{ $ps->judul }}</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              <p class="clearfix">
                <a href="#" class="float-left">Read more</a>
                <a href="#" class="float-right meta-chat"><span class="ion-chatbubble"></span> 8</a>
              </p>
            </div>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center mb-5">
          <h2 class="text-uppercase heading border-bottom mb-4">Testimonial</h2>
          <p class="mb-0 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 element-animate">
          <div class="media d-block media-testimonial text-center">
            <img src="frontend/img/person_1.jpg" alt="Image placeholder" class="img-fluid mb-3">
            <p>Jane Doe, <a href="#">XYZ Inc.</a></p>
            <div class="media-body">
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>
              </blockquote>

            </div>
          </div>
        </div>

        <div class="col-md-6 element-animate">
          <div class="media d-block media-testimonial text-center">
            <img src="frontend/img/person_3.jpg" alt="Image placeholder" class="img-fluid mb-3">
            <p>John Doe, <a href="#">XYZ Inc.</a></p>
            <div class="media-body">
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.&rdquo;</p>
              </blockquote>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="container cta-overlap">
    <div class="text d-flex">
      <h2 class="h3">Contact Us For Projects or Need a Quotations</h2>
      <div class="ml-auto btn-wrap">
        <a href="get-quote.html" class="btn-cta btn btn-outline-white">Get A Quote</a>
      </div>
    </div>
  </section>
  <!-- END section -->









@endsection
