@extends('layouts.nav')

@section('content')
<div class="container">
    <h2>Danh sách hóa đơn của bạn</h2>
    @if($payments->isEmpty())
        <p>Bạn chưa có hóa đơn nào.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID Hóa Đơn</th>
                    <th>Số Tiền</th>
                    <th>Trạng Thái</th>
                    <th>Ngày Thanh Toán</th>
                    <th>Chi Tiết</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $payment)
                <tr>
                    <td>{{ $payment->payment_id }}</td>
                    <td>{{ $payment->amount }} {{ $payment->currency }}</td>
                    <td>{{ $payment->payment_status }}</td>
                    <td>{{ $payment->created_at }}</td>
                    <td>
                        <a href="{{ route('road.bill', ['payment_id' => $payment->payment_id]) }}" class="btn btn-primary">Xem Hóa Đơn</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
