<!-- User Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Course Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_id', 'Course Id:') !!}
{{--    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}--}}

    <select class="form-control" name="course_id" id="course_id" style="height:40px; ">

        @foreach ($courses as $course)
            <option value="{{ $course->id}}">{{ $course->title}}</option>
        @endforeach

    </select>
</div>

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
<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('comments.index') }}" class="btn btn-default">Cancel</a>
</div>
