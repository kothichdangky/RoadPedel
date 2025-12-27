@extends('layouts.navadmin')
@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">Cập nhật công việc</h5>
        <div class="card-body">
            <form method="post" action="{{ route('road.edit', $products->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">name</label>
                    <input value="{{ $products->name }}" name="name" type="text" class="form-control" >
                </div>

                <div>
                    <label for="" class="form-label">File</label>
                    <input name="image" type="file" class="form-control">
                </div>

                <div>
                    <label for="" class="form-label">Giới thiệu</label>
                    <input value="{{ $products->intro }}" name="intro" type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Giá</label>
                    <input value="{{ $products->price }}" name="price" type="text" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Giá giảm(nếu có)</label>
                    <input value="{{ $products->price_sale }}" name="price_sale" type="text" class="form-control" >
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
@endsection
