<link href="{{asset('css/app.css')}}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ url('/css/search_user.css') }}" />

<div class="card col-md-8 center_card">

    <div class="card-body">

        {!! Form::open(['action'=>'TrackingHandlerController@search']) !!}

        <div class="form-group">

            {!! Form::text('phone_number', '', ['class'=>'form_control col-md-7 phone_number curved_border', 'placeholder'=>'phone number']) !!}

            <br>

            {!! Form::submit('rechercher', ['class'=>'btn btn-success form-control col-md-5 search_button curved_border']) !!}

        </div>


        {!! Form::close() !!}

    </div>

</div>

<br>

<div class="jumbotron col-md-8 informations center_card curved_border">

    @isset($user)

        <b><p>• User Informations •</p></b>

        <b><p>User ID : {{$user->userID}}</p></b>

        <b><p>Phone number : {{$user->phone_number}}</p></b>


        @if ($user->isVerified == 0)

            <b><p>Status : Positive to virus</p></b>

        @else

            <b><p>Status : Negative to virus</p></b>

        @endif

    @else

        <p>• User Informations •</p>


        <p><b>User ID : -------------------------------------------------------</b></p>

        <b><p>Phone number : -----------------------------------------------</p></b>

        <b><p>Status : ---------------------------------------------------------</p></b>

    @endisset

    @isset($user)

    <a href="#"  @if ($user->isVerified == 0)

        class="btn btn-success declare_button curved_border col-md-5";

    @else

    class="btn btn-danger declare_button curved_border col-md-5";

    @endif>

        @if ($user->isVerified == 0)

            Declare free

        @else

            Declare Positive

        @endif

    </a>

        <a href="/in_contact/{{$user->phone_number}}" class="btn btn-primary col-md-5 see_in_touch_button curved_border">See in-touch</a>

    @endisset

</div>

<br>

