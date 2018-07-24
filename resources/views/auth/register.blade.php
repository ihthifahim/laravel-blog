@extends('layouts.app')

@section('content')


<div class="columns">
        <div class="column is-one-third is-offset-one-third m-t-100">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Join the Community</h1>
    
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
                    
                    <div class="field">
                            <label for="name" class="label">Name</label>
                        <p class="control {{$errors->has('name') ? 'is-danger' : ''}}">
                            <input type="text" name="name" id="name" class="input" placeholder="name" required>
                        
                        @if($errors->has('name'))
                            <p class="help is-danger">{{$errors->first('name')}}</p>
                        @endif   
                        
                        </p>
                        </div>
            
                    
                    <div class="field">
                        <label for="email" class="label">Email Address</label>
                    <p class="control {{$errors->has('email') ? 'is-danger' : ''}}">
                        <input type="text" name="email" id="email" class="input" placeholder="name@example.com" value="{{old('email')}}" required>
                   
                    @if($errors->has('email'))
                        <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif   
                   
                    </p>
                    </div>

                    <div class="columns">
                        <div class="column"><div class="field">
                                <label for="password" class="label">Password</label>
                                <p class="control {{$errors->has('password') ? 'is-danger' : ''}}">
                                    <input type="password" name="password" id="password" class="input" required>
                                </p>
                                
                        @if($errors->has('password'))
                            <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif
                                
                            </div>
                        </div>


                        <div class="column">
                                <div class="field">
                                        <label for="password" class="label">Confirm Password</label>
                                        <p class="control {{$errors->has('password') ? 'is-danger' : ''}}">
                                            <input type="password" name="password" id="password" class="input" required>
                                        </p>
                                        
                                @if($errors->has('password'))
                                    <p class="help is-danger">{{$errors->first('password')}}</p>
                                @endif
                                        
                                    </div>
                


                        </div>
                    </div>
    
                    

                    
                        
                    <button class="button is-primary is-outlined m-t-30 is-fullwidth" >Register</button>
                </form>
                </div><!-- end of card content -->
    
            
            </div>
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already Registered?  </a></h5>
        </div>
    </div>
    










{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
