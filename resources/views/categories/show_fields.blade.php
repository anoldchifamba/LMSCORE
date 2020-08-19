<!-- Id Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('id', 'Id:') !!}--}}
{{--    <p>{{ $category->id }}</p>--}}
{{--</div>--}}

<!-- Name Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('name', 'Name:') !!}--}}
{{--    <p>{{ $category->name }}</p>--}}
{{--</div>--}}

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $category->description }}</p>
</div>



<div class="form-group w-100 small text-muted">
    {!! Form::label('view_count', 'View Count:') !!}
    <p>{{ $category->view_count }}</p>
</div>

<!-- Deleted At Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('deleted_at', 'Deleted At:') !!}--}}
{{--    <p>{{ $category->deleted_at }}</p>--}}
{{--</div>--}}

<!-- Created At Field -->
<div class="form-group w-100 small text-muted">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{( $category->created_at)->format('h :i a-Dd M Y') }}</p>
</div>

<!-- Updated At Field -->

<div class="form-group w-100 small text-muted">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{( $category->updated_at)->format('h :i a-Dd M Y') }}</p>
</div>

