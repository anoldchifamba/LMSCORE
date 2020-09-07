<!-- User Id Field -->
<div class="form-group col-sm-6">
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="user_id" id="User_id" style="height:40px; ">

        @foreach ($users as $user)
            <option value="{{ $user->id}}">{{ $user->name}}</option>
        @endforeach

    </select>
</div>

<!-- Course Id Field -->
<div class="form-group col-sm-6">
{{--    {!! Form::label('course_id', 'Course Id:') !!}--}}
{{--    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="course_id" id="course_id" style="height:40px; ">

        @foreach ($courses as $course)
            <option value="{{ $course->id}}">{{ $course->title}}</option>
        @endforeach

    </select>
</div>

<!-- View Count Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('view_count', 'View Count:') !!}--}}
{{--    {!! Form::number('view_count', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Upload Course iterms (pdfs/word/excel)::') !!}
{{--    {!! Form::file('url[]', null, ['class' => 'form-control'],'multiple') !!}--}}
    <input type="file" name="url[]" multiple  class="form-control">
</div>
{{--<div class="form-group col-sm-12 col-sm-6">--}}
{{--    {!! Form::label('course_iterms', 'Upload Course iterms (pdfs/word/excel):') !!}--}}

{{--        {!! Form::file('course_iterms',null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('items.index') }}" class="btn btn-default">Cancel</a>
</div>
