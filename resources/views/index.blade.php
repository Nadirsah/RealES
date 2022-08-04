@extends("master")
@section("content")
   <main>
    <section class="banner">
      <div class="banner-carousel owl-carousel owl-theme">
        @foreach($data as $baza)
        <div class="slider-item" style="background-image:url(' {{asset('/Eslideimage/'.$baza->image)}}');">
          <!-- <div class="slider-item" style="background-image: url(' {{asset('res_style/images/1.jpg')}}');">
            <div class="slider-item" style="background-image:url(' {{asset('res_style/images/1.jpg')}}');"> -->
            </div>
@endforeach
          </div>
        </div>
    </section>
    <section class="category-section">
      <div class="container">
        <div class="row">
          <!--  -->
          <div class="col-lg-12 ">
            <div class="section-title">
              <h2>ƏMLAK SİFARİŞLƏRİ</h2>
              <h3>ƏMLAK SİFARİŞLƏRİ</h3>
            </div>
          </div>
          <div class="col-12 ">
            <div class="owl-carousel owl-theme category-carousel">
              @foreach($basa as $veri)
              <div class="single-item">
                <div class="content">
                  <div class="image">
                    <img src="{{asset('/Emlaksifarisimage/'.$veri->image)}}"alt="category-img">
                  </div>
                  <div class="text-content">
                    <a href="">{{$veri->text}}</a>
                  </div>
                </div>
              </div>
              @endforeach
            
            </div>
          </div>
          <!--  -->
        </div>
      </div>
    </section>
    <section class="about">
      <div class="container">
        <div class="row">
          <div class="col-12 justify-content-center d-flex">
            <div class="section-title">
              <h2> Haqqımızda</h2>
              <h3>Haqqımızda</h3>
            </div>
          </div>
          <div class="col-lg-5 mb-5 col-12 d-flex justify-content-center">
            <div class="about-image">
              <img class="img-fluid" src="{{asset('/haqqimizdaimage/'.$item->image)}}"  alt="about_img">
            </div>
          </div>
          <div class="col-lg-7 col-12 d-flex justify-content-center">
            <div class="about-info">
              <p class="about-text">
               {{$item->text}}
              </p>
             
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="testimonial-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>MÜŞTƏRİ RƏYLƏRİ</h2>
              <h3>MÜŞTƏRİ RƏYLƏRİ</h3>
            </div>
          </div>
          <div class="col-12 p-0">
            <div class="testimonial-carousel owl-carousel owl-theme">
              @foreach($rey as $reys)
              <div class="slider-item">
                <div class="content">
                  <div class="author-info d-flex">
                    <div class="image"><img src="{{asset('/reylerimage/'.$reys->image)}}" 
                   
                        style="width: 70px;" alt="img"></div>
                    <h6 class="name">{{$reys->name}}</h6>
                  </div>
                  <div class="text">{{$reys->comment}}</div>

                </div>
              </div>
            @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="partners-section my-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="partners-carousel owl-carousel  owl-theme">
              @foreach($partnyor as $partnyors)
              <div class="slider-item">
                <a href=""> <img class="img-fluid" src="{{asset('/Partnyorlarimage/'.$partnyors->image)}}" alt="partners_img"></a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection