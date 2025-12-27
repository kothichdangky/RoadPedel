@extends('layouts.navadmin')
@section('content')
    <div class="col-12 col-md-12 mt-2">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <div class="col-6">
                            <div style="display: flex">
                                <form class="navbar-form navbar-left" method="GET" action="{{ route('road.search') }}">
                                    @csrf
                                    <div class="row ">
                                        <div class="col-9 px-1">
                                            <div class="form-group">
                                                <input type="text" name="keyword" class="form-control"
                                                    placeholder="Search">
                                            </div>
                                        </div>
                                        <div class="col-3 px-0">
                                            <button type="submit" class="btn btn-warning-2">Tìm</button>
                                        </div>
                                    </div>
                                </form>
                                <a class=" px-4 " href="{{ route('road.create') }}">
                                    <p class="oxa text-warning-2">{{ __('Thêm sản phẩm') }}</p>
                                </a>
                            </div>


                            {{-- <a method="GET" href="{{ route('customers.search') }}" name="keyword" value="thắng" class="btn btn-primary">Thắng</a> --}}
                            <form class="navbar-form navbar-left" method="GET" action="">
                                @csrf
                                <div class="row">
                                    <tr>
                                        <th scope="col">{{ __('message.Number') }}</th>
                                        <th scope="col">{{ __('message.Name') }}</th>
                                        <th scope="col">{{ __('message.image') }}</th>
                                        <th scope="col">{{ __('message.price') }}</th>
                                        <th scope="col">{{ __('message.price_sale') }}</th>
                                        <th scope="col">{{ __('xoá/cập nhật') }}</th>

                                    </tr>
                                </div>
                            </form>
                        </div>
                    </thead>
                    <tbody>

                        {{-- vì bỏ index nên ko cần mũi tên nữa '=>' --}}
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th> {{--  loop của laravel --}}
                                <td>{{ $product->name }}</td>
                                <td><img src="{{ asset('storage/' . $product->image) }}" alt="" width="150">
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->price_sale }}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure?')"
                                        href="{{ route('road.delete', $product->id) }}" class="btn btn-danger">Delete</a>
                                    <a href="{{ route('road.edit', $product->id) }}" class="btn btn-warning-2">Update</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
