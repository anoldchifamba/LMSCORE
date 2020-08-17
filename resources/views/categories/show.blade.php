@extends('layouts.app')

@section('content')
    <section class="content-header">
       <h1>
           <div class="form-group">
                {{--    {!! Form::label('name', 'Name:') !!}--}}
             {{ $category->name }}
            </div>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">

                <div class="row" style="padding-left: 20px">
{{--                    this function is used to view category--}}
                    @include('categories.show_fields')
{{--                    we want to show or view the courses under the category we have offered--}}
                    <h2 class="text-center w-100">Courses under  {{ $category->name }}</h2>
                    @include('courses.table')

{{--                    <a href="{{ route('categories.index') }}" class="btn btn-default">Back</a>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
