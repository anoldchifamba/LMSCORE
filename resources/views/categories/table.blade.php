<div class="table-responsive">


    {{--   <table class="table" id="categories-table">
            <thead>
                <tr>
                    <th>Name</th>
            <th>Description</th>
            <th>View Count</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->view_count }}</td>
                    <td>
                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('categories.show', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>  --}}



    <div class="card-columns" >


        @foreach($categories as $category)
            <div class="card" style="width:25rem;" >
                <img class="card-img-top" style="width: 18rem;height: 20rem;"  src="{{  asset('storage/category_image/'.$category->photo)}}" >
                <div class="card-body">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <p class="card-text">{{ str_limit($category->description ,$limit=20 ,$end='...')}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">View: {{ number_format( $category->view_count )}}</small>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$category->id]) }}" class="btn btn-primary mr-5">View Category</a>
                        @if(Auth::user()->role_id<3)
                            <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default  mr-5'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger ', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        @endif
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        @endforeach
    </div>




</div>
