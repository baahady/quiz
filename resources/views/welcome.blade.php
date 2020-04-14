<!doctype html>
<html lang="en" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
    <title>آزمون ساز رایگان</title>
  </head>
  <body>
      <!-- navbar-->
    <nav class="navbar navbar-dark navbar-expand-sm bg-dark">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">سیستم آزمون رایگان</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">تماس با ما</a>
                </li>         
            </ul>
                <span class="navbar-text">            
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">پنل کاربری</a>
                            @else
                                <a href="{{ route('login') }}"><i class="fas fa-user-lock fa-sm"></i> ورود</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"><i class="fas fa-sign-in-alt fa-flip-horizontal fa-sm"></i> ثبت نام </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </span>
            </div>
        </div>
    </nav>  

    <div class="container">
        <div id="myCarousel" class="carousel slide mt-2" data-ride="carousel">
          <!-- Indicators -->
          <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ul>
          
          <!-- The slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/bg.jpg" class="img-fluid" alt="Los Angeles" height="20">
              <div class="carousel-caption d-none d-md-block">
                <h5>لورم ایپسوم متن ساختگی با تولید سادگی</h5>
                <p>لورم ایپسوم متن ساختگی با تولید سادگیلورم ایپسوم متن ساختگی با تولید سادگی.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="image/bg.jpg" class="img-fluid" alt="Chicago" height="200">
              <div class="carousel-caption d-none d-md-block">
                <h5>لورم ایپسوم متن ساختگی با تولید سادگی</h5>
                <p>لورم ایپسوم متن ساختگی با تولید سادگیلورم ایپسوم متن ساختگی با تولید سادگی.</p>
              </div>            
            </div>
            <div class="carousel-item">
              <img src="image/bg.jpg" class="img-fluid" alt="New York" height="200">
              <div class="carousel-caption d-none d-md-block">
                <h5>لورم ایپسوم متن ساختگی با تولید سادگی</h5>
                <p>لورم ایپسوم متن ساختگی با تولید سادگیلورم ایپسوم متن ساختگی با تولید سادگی.</p>
              </div>            
            </div>
          </div>
          
          <!-- Left and right controls -->
          <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div> 
        <!--card group-->
        <div class="card-group mt-3 mb-3">
            <div class="card text-white bg-danger">
              <img src="image/grade.jpg" class="card-img-top img-fluid" style="max-height: 210px;" alt="...">
              <div class="card-body">
                <h5 class="card-title">دریافت سریع نمره دانش آموز</h5>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز.</p>
              </div>
            </div>
            <div class="card text-white bg-info">
              <img src="image/teacher.jpg" class="card-img-top img-fluid" style="max-height: 210px;" height="500" alt="...">
              <div class="card-body">
                <h5 class="card-title">ارتباط آسان با مدرس و دریافت مطالب آموزشی</h5>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود.</p>
              </div>
            </div>
            <div class="card text-white bg-success">
              <img src="image/parent.jpg" class="card-img-top img-fluid" style="max-height: 210px;" alt="...">
              <div class="card-body">
                <h5 class="card-title">دسترسی آسان والدین به نمرات و وضعیت تحصیلی دانش آموز</h5>
                <p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود.</p>
              </div>
            </div>
          </div>  
          <!-- quizzes-->
          <h1 class="h3 mt-4 mb-3">لیست آزمون های ایجاد شده</h1>
          <p>جهت شرکت در آزمون مورد نظر دگمه شرکت در آزمون را کلیک نمایید.</p>
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">نام آزمون</th>
                <th scope="col">توضیحات </th>
                <th scope="col">معلم</th>
                <th scope="col">شرکت در آزمون</th>
              </tr>
            </thead>
            <tbody>
            <?php $i=1 ?>
            @foreach($quizzes as $quiz)
              <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$quiz->title}}</td>
                <td>{{$quiz->description}}</td>
                <td>{{$quiz->user->name}}</td>
                <td><a href="/takeparts/{{$quiz->id}}-{{Str::slug($quiz->title)}}" class="btn btn-warning btn-block">شرکت در آزمون</a></td>
              </tr>
              <?php $i++ ?>
            @endforeach   
            </tbody>
          </table>
          <!--footer-->
          <div class="row">
              <div class="col py-3 px-5 mt-5 bg-light">طراحی و برنامه نویسی از <a href="http://www.ahady.ir">آحادی</a></div>
          </div>
    </div>
      
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js" type="text/javaScript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javaScript"></script>
    <script type="text/javaScript">
        $(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    
</body>
</html>