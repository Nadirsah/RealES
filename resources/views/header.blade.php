<header class="general-header">
    <div class="container-fluid px-5"> 
      <div class="row align-items-center justify-content-between">
       
        <div class="col-md-4  col-lg-5 d-none d-md-block">
          <div class="header-logo ">
            <a href="{{route('index')}}">
              <span class="text-primary">R</span>ealEstateSolutions
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-5">
          <nav class="nav-menu">
            <ul class="nav-list d-flex justify-content-between">
              <li class="nav-item"><a class="nav-link" href="{{route('Mainhaqqimizda')}}">Haqqımızda</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('Mainpartnyrolar')}}">Partnyorlar</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('Mainsifarisler')}} ">Sifarişlər</a></li>
              <li class="nav-item"><a href="{{route('Maincontact')}}" class="nav-link">Əlaqə</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-2 col-lg-2 d-flex justify-content-end modal-btn-content"> <button type="button" class="modal-btn" data-bs-toggle="modal"
            data-bs-target="#exampleModal" data-bs-whatever="@mdo">Əməkdaşlıq
          </button>
        </div>
        </div>
        </div>
          <div class="row ">
         <div class="col-12 d-md-none d-block ">
            <div class="mobile-sub-menu ">
              <div class="sub-menu-header d-flex align-items-center justify-content-between">
                <div class="header-logo">
                  <a href="./index.html">
                    <span class="text-primary">R</span>ealEstateSolutions
                  </a>
                </div>
                <div class="col-4 d-lg-none nav-menu-button-content">
                  <div class="nav-menu-button">
                    <i class="fa-solid fa-bars fa-2x"></i>
                  </div>
                </div>
              </div>
              <nav class="mobile-nav-menu">
                <ul class="nav-list">
                  <li class="nav-item"><a class="nav-link" href="./about.html">Haqqımızda</a></li>
                  <li class="nav-item"><a class="nav-link" href="./partners.html">Partnyorlar</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Sifarişlər</a></li>
                  <li class="nav-item"><a href="./contact.html" class="nav-link">Əlaqə</a></li>
                </ul>
              <button type="button" class="modal-btn mt-3" data-bs-toggle="modal"
              data-bs-target="#exampleModal" data-bs-whatever="@mdo">Əməkdaşlıq
            </button>
          </nav>
          </div>
        </div>
      </div>
      </div>
    </div>
  </header>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Əməkdaşlıq</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Ad,Soyad : <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="recipient-name" required>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Şirkət : <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="recipient-name" required>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Fəaliyyət növü : <span
                  class="text-danger">*</span></label>
              <input type="text" class="form-control" id="recipient-name" required>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Məhsul şəxs : <span
                  class="text-danger">*</span></label>
              <input type="text" class="form-control" id="recipient-name" required>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Əlaqə nömrəsi : <span
                  class="text-danger">*</span></label>
              <input type="text" class="form-control" id="recipient-name" required>
            </div>

          </form>
        </div>
        <div class="modal-footer">

          <button type="button" class="modal-footer-btn">Göndər</button>
        </div>
      </div>
    </div>
  </div>