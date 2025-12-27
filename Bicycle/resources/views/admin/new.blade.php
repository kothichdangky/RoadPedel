@extends('layouts.navadmin')

@section('content')
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <div style="display: flex">
                    <form class="navbar-form navbar-left" method="GET" action="{{ route('road.search') }}">
                        @csrf
                    </form>
                    <a class=" px-4 " href="{{ route('road.newcreate') }}">
                        <p class="oxa text-warning-2">{{ __('Thêm tin') }}</p>
                    </a>
                </div>
                <thead>
                    <tr>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Ngày đăng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($NewsPosts as $NewsPost)
                        <tr>
                            <td >
                                {{ $NewsPost->heading }}
                            </td>
                            <td style="max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                              <a href="" class="text-dark">  {{ $NewsPost->text }}</a>
                            </td>
                            <td>
                                {{ $NewsPost->created_at->format('d/m/Y H:i') }}
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure?')"
                                    href="{{ route('road.newdelete', $NewsPost->id) }}" class="btn btn-danger">Delete</a>
                                <a  href="{{ route('road.newedit', $NewsPost->id) }}" class="btn btn-warning-2">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
