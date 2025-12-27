@extends('layouts.nav')

@section('title', 'Shopping Cart')

@section('content')
    <section class="bg-light my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card border shadow-0">
                        <div class="m-4">
                            <h4 class="card-title mb-4">Your Shopping Cart</h4>

                            @if ($cart && count($cart->items) > 0)
                                @foreach ($cart->items as $item)
                                    <div class="row gy-3">
                                        <div class="col-lg-5">
                                            <div class="d-flex">
                                                <img src="{{ asset('storage/' . $item['item']->image) }}" alt="Image"
                                                    class="border rounded me-3" style="width: 96px; height: 96px;" />
                                                <div>
                                                    <a href="#" class="nav-link">{{ $item['item']->name }}</a>
                                                    <p class="text-muted">Price:
                                                        ${{ number_format($item['item']->price, 2) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="number" name="quantity" value="{{ $item['totalQty'] }}"
                                                min="1" class="form-control quantity-input"
                                                data-id="{{ $item['item']->id }}" />
                                        </div>
                                        <div class="col-lg-3 d-flex align-items-center">
                                            <p class="total-price" id="total-price-{{ $item['item']->id }}">
                                                ${{ number_format($item['totalPrice'], 2) }}
                                            </p>
                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-end">
                                            <a onclick="return confirm('Are you sure?')"
                                                href="{{ route('road.deleteCart', $item['item']->id) }}"
                                                class="btn btn-light border text-danger icon-hover-danger">Remove</a>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="mt-4">
                                    <h5>Total Quantity: <span id="total-quantity">{{ $cart->totalQty }}</span></h5>
                                    <h5>Total Price:
                                        <span id="total-cart-price" >${{ number_format($cart->totalPrice, 2) }}</span></h5>

                                    <form action={{route('payment')}} method="POST">
                                        @csrf
                                        <button class="btn btn-warning-2 " type="submit"  id="checkout-live-button"><i
                                            class="fa fa-money"></i > Checkout</button>
                                        <input name="total"style="visibility: hidden;" value="{{ $cart->totalPrice }}">

                                    </form>
                                </div>
                            @else
                                <p>Your cart is empty.</p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.quantity-input').on('change', function() {
                const productId = $(this).data('id');
                const newQuantity = $(this).val();

                if (newQuantity < 1) {
                    alert('Quantity must be at least 1.');
                    return;
                }

                $.ajax({
                    url: `/RoadPedal/cart/updateQuantity/${productId}`, // Đảm bảo thêm prefix
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantity: newQuantity
                    },
                    success: function(response) {
                        if (response.success) {
                            $(`#total-price-${productId}`).text(
                                `$${response.itemTotalPrice.toFixed(2)}`);
                            $('#total-quantity').text(response.totalQuantity);
                            $('#total-cart-price').text(
                                `$${response.totalCartPrice.toFixed(2)}`);
                        } else {
                            alert(response.message || 'An error occurred.');
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText); // Log lỗi chi tiết
                        alert('Error updating cart.');
                    }
                });

            });
        });
    </script>
@endsection
