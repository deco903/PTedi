<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    body,html {
        background-image: url('https://i.imgur.com/xhiRfL6.jpg');
        height: 100%;
    }

    #profile-img {
        height:180px;
    }
    .h-80 {
        height: 80% !important;
    }
    h1{
        padding-left:100px;
        color:white;
    }

    
    p{
        color:white;
    }
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container h-80">
<div class="row align-items-center h-100">
<h1>WELCOME TO OUR ANONYMOUS WEBSITE WORLD</h1>
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="https://i.imgur.com/6b6psnA.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form  class="form-signin" method="post" action="{{route('register')}}">
            @csrf
              <p>Form Register</p>
              <input type="text" name="name" id="inputPassword" class="form-control form-group {{$errors->has('name') ? 'is-invalid' : ''}}" 
              placeholder="please insert your name" value="{{old('name')}}" required autofocus>
              @if($errors->has('name')) 
                <div class="invalid-feedback">
                    {{$errors->first('name')}}
                </div>
              @endif

              <input type="email" name="email" id="inputPassword" class="form-control form-group {{$errors->has('email') ? 'is-invalid' : ''}}"
               placeholder="insert email" value="{{old('email')}}" required autofocus>
               @if($errors->has('email')) 
                <div  class="invalid-feedback">
                    {{$errors->first('email')}}
                </div>
               @endif

              <input type="password" name="password" id="inputPassword" class="form-control form-group {{$errors->has('password') ? 'is-invalid' : ''}}"
               placeholder="password" required autofocus>
               @if($errors->has('password')) 
                <div class="invalid-feedback">
                    {{$errors->first('password')}}
                </div>
               @endif

              <input type="password" name="password_confirmation" id="inputPassword" class="form-control form-group {{$errors->has('password_confirmation')? 'is-invalid' : ''}}" 
              placeholder="password confirmation" required autofocus>
              @if($errors->has('password_confirmation')) 
                <div class="invalid-feedback">
                    {{$errors->first('password_confirmation')}}
                </div>
               @endif

              <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">enter</button>  
            </form><!-- /form -->
        </div>
    </div>
</div>
</div>