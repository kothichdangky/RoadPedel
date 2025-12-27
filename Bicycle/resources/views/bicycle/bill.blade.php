@extends('layouts.nav')
@section('content')
    <style>
        .invoice-container {
            max-width: 600px;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .invoice-details {
            margin-top: 20px;
        }
        .invoice-details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <h2>Hóa Đơn Thanh Toán</h2>
        <div class="invoice-details">
            <p><strong>Transaction ID:</strong> {{ $payment->payment_id }}</p>
            <p><strong>Người thanh toán:</strong> {{ $payment->payer_id }}</p>
            <p><strong>Email:</strong> {{ $payment->payment_email }}</p>
            <p><strong>Số tiền:</strong> {{ $payment->amount }} {{ $payment->currency }}</p>
            <p><strong>Trạng thái:</strong> {{ ucfirst($payment->payment_status) }}</p>
        </div>
    </div>
</body>
</html>
@endsection
