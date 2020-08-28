<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
{{--    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="user_id" id="user_id" style="height:40px; ">

        @foreach ($users as $user)
            <option value="{{ $user->id}}">{{ $user->email}}</option>
        @endforeach

    </select>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course id:') !!}
    {{--    {!! Form::number('user_account_id', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="course_id" id="category_id" style="height:40px; ">

        @foreach ($courses as $course)
            <option value="{{ $course->id}}">{{ $course->title}}</option>
        @endforeach

    </select>
</div>


<!-- Course Id Field -->
<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {{--    {!! Form::text('category_id', null, ['class' => 'form-control']) !!}\--}}

    <select class="form-control" name="category_id" id="category_id" style="height:40px; ">

        @foreach ($categories as $category)
            <option value="{{ $category->id}}">{{ $category->name}}</option>
        @endforeach

    </select>
</div>

{{--<!-- User Account Id Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_account_id', 'User Account Id:') !!}--}}
{{--    {!! Form::number('user_account_id', null, ['class' => 'form-control']) !!}--}}
{{--    <select class="form-control" name="user_account_id" id="category_id" style="height:40px; ">--}}

{{--        @foreach ($courses as $course)--}}
{{--            <option value="{{ $course->id}}">{{ $course->title}}</option>--}}
{{--        @endforeach--}}

{{--    </select>--}}
{{--</div>--}}

<!-- Pay Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pay_date', 'Pay Date:') !!}
    {!! Form::date('pay_date', null, ['class' => 'form-control','id'=>'pay_date']) !!}
</div>

{{--@push('scripts')--}}
{{--    <script type="text/javascript">--}}
{{--        $('#pay_date').datetimepicker({--}}
{{--            format: 'YYYY-MM-DD HH:mm:ss',--}}
{{--            useCurrent: true--}}
{{--        })--}}
{{--    </script>--}}
{{--@endpush--}}

<!-- Expiry Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expiry_date', 'Expiry Date:') !!}
    {!! Form::date('expiry_date', null, ['class' => 'form-control','id'=>'expiry_date']) !!}
</div>

{{--@push('scripts')--}}
{{--    <script type="text/javascript">--}}
{{--        $('#expiry_date').datetimepicker({--}}
{{--            format: 'YYYY-MM-DD HH:mm:ss',--}}
{{--            useCurrent: false--}}
{{--        })--}}
{{--    </script>--}}
{{--@endpush--}}

<!-- Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('token', 'Token:') !!}
    {!! Form::text('token', null, ['class' => 'form-control']) !!}
</div>

<!-- Pay Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pay_amount', 'Pay Amount:') !!}
    {!! Form::number('pay_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courseUsers.index') }}" class="btn btn-default">Cancel</a>
</div>
