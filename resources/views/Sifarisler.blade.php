@extends("master")
@section("content")
<section class="banner-section-2">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
          <h2 class="page-title">
          Sifarisler
          </h2>
          <ul class="list">
            <li class="item"><a href="{{route('index')}}">Ana səhifə</a></li>
            <li class="item"><a href="{{route('Mainsifarisler')}}" class="active">Sifarisler</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

 
  
  <section class="about-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="about-content text-center">
            <h2 class="title">{{$comment->basliq}}</h2>
            <p>{{$comment->mezmun}}</p>
          </div>
          
            <div class="owl-carousel video-carousel owl-theme">
              @foreach($order as $orders)
              <div class="slider-item">
                <div class="video-content">
                  <a href="https://www.youtube.com/embed/0Pph52PJEP0" data-lity>
                    <img class="img-fluid" src="{{asset('/Sifarisimage/'.$orders->image)}}" alt="video-bg-img">
                    <div class="video-play-button"><i class="fa-solid fa-play"></i>
                    </div>
                  </a>
              </div>
              </div>
              @endforeach
            
            </div>
            
            
          
           </div>
           </div>
    </div>
  </section>
 



  

@endsection

