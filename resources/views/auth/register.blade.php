<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <title>register  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}">
</head>

<body>
    <section id="register">
        <div class="login-container">
            <div class="container">
                <div class="row m-auto justify-content-center">

                    <div class="col-lg-8">

                        <div class="login-content">
                            <h3>انشاء حساب</h3>
                                <form action="{{route('register')}}" method="POST">
                                     @csrf


                                        <div class="input-container">

                                        <input id="username" placeholder="الأسم " class=" @error('username') is-invalid @enderror"name="username" type="text">
                                        <label for="username"><img src="{{asset('front/assets/images/Icon material-person.png')}}" alt=""></label>
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-container">
                                        <input id="email" placeholder="البريد الالكتروني" class=" @error('email') is-invalid @enderror "name="email" type="email">
                                        <label for="email"><img src="{{asset('front/assets/images/Icon zocial-email.png')}}" alt=""></label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="input-container">
                                        <input id="phone" placeholder="phone " class=" @error('phone') is-invalid @enderror"name="phone">
                                        <label for="phone"> </label>
                                           @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-container">
                                        <input id="password"  name="password"   class=" @error('password') is-invalid @enderror"placeholder="الرقم السري" type="password">
                                        <label for="password"> </label>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-container">
                                         <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder=" تاكيد الرقم السري  "name="password_confirmation"  autocomplete="new-password">
                                   <label for="password_confirmation"></label>
                                   @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"> انشاء حساب </button>
                                    </div>

                               </form>



                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


</body>
<script src="{{asset('front/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('front/assets/js/popper.min.js')}}"></script>
<script src="{{asset('front/assets/js/bootstrap.min.js')}}}"></script>
<script src="{{asset('front/assets/js/all.min.js')}}"></script>
<script src="{{asset('front/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('front/assets/js/main.js')}}"></script>

</html>
