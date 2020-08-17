<div class="table-responsive">
    <table class="table" id="views-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>User Account Id</th>
        <th>Category Id</th>
        <th>Course Id</th>
        <th>Iterm Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($views as $views)
            <tr>
                <td>{{ $views->user_id }}</td>
            <td>{{ $views->user_account_id }}</td>
            <td>{{ $views->category_id }}</td>
            <td>{{ $views->course_id }}</td>
            <td>{{ $views->iterm_id }}</td>
                <td>
                    {!! Form::open(['route' => ['views.destroy', $views->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('views.show', [$views->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('views.edit', [$views->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
