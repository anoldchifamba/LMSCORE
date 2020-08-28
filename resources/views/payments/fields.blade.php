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
{{--    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="category_id" id="category_id" style="height:40px; ">

        @foreach ($categories as $category)
            <option value="{{ $category->id}}">{{ $category->name}}</option>
        @endforeach

    </select>
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
{{--    {!! Form::text('status', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="status" id="status" style="height:40px; ">

{{--        @foreach ($categories as $category)--}}
        <option value="verified">Verified</option>
        <option value="not verified">Not Verified</option>
        <option value="pending">Pending</option>
{{--        @endforeach--}}

    </select>
</div>

<!-- Mode Of Payment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mode_of_payment', 'Mode Of Payment:') !!}
{{--    {!! Form::text('mode_of_payment', null, ['class' => 'form-control']) !!}--}}
    <select class="form-control" name="mode_of_payment" id="mode_of_payment" style="height:40px; ">

{{--        @foreach ($categories as $category)--}}
        <option value="Bank">Bank</option>
        <option value="Cash">Cash</option>
        <option value="Eco-cash">Eco-cash</option>

{{--        @endforeach--}}

    </select>
</div>

{{--<!-- Payment Processor Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('payment_processor', 'Other Info:') !!}--}}
{{--    {!! Form::text('payment_processor', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('payments.index') }}" class="btn btn-default">Cancel</a>
</div>
