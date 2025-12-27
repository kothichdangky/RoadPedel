@extends('layouts.nav')
@section('content')

    <body>

        <!-- Product Detail Section -->
        <div class="container mt-5">
            <div class="row">
                <!-- Product Image -->
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $products->image) }}" class="product-image w-100 img-fluid" alt="Xe Đạp">
                </div>
                <!-- Product Information -->
                <div class="col-md-6">
                    <h1 class="product-title">{{ $products->name }}</h1>
                    <p class="text-muted">Mã sản phẩm: MTB-2024</p>
                    <p class="text-primary h4">
                        @if ($products->price_sale)
                            <span style="text-decoration: line-through; color: gray;">
                                ${{ $products->price }}
                            </span>
                            <span style="color: #006D77;" class="px-2">
                                ${{ $products->price_sale }}
                            </span>
                        @else
                            <span>
                                ${{ $products->price }}
                            </span>
                        @endif
                    </p>
                    <p class="product-description">
                        {{ $products->intro }}
                    </p>
                    <button
                                        class="btn btn-warning text-dark add-to-cart"
                                        data-id="{{ $products->id }}"
                                        style="height: 50px; padding: 100 15px; display: inline-block; line-height: normal;">
                                        <b>{{ __('message.Add to cart') }}</b>
                                    </button>
                </div>
            </div>
        </div>

        <livewire:comments :model="$products" />
    </body>
      <script>
        $(document).ready(function() {
            $('.add-to-cart').on('click', function() {
                const productId = $(this).data('id');

                $.ajax({
                    url: `/RoadPedal/add-to-cart/${productId}`,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            const cartCount = response.cartCount;

                            // Cập nhật hoặc ẩn cart badge
                            if (cartCount > 0) {
                                if ($('#cart-count').length) {
                                    $('#cart-count').text(cartCount);
                                } else {
                                    $('.cart-icon').append(`<span id="cart-count" class="cart-badge">${cartCount}</span>`);
                                }
                            } else {
                                $('#cart-count').remove();
                            }
                        }
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText); // Log lỗi chi tiết
                    }
                });
            });
        });
    </script>
@endsection
