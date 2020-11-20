<link href="{{asset('css/app.css')}}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ url('/css/in_touch.css') }}" />


<div class="jumbotron col-md-8 informations center_card curved_border">

    @isset($users)

        <b><p class="text-center">• Users Informations •</p></b>

        <table class="table table-striped table-bordered">

            <thead>

                <th>User ID</th>

                <th>Phone number</th>

                <th>Status</th>

                <th>Action</th>

            </thead>

            <tbody>

                @foreach ($users as $user)

                    <tr>

                        <td>{{$user->userID}}</td>

                        <td>{{$user->phone_number}}</td>


                        @if ($user->isVerified == 0)

                            <td>Positive</td>

                        @else

                            <td>negative</td>

                        @endif

                        <td><a href="/alert/{{$user->phone_number}}" class="btn btn-success">Alert</a></td>

                    </tr>

                @endforeach


            </tbody>

        </table>

    @endisset

    <button class="btn btn-danger col-md-6 alert_all_button curved_border">Alert all users</button>

</div>

