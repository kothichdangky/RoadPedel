@extends('layouts.navadmin')
@section('content')

</head>

<body>

<h2 class="mx-3">User List</h2>

<table class="mx-3">
    <div class="mx-4" style="display: flex">
        <form class="navbar-form navbar-left" method="GET" action="{{ route('road.searchUser') }}">
            @csrf
            <div class="row ">
                <div class="col-9 px-1">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control"
                            placeholder="Search">
                    </div>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-warning-2">Tìm</button>
                </div>
            </div>
        </form>

    </div>
    <thead>
        <tr>
            <th>Name</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @if (!empty($Users))
            @foreach ($Users as $key => $User)
                <tr id="row-{{ $key }}">
                    @csrf
                    <td>
                        <span class="input-info" id="name_info">{{ $User->name }}</span> </br>
                        <input type="hidden" value="{{ $User->id }}" placeholder="name"
                            id="user_id-{{ $key }}">
                        <input type="text" value="{{ $User->name }}" id="name-{{ $key }}"
                            class="input-edit form-control">
                    </td>
                    <td>
                        <span class="input-info" id="role_info">{{ $User->role }}</span></br>
                        <select id="role-{{ $key }}" class="input-edit form-control">
                            <option value="admin" {{ $User->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="user" {{ $User->role == 'user' ? 'selected' : '' }}>User</option>
                            <option value="editor" {{ $User->role == 'editor' ? 'selected' : '' }}>Editor</option>
                        </select>
                    </td>
                    <td>
                        <button href="javascript:;" class="btn btn-edit btn-warning-2 " data-index="{{ $key }}">edit</button>
                        <button class="btn btn-update btn-warning-2 " data-index="{{ $key }}">Update</button>
                        <a onclick="return confirm('Are you sure?')"
                        href="{{ route('road.deleteUser', $User->id) }}" class="btn btn-danger">Delete</a>
                    </td>

                </tr>
                @php($key++)
            @endforeach
        @endif

    </tbody>
</table>

<style>
.input-edit {
    display: none;
}

.btn-update {
    display: none;
}
</style>

<script>
var index = '{{ $key }}';

$('.btn-edit').click(function() {
    var index = $(this).data('index');

    $(this).hide(); // Ẩn nút "edit"
    $(this).siblings('.btn-update').show(); // Hiển thị nút "update"
    $(this).parents('#row-' + index).find('.input-info').hide(); // Ẩn phần thông tin tĩnh
    $(this).parents('#row-' + index).find('.input-edit').show(); // Hiển thị các ô nhập liệu
});

$('.btn-update').click(function() {
    var index = $(this).data('index');
    $(this).hide(); // Ẩn nút "update"
    $(this).siblings('.btn-edit').show(); // Hiển thị nút "edit"
    $('#row-' + index).find('.input-info').show(); // Hiển thị phần thông tin tĩnh
    $('#row-' + index).find('.input-edit').hide(); // Ẩn các ô nhập liệu

    var id = $('#row-' + index).find('#user_id-' + index).val();
    var name = $('#row-' + index).find('#name-' + index).val();
    var role = $('#row-' + index).find('#role-' + index).val();

    if (!id || !name || !role) {
        alert('Dữ liệu không hợp lệ.');
        console.log('Debug data:', {
            id,
            name,
            role
        }); // In dữ liệu để kiểm tra
        return;
    }

    $.ajax({
        url: '{{ route('User.update') }}',
        type: 'put',
        dataType: 'json',
        data: {
            _token: '{{ csrf_token() }}',
            id: id,
            name: name,
            role: role
        },
        success: function(json) {
            if (json == 500) {
                alert('Cập nhật thất bại.');
                return;
            }



            $('#row-' + index).find('#name_info').text(name);
            $('#row-' + index).find('#role_info').text(role);

            alert('Cập nhật thành công.');
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert('Có lỗi xảy ra: ' + xhr.statusText);
        }
    });
});

$('.btn-create').click(function() {
    var index = $(this).data('index');
    $(this).hide(); // Ẩn nút "update"
    $(this).siblings('.btn-edit').show(); // Hiển thị nút "edit"
    $('#row-' + index).find('.input-info').show(); // Hiển thị phần thông tin tĩnh
    $('#row-' + index).find('.input-edit').hide(); // Ẩn các ô nhập liệu

    var name = $('#row-' + index).find('#name').val();
    var role = $('#row-' + index).find('#role').val();

    $.ajax({
        url: '{{ route('User.add') }}',
        type: 'post',
        dataType: 'json',
        data: {
            _token: '{{ csrf_token() }}',
            name: name,
            role: role
        },
        success: function(json) {
            if (json == 500) {
                alert('Cập nhật thất bại.');
                return;
            }

            $('#row-' + index).find('#name_info').text(name);
            $('#row-' + index).find('#role_info').text(role);
            $('#row-' + index).find('#User_id').val(json.User_id);

            $('#row-' + index).find('#name').addClass('input-edit');
            $('#row-' + index).find('#role').addClass('input-edit');
            alert('Tạo mới thành công.');
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert('Có lỗi xảy ra: ' + xhr.statusText);
        }
    });
});
</script>
@endsection
