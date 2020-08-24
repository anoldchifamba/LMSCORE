<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
{{--        <th>First Name</th>--}}
{{--        <th>Last Name</th>--}}
        <th>Gender</th>
                <th>Amount</th>
{{--        <th>Date Of Birth</th>--}}
{{--        <th>Is Subscribed</th>--}}
{{--        <th>Email Verified At</th>--}}
{{--        <th>Password</th>--}}
{{--        <th>View Count</th>--}}
{{--        <th>Role </th>--}}
{{--        <th>Remember Token</th>--}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($course->users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            <td><a href="{{ route('users.show', [$user->id]) }}" class=''>{{ $user->email }}</a></td>
{{--            <td>{{ $user->first_name }}</td>--}}
{{--            <td>{{ $user->last_name }}</td>--}}
            <td>{{ $user->gender }}</td>
                <td>$ {{ $user->pivot->pay_amount }}</td>
{{--            <td>{{ $user->date_of_birth }}</td>--}}
{{--            <td>{{ $user->is_subscribed }}</td>--}}
{{--            <td>{{ $user->email_verified_at }}</td>--}}
{{--            <td>{{ $user->password }}</td>--}}
{{--            <td>{{ $user->view_count }}</td>--}}
{{--            <td>{{ $user->role['name'] }}</td>--}}
{{--            <td>{{ $user->remember_token }}</td>--}}
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>

                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
