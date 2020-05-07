@extends('layouts.app')

@section('content')

  

  <div class="sample-header" style="height: 640px;">
    <div class="sample-header-section">
      

    </div>
  </div>
  <div class="sample-section-wrap">
    <div class="sample-section">
      <div class="sample-text-list">
          <div class="sample-text-list-box">
            <small class="sample-small-text">Project</small>
            <h4 class="sample-header-title">{{$post->title}}</h4>
          </div>

          <div class="sample-text-list-box">
            <small class="sample-small-text">Author</small>
            <h4 class="sample-header-title">Justas Jaskunas</h4>
          </div>

          <div class="sample-text-list-box">
            <small class="sample-small-text">Social Media</small>
            <span class="sample-header-icons">
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-facebook" style="margin-left: 6px;"></i></a>
              <a href="#"><i class="fab fa-twitter" style="margin-left: 6px;"></i></a>
            </span>
          </div>

          <div class="sample-text-list-box">
            <small class="sample-small-text">Photographer</small>
            <h4 class="sample-header-title">Monika Selenyte</h4>
          </div>

          <div class="sample-text-list-box">
            @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit"><i class="far fa-edit"></i></a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ''])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('DELETE', ['class' => ' delete-button',])}}
            {!!Form::close()!!}
          </div>
    @endif
  @endif
      </div>
      
      <div class="sample-text-body">
        <p class="text-article" style="margin-left: 140px; width: 600px;">{{$post->body}}</p>
      </div>
    </div>
  </div> 
<style>

   .fa-edit{
    color: black;
    opacity: 0.85;
    font-size: 1.4rem;
    font-weight: 400;
}
.fa-edit:hover {
    opacity: 1;
    color: black;
}


.sample-text-list-box {
  display: grid;
  margin-top: 20px;
}

.sample-header-icons a {
    color: black;
    opacity: 0.85;
    font-size: 1.4rem;
    font-weight: 400;
}
.sample-header-icons a:hover {
    opacity: 1;
    color: black;
}



  .delete-button {
    margin-top: 40px;
    text-decoration: none;
    color: 17150E;
    border: 0.6px solid #17150E;
    background-color: transparent;
    padding: 12px;
    width: 120px;
    font-weight: 100;
    font-size: 14px;
  }

  .delete-button:hover {
    opacity: 0.4;
  }
  .sample-header-title {
    font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;

  }
  .sample-small-text {
    color:gray;
    font-size: 16px;
    margin-right: 40px;
    margin-bottom: 6px;
  }

  p::first-letter {
  font-size: 400%;
  color: black;
  font-family: 'Goudy Bookletter 1911', serif;
  padding: 24px;

}

.text-article {
  font-size: 18px;
  font-weight: 200;
  width: 500px;
  
}

  .webmadewell {
  background-color: white;
}
body {
  margin: 0;
}

.sample-header {
  height: 40px;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  background-image: url("/storage/cover_images/{{$post->cover_image}}");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  
}
.sample-header::before {
  content: "";
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: MidnightBlue;
  opacity: 0.3;
}
.sample-header-section {
  height: 600px;
  position: relative;
  padding: 15% 0 10%;
  max-width: 640px;
  margin-left: auto;
  margin-right: auto;
  color: white;
  text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
}

.sample-section-wrap {
  position: relative;
  background-color: white;
}
.sample-section {
    position: relative;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
  display: flex;

  
}




</style>





  
@endsection