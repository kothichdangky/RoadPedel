@extends('layouts.navadmin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Chi tiết hóa đơn</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID:</th>
            <td>{{ $bill['payment_id'] }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $bill['payment_email'] }}</td>
        </tr>
        <tr>
            <th>Số tiền:</th>
            <td>${{ number_format($bill['amount'], 2) }}</td>
        </tr>
        <tr>
            <th>Trạng thái:</th>
            <td>
                <form action="{{ route('admin.bill.updateStatus', $bill['payment_id']) }}" method="POST">
                    @csrf
                    <select name="payment_status" class="form-control">
                        <option value="pending" {{ $bill['payment_status'] == 'pending' ? 'selected' : '' }}>Chờ xử lý</option>
                        <option value="completed" {{ $bill['payment_status'] == 'completed' ? 'selected' : '' }}>Hoàn tất</option>
                        <option value="failed" {{ $bill['payment_status'] == 'failed' ? 'selected' : '' }}>Thất bại</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>
                </form>
            </td>
        </tr>
        <tr>
            <th>Ngày thanh toán:</th>
            <td>{{ \Carbon\Carbon::parse($bill['created_at'])->format('d/m/Y H:i') }}</td>
        </tr>
    </table>

    <a href="{{ route('admin.bills') }}" class="btn btn-secondary">Quay lại</a>
</div>
@endsection
