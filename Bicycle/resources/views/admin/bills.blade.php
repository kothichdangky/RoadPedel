@extends('layouts.navadmin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Danh sách hóa đơn</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Số tiền</th>
                <th>Trạng thái</th>
                <th>Ngày thanh toán</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bills as $bill)
            <tr>
                <td>{{ $bill['payment_id'] }}</td>
                <td>{{ $bill['payment_email'] }}</td>
                <td>${{ number_format($bill['amount'], 2) }}</td>
                <td>{{ ucfirst($bill['payment_status']) }}</td>
                <td>{{ \Carbon\Carbon::parse($bill['created_at'])->format('d/m/Y H:i') }}</td>
                <td>
                    <a href="{{ route('admin.bill.detail', $bill['payment_id']) }}" class="btn btn-info btn-sm">Chi tiết</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
