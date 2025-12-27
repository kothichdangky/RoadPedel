@extends('layouts.navadmin')
@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">Cập nhật công việc</h5>
        <div class="card-body">
            <form method="post" action="{{ route('road.newedit', $NewsPosts->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">heading</label>
                    <input value="{{ $NewsPosts->heading }}" name="heading" type="text" class="form-control" >
                </div>

                <div>
                    <label for="" class="form-label">File</label>
                    <input name="image" type="file" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">text</label>
                    <input value="{{ $NewsPosts->text }}" name="text" type="text" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>
@endsection
