<link href="{{asset('css/app.css')}}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ url('/css/login.css') }}" />


<div class="jumbotron col-md-6 informations center_card curved_border text-center">

    <p class="text-center">• Authentication •</p>

    <img src="{{asset('img/icon.png')}}"  width="150" height="150" alt="">

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="form-group row">

            <div class="col-md-12">

                <br>

                <input id="email" type="email" placeholder="email"

                class="form-control curved_border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')

                <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

            </div>

        </div>

        <br>

        <div class="form-group row">

            <div class="col-md-12">

                <input id="password" type="password" placeholder="password"

                class="form-control curved_border @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

            </div>

        </div>

        <br>

        <div class="form-group row mb-0">

            <div class="col-md-12">

                <button type="submit" class="btn btn-secondary col-md-5 curved_border">

                    Submit

                </button>

            </div>

        </div>

    </form>

</div>


