@extends('layouts.navadmin')

@section('content')
<div class="container ">
    <h2>Danh sách đơn hàng</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã Đơn Hàng</th>
                <th>Email</th>
                <th>Số tiền</th>
                <th>Trạng thái</th>
                <th>Ngày tạo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->payment_id }}</td>
                <td>{{ $order->payment_email }}</td>
                <td>${{ number_format($order->amount, 2) }}</td>
                <td>{{ ucfirst($order->payment_status) }}</td>
                <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $orders->links() }}
</div>
@endsection
