@extends("master")
@section("content")
<section class="banner-section-2">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
          <h2 class="page-title">
            Haqqımızda
          </h2>
          <ul class="list">
            <li class="item"><a href="{{route('index')}}">Ana səhifə</a></li>
            <li class="item"><a href="{{route('Mainhaqqimizda')}}" class="active">Haqqımızda</a></li>
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
            <h2 class="title">{{$data->basliq}}</h2>
            <p>{{$data->text}}</p>
          </div>
        <div class="video-content d-flex justify-content-center">
            <a class="video-link"  href="https://www.youtube.com/embed/0Pph52PJEP0" data-lity><img src="{{asset('/Aboutimage/'.$data->video)}}" style="width: 600px;" alt="vifr-bg-img"><div class="video-play-button"><i class="fa-solid fa-play"></i></div></a>
      </div>
      </div>
      </div>
    </div>
  </section>
  
  <section class="section-one">
    <div class="container">
      <div class="row px-5">
        @foreach($gosterici as $gostericis)
        <div class="col-lg-4 col-sm-6 col-12 mb-5">
          <div class="single-item">
            <img src="{{asset('/Gostericiimage/'.$gostericis->image)}}" alt="">
            <h4 class="item-title">{{$gostericis->text}}</h4>
            <span class="count"> {{$gostericis->eded}}</span>
          </div>
          </div>

          @endforeach
         <!-- <div class="col-lg-4 col-sm-6 col-12 mb-5">
          <div class="single-item">
            <img  src="{{asset('res_style/./images/icons/Group 567.png')}}"alt="">
            <h4 class="item-title">İş təcrübəmiz</h4>
            <span class="count">5 il</span>
          </div>
         </div>
          <div class="col-lg-4 col-sm-6 col-12 mb-5">
            <div class="single-item">
              <img  src="{{asset('res_style/./images/icons/Group 568.png')}}" alt="">
              <h4 class="item-title">Uğurlu əməliyyyatlar</h4>
              <span class="count">100+</span>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <section class="gallery-section">
    <div class="container">
      <div class="row">
      
        <div class="owl-carousel gallery-carousel owl-theme">
        @foreach($gallery as $gallerys)
        <div class="slider-item">
          
          <img src="{{asset('/Galleryimage/'.$gallerys->image)}}" alt="">
        </div>
        @endforeach
        </div>
        
      </div>
    </div>
  </section>




  <section class="partners-section my-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="partners-carousel owl-carousel  owl-theme">
              @foreach($hpartnyor as $hpartnyors)
              <div class="slider-item">
                <a href=""> <img class="img-fluid" src="{{asset('/Hpartnyorlarimage/'.$hpartnyors->image)}}" alt="partners_img"></a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection