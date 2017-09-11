@extends('layouts.login_cms')

@section('content')
 <!--login screen-->
    <div class="login-screen">
        
        <!--login logo-->
        <div class="login-logo">
            <a href="#">
                <img src="../resources/assets/images/logo.png" alt="1ki3">
            </a>
        </div>
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <ul>
                <li>
                            <label for="email" class="col-md-4 control-label">E-Mail Adresi</label>

                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </li>
  <li>

                            <label for="password" class="col-md-4 control-label">Şifre</label>

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                             </li>
                       
								 <button type="submit" class="btn btn-primary">Giriş</button>
								
                        
                               
                                    <label>
                                        <input type="checkbox" name="remember"> Beni Hatırla
                                    </label>
                            
                       

                    
                               
								
                         
            
       
                          
                    </form>
					</ul>
                <div class="login-links">
            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Şifrenizi Unuttunuz Mu ?
                                </a> </div>
            
			
@endsection
