<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('admin_style/css/styles.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       @include('admin.navbar')
        <div id="layoutSidenav">
        @include('admin.sidebar')
            <div id="layoutSidenav_content">
                <!-- form -->
            <div class="col-4 border border-info m-3 bg-secondary">
            <form action="{{route('Updatereyler')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$data['id']}}">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fayl secin</label>
    <input type="file" name="image" class="form-control bg-warning" value="{{$data['image']}}" >
   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ad</label>
    <input type="text" name="name" class="form-control bg-warning" value="{{$data['name']}}" >
   
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Rey</label>
    <input type="text" name="comment" class="form-control bg-warning" value="{{$data['comment']}}" >
   
  </div>
  
  <button type="submit" class="btn btn-danger">Gonder</button>
</form>
            </div>



            @include('admin.footer')
            </div>
        </div>
       
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('admin_style/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{('admin_style/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{('admin_style/assets/demo/chart-bar-demo.js')}}"></script>
     
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('admin_style/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
