<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
{{--    {!! Form::text('gender', null, ['class' => 'form-control']) !!}--}}
    <select name="gender" class="form-control" style="height:35px; ">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
{{--    {!! Form::text('date_of_birth', null, ['class' => 'form-control']) !!}--}}
    {!! Form::date('date_of_birth', null, ['class' => 'form-control','id'=>'date_of_birth']) !!}
</div>

<!-- Is Subscribed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_subscribed', 'Is Subscribed:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_subscribed', 0) !!}
        {!! Form::checkbox('is_subscribed', '1', null) !!}
    </label>
</div>


{{--<!-- Email Verified At Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('email_verified_at', 'Email Verified At:') !!}--}}
{{--    {!! Form::date('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}--}}
{{--</div>--}}

{{--@push('scripts')--}}
{{--    <script type="text/javascript">--}}
{{--        $('#email_verified_at').datetimepicker({--}}
{{--            format: 'YYYY-MM-DD HH:mm:ss',--}}
{{--            useCurrent: false--}}
{{--        })--}}
{{--    </script>--}}
{{--@endpush--}}

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

{{--<!-- View Count Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('view_count', 'View Count:') !!}--}}
{{--    {!! Form::number('view_count', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role Id:') !!}
{{--    {!! Form::number('role_id', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="role_id" id="category_id" style="height:35px; ">

        @foreach ($roles as $role)
            <option value="{{ $role->id}}">{{ $role->name}}</option>
        @endforeach

    </select>
</div>

{{--<!-- Remember Token Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('remember_token', 'Remember Token:') !!}--}}
{{--    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
</div>
