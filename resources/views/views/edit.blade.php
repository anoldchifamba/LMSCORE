@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Views
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($views, ['route' => ['views.update', $views->id], 'method' => 'patch']) !!}

                        @include('views.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection