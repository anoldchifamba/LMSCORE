{{--<!-- Id Field -->--}}
{{--<div class="form-group col-md-6">--}}
{{--    {!! Form::label('id', 'Id:') !!}--}}
{{--    <p>{{ $user->id }}</p>--}}
{{--</div>--}}








<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Become an instructor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {!! Form::open(['route' => ['users.become-instructor', $user->id], 'method' => 'post','enctype'=>'multipart/form-data']) !!}
            <div class="modal-body">

                <input type="hidden" value="{{$user->id}}" name="user_id"/>
                <input type="hidden" value="{{$user->email}}" name="email"/>
                {{--                <a class="btn btn-danger btn-xs">Click to Disapprove</a>--}}
                <div class="form-group col-md-6 text-muted">
                  {!! Form::label('', ' Cell:') !!}<br>
                <input type="number" value="" name="cell" class="form-control-xs" required/><br>
                </div>

                <div class="form-group col-md-6 text-muted">
                {!! Form::label('', 'Nationalid:') !!}<br>
                    <input type="text" value="" name="id_number" class="form-control-xs" required/><br>
                </div>
                <div class="form-group col-md-6 text-muted">
                    {!! Form::label('', 'Upload Satified Certificate:') !!}<br>
{{--                    {!! Form::file('certificate_photo',null , ['class' => 'form-control']) !!}--}}
                    <input type="file" id="certificate_photo" name="certificate_photo" accept="image/png, image/jpeg" required>
                    <br>
                </div>
                <div class="form-group col-md-6 text-muted">
                    {!! Form::label('', 'Upload Photo id:') !!}<br>
{{--                    {!! Form::file('photo_id',required, ['class' => 'form-control']) !!}--}}
                    <input type="file" id="photo_id" name="photo_id" accept="image/png, image/jpeg" required>
                    <br>
                </div>
                <div class="form-group col-md-6 text-muted">
                {!! Form::label('', 'Bank Account Name:') !!}<br>

                <input type="text" value="" name="accountName" class="form-control-xs" required/><br>
                </div>
                <div class="form-group col-md-6 text-muted">
                {!! Form::label('', 'Bank Account Number:') !!}<br>
                <input type="number" value="" name="accountNumber" class="form-control-xs" required/><br>

                </div>







            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {!! Form::button('Send your request', ['type' => 'submit', 'class' => 'btn btn-primary ']) !!}


            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>







<!-- View Count Field -->
<div class="form-group col-md-6 text-muted">
{{--    {!! Form::label('view_count', ' Count:') !!}--}}
    <p>Profile viewed {{ $user->view_count }} times</p>
</div>
<div class="form-group col-md-6 text-muted">
    {{--    {!! Form::label('view_count', ' Count:') !!}--}}
    <a style="color:white;" class="btn badge-danger" type="button"  data-toggle="modal" data-target="#exampleModal">Become an instructor</a>
</div>






<!-- Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group col-md-6">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- First Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $user->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $user->last_name }}</p>
</div>

<!-- Gender Field -->
<div class="form-group col-md-6">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $user->gender }}</p>
</div>





<!-- Password Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('password', 'Password:') !!}--}}
{{--    <p>{{ $user->password }}</p>--}}
{{--</div>--}}





{{--<!-- Remember Token Field -->--}}
{{--<div class="form-group">--}}
{{--    {!! Form::label('remember_token', 'Remember Token:') !!}--}}
{{--    <p>{{ $user->remember_token }}</p>--}}
{{--</div>--}}


@if(Auth::check() and (Auth::user()->user_id==$user->id||Auth::user()->role_id<3))

<!-- Role Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('role_id', 'Role :') !!}
    <p>{{ $user->role['name'] }}</p>
</div>
    <!-- Date Of Birth Field can be viewed by the owner Or admin -->
    <div class="form-group col-md-6">
        {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
        <p>{{ $user->date_of_birth }}</p>
    </div>



<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Joined At:') !!}
    <p>{{ $user->created_at->format('h :i a-Dd M Y') }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $user->updated_at->format('h :i a-Dd M Y') }}</p>
</div>
@endif


@if(Auth::check() and Auth::user()->role_id<3)
    <!--  Field can be viewd by the adminstrator -->
    <!-- Is Subscribed Field -->
    <div class="form-group col-md-6">
        {!! Form::label('is_subscribed', 'Certificate:') !!}<br>
        @if($user->certificate_photo=='')
        <img src="{{  asset('storage/certificate_photo/'.$user->certificate_photo)}}" height="90px" width="180px">
        @endif
    </div>



    <div class="form-group col-md-6">
        {!! Form::label('is_subscribed', 'profile image:') !!}<br>
        @if($user->photo_id=='')
        <img src="{{  asset('storage/profile/'.$user->photo_id)}}" height="90px" width="180px">
        @endif
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('is_subscribed', 'National id:') !!}
        <p>{{ $user->id_number }}</p>
    </div>

    <div class="form-group col-md-6">
        {!! Form::label('is_subscribed', 'Is Subscribed:') !!}
        <p>{{ $user->is_subscribed }}</p>
    </div>



    <!-- Email Verified At Field -->
    <div class="form-group col-md-6">
        {!! Form::label('email_verified_at', 'Email Verified At:') !!}
        <p>{{ $user->email_verified_at }}</p>
    </div>


    <!-- Deleted At Field-->
<div class="form-group col-md-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{{ $user->deleted_at }}</p>
</div>
@endif


