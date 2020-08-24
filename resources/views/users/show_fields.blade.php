{{--<!-- Id Field -->--}}
{{--<div class="form-group col-md-6">--}}
{{--    {!! Form::label('id', 'Id:') !!}--}}
{{--    <p>{{ $user->id }}</p>--}}
{{--</div>--}}
<!-- View Count Field -->
<div class="form-group col-md-8 text-muted">
{{--    {!! Form::label('view_count', ' Count:') !!}--}}
    <p>Profile viewed {{ $user->view_count }} times</p>
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


