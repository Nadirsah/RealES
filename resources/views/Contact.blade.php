@extends("master")
@section("content")
<section class="banner-section-2">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
          <h2 class="page-title">
            Əlaqə
          </h2>
          <ul class="list">
            <li class="item"><a href="{{route('index')}}">Ana səhifə</a></li>
            <li class="item"><a href="{{route('Maincontact')}}" class="active">Əlaqə</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-wrapper">
                        <div class="contact-form">
                            <form class="contact-form-style" action="{{route('Contact')}}" method="POST">
                           @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <input placeholder="Ad*" type="text" name="name" value="{{old('name')}}">
                                        <span class="text-danger">@error('name'){{'Xana bos qala bilmez'}} @enderror</span>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <input placeholder="Email*" type="email" name="email" value="{{old('email')}}">
                                        <span class="text-danger">@error('email'){{'Xana bos qala bilmez'}} @enderror</span>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <textarea placeholder="Mesajınız*" rows="7" name="text" value="{{old('text')}}"></textarea>
                                        <span class="text-danger">@error('text'){{'Xana bos qala bilmez'}} @enderror</span>
                                        <button type="submit">Göndər</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="contact-map">
                        <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                    href="https://www.gps.ie/wearable-gps/">gps smartwatches</a></iframe></div>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="row px-3">
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="{{asset('/Adresimage/'.$adress->image)}}" alt="icon">
                                </div>
                                <div class="info-box">

                                    <p>
                                       {{$adress->adress}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="{{asset('/Phoneimage/'.$phone->image)}}" alt="icon">
                                </div>
                                <div class="info-box">
                                    <p><a href="">{{$phone->tel}}</a>
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="single-contact">
                                <div class="icon-box">
                                    <img src="{{asset('/Emailimage/'.$email->image)}}" alt="icon">
                                </div>
                                <div class="info-box">
                                    <a href="">{{$email->email}}
                                        </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection

