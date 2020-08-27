<div class="table-responsive">
    <table class="table" id="courseUsers-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Course Id</th>
        <th>User Account Id</th>
        <th>Pay Date</th>
        <th>Expiry Date</th>
        <th>Plan</th>
        <th>Pay Amount</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courseUsers as $courseUser)
            <tr>
                <td>{{$courseUser->user['name']}}</td>
            <td>{{ $courseUser->course['title'] }}</td>
            <td>{{ $courseUser->user['name'] }}</td>
            <td>{{ $courseUser->pay_date }}</td>
            <td>{{ $courseUser->expiry_date }}</td>
            <td>{{ $courseUser->plan }}</td>
            <td>{{ $courseUser->pay_amount }}</td>
            <td>@if($courseUser->status==0)
             Off
             @else
             On
                    @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['courseUsers.destroy', $courseUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courseUsers.show', [$courseUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courseUsers.edit', [$courseUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
