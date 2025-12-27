@extends('layouts.nav')
@section('content')
<div class="container mt-4">
    <h2>Lịch sử đơn hàng của bạn</h2>

    @if($orders->isEmpty())
        <p class="alert alert-warning">Bạn chưa có đơn hàng nào.</p>
    @else
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
    @endif
</div>
@endsection
