@extends("master")
@section("content")
<section class="banner-section-2">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
          <h2 class="page-title">
          Partnyorlar
          </h2>
          <ul class="list">
            <li class="item"><a href="{{route('index')}}">Ana səhifə</a></li>
            <li class="item"><a href="{{route('Mainpartnyrolar')}}" class="active">Partnyorlar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

 
  
  
 



  <section class="partners-section my-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="partners-carousel owl-carousel  owl-theme">
              @foreach($ppartnyor as $ppartnyors)
              <div class="slider-item">
                <a href=""> <img class="img-fluid" src="{{asset('/Ppartnyorlarimage/'.$ppartnyors->image)}}" alt="partners_img"></a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection