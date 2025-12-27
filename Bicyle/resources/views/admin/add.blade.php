@extends('layouts.navadmin')
@section('content')


<div class="container">

    <div class="card">
        <h5 class="card-header">Thêm Sản Phẩm</h5>
        <div class="card-body">
            <form method="post" action="{{ route('road.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input name="image" type="file" class="form-control" >
                </div>
                @error('image')
                <div class="text-danger">điền vào</div>
            @enderror
                <div class="mb-3">
                    <label for="" class="form-label">tên</label>
                    <input name="name" type="text" class="form-control" >
                </div>
                @error('name')
                <div class="text-danger">điền vào</div>
            @enderror
                <div class="mb-3">
                    <label for="" class="form-label">Giới thiệu</label>
                    <input name="intro" type="text" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">giá</label>
                    <input name="price" type="text" class="form-control" >
                </div>
                @error('price')
                <div class="text-danger">điền vào</div>
            @enderror
                <div class="mb-3">
                    <label for="" class="form-label">giá giảm</label>
                    <input name="price_sale" type="text" class="form-control" >
                </div>


                <button type="submit" class="btn btn-warning-2">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>
    document.querySelector('form').addEventListener('submit', function(e) {
        let hasError = false;

        // Xóa lỗi cũ
        document.querySelectorAll('.text-danger').forEach(el => el.remove());

        const image = document.querySelector('input[name="image"]');
        const name = document.querySelector('input[name="name"]');
        const price = document.querySelector('input[name="price"]');

        if (!image.value) {
            showError(image, 'Vui lòng chọn hình ảnh');
            hasError = true;
        }

        if (!name.value.trim()) {
            showError(name, 'Vui lòng nhập tên sản phẩm');
            hasError = true;
        }

        if (!price.value.trim()) {
            showError(price, 'Vui lòng nhập giá');
            hasError = true;
        }

        if (hasError) {
            e.preventDefault(); // Ngăn gửi form nếu có lỗi
        }
    });

    function showError(inputElement, message) {
        const error = document.createElement('div');
        error.className = 'text-danger';
        error.textContent = message;
        inputElement.parentNode.appendChild(error);
    }
</script>

@endsection

