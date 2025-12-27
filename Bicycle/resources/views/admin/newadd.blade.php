@extends('layouts.navadmin')
@section('content')


<div class="container">
    <div class="card">
        <h5 class="card-header">Thêm tin</h5>
        <div class="card-body">
            <form method="post" action="{{ route('road.newstore') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="" class="form-label">heading</label>
                    <input name="heading" type="text" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    <input name="image" type="file" class="form-control" >
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">text</label>
                    <input name="text" type="text" class="form-control" >
                </div>

                <button type="submit" class="btn btn-warning-2">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection

