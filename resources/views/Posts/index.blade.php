@extends('layouts.app')

@section('content')
  <h1 class="articles-title">ARTICLES</h1>
  @if(count($posts) > 0)
        
        @foreach($posts as $post)
        @if ( $post === $posts[0] )
        <div class="articles-flex-box">
          <div data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1500">

              <div class="articles-image">
                <img  class="image-size" src="/storage/cover_images/{{$post->cover_image}}" alt="">
              </div>
          </div>
          <div data-aos="fade-up"
                data-aos-duration="3000">
          <div class="articles-content">
            <small class="articles-small-text" style="margin-top: 80px;">Author / Justas Jaskunas</small>
            <h3 style="margin-top: 120px;"><a href="/posts/{{$post->id}}" class="articles-post-title">{{$post->title}}</a></h3>
            <div class="main-button" style="margin-top: 80px; text-align: center;">
              <a href="/posts/{{$post->id}}" >READ MORE <i class="fas fa-arrow-right" style="width: 140px;"></i></a>
            </div>
          
          </div>
        </div>
      </div>

          <h2 style="text-align: center; margin: 64px; font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;">LATEST ARTICLES</h2>
        @else 
    <div data-aos="fade-up"
     data-aos-duration="2000">

      <div class="flexbox-cards">
          <div class="card-image">
            <img class="second-card-image" src="/storage/cover_images/{{$post->cover_image}}" alt="">
          </div>
          <div class="card-content">
            <small class="card-small-text">Author / Justas Jaskunas</small>
            <h3><a href="/posts/{{$post->id}}" style="text-decoration: none; color:black; margin-top: 40px;">{{$post->title}}</a></h3>
          </div>
        </div>
    </div>
        @endif
          
        @endforeach
  
  @else

  @endif
@endsection

<style>
  .flexbox-cards {
    text-align: center; 
    margin-top: 50px; 
    height: 300px; 
    width: 100%;
    justify-content: center; 
    display: flex;
  }

  .second-card-image {
    width: 360; 
    height: 240px; 
    object-fit: cover;
  }

  .card-content {
    width: 480px; 
    text-align: left; 
    margin-top: 24px; 
    margin-left: 58px;
  }

  .card-small-text {
    font-size: 12px; 
    font-weight: 400; 
    line-height: 1.5;
    text-transform: uppercase;
  }

  .articles-title {
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
    font-size: 40px;
    margin: 60px;  
  }

  .articles-content {
    padding: 14px;
    text-align: center;
  }

  .articles-flex-box {
    display: flex;
    background-color: #f7f7f7;
  }


  .articles-small-text {
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    text-transform: uppercase;
    
  }

  .articles-post-title {
    text-decoration: none;
    color: black;
    font-size: 44px;
    padding: 14px 0px 14px 30px;
    
  }

  a.articles-post-title:hover {
    text-decoration: none;
    color: black;
    
  }

  .image-size {
    width:620px; 
    height: 720px;
    object-fit: cover;
  }
</style>