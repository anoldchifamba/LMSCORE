<!-- Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $user->id }}</p>
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
<div class="form-group">
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

<!-- Date Of Birth Field -->
<div class="form-group col-md-6">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    <p>{{ $user->date_of_birth }}</p>
</div>

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

<!-- Password Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('password', 'Password:') !!}--}}
{{--    <p>{{ $user->password }}</p>--}}
{{--</div>--}}

<!-- View Count Field -->
<div class="form-group col-md-6">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>{{ $user->view_count }}</p>
</div>

<!-- Role Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('role_id', 'Role :') !!}
    <p>{{ $user->role_id }}</p>
</div>

{{--<!-- Remember Token Field -->--}}
{{--<div class="form-group">--}}
{{--    {!! Form::label('remember_token', 'Remember Token:') !!}--}}
{{--    <p>{{ $user->remember_token }}</p>--}}
{{--</div>--}}
@if(Auth::user()->role_id<3 and Auth::check())
<!-- Deleted At Field -->
<div class="form-group col-md-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{{ $user->deleted_at }}</p>
</div>
@endif
<!-- Created At Field -->
<div class="form-group col-md-6">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group col-md-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $user->updated_at }}</p>
</div>

