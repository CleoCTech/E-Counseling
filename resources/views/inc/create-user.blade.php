@extends('layouts.app')
   @section('content')
    
    {{-- {!! Form::open(['action'=>'AdminController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data'])!!}
    <div class="form-group">
        {{Form::label('title','Title'), text('title','', ['class'=>'form-control','placeholder'=>'Title']) }}
        {{Form::text('title','', ['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','', ['id'=>'article-ckeditor', 'class'=>'form-control','placeholder'=>'Body Text'])}}
    </div>
     <div class="form-group">
        {{Form::file('cover_image')}}
       
    </div>
    {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close()!!} --}}

    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{action('AdminController@store')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="job-tittle" class="col-md-4 col-form-label text-md-right">{{ __('Job Tittle') }}</label>

                            <div class="col-md-6">
                                <select name="role" id="role1" class="form-control" onChange="myNewFunction(this);" >
                                    <option value="Admin">Admin</option>
                                    <option value="Author" selected>Author</option>
                                    {{-- <option value="Customer">Customer</option> --}}
                                    <option value="Editor">Editor</option>
                                </select>
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="hidden-role" type="hidden" class="form-control" name="hidden-role">
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
    </div>
@endsection 
 {{-- git add .
                                git commit -m "Messsage"
                                git push origin master --}}
                                {{-- <input id="role" type="text" class="form-control" name="role" required autocomplete="rol
                                e"> --}}
<script>
    function myNewFunction(sel) {
   // alert(sel.options[sel.selectedIndex].text);
    document.getElementById("hidden-role").value = sel.options[sel.selectedIndex].text;
    }

    window.addEventListener('load', function () {
   // alert("It's loaded!")
    document.getElementById("hidden-role").value = document.getElementById("role1").value;
    })
</script>