@extends('layouts.app')
  @section('content')
  <div class="container">
    <div class="landing">
      
        <div class="intro">
          <div data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500">
          
            <h1>Release / <span class="title-effect">Your</span> / Creativity </h1>
          </div>
          <br>
          <div data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine"
                data-aos-duration="1500">

            <h2><span class="quotes">“</span>Surrealism is destructive, but it destroys only what it considers to be shackles limiting our vision.<span class="quotes">“</span> </h2>
            <p class="author-name">― Salvador Dali</p>
            </div>
            <div class="main-button">
              <a href="">JOIN OUR COMMUNITY <i class="fas fa-arrow-right"></i></a>
            </div>
          
        </div>
      
      <div class="distortion">
        
      </div>
    </div>
  </div>
  <div class="newsletter">
    @include('.shared.newsletter')
  </div>
  @endsection