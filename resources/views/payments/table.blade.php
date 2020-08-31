<div class="table-responsive">
    <table class="table" id="payments-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Course Id</th>
        <th>Category Id</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Mode Of Payment</th>
        <th>Payment Processor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->user['name'] }}</td>
            <td>{{ $payment->course['title'] }}</td>
            <td>{{ $payment->category['name'] }}</td>
            <td>{{ $payment->amount }}</td>
            <td>{{ $payment->status }}</td>
            <td>{{ $payment->mode_of_payment }}</td>
            <td>{{ $payment->payment_processor }}</td>
                <td>
                    @if(Auth::check() AND (Auth::user()->role_id < 3 ))
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('payments.show', [$payment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('payments.edit', [$payment->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                        @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
