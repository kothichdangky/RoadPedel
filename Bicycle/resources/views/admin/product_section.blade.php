@extends('layouts.navadmin')
@section('content')

<div class="container">
    <h1>Quản lý sản phẩm theo section</h1>

    <form action="{{ route('admin.updateProductSections') }}" method="POST">
        @csrf
        @php
            $sections = ['featured', 'bike']; // Danh sách các section
        @endphp

        @foreach ($sections as $section)
        <div class="mb-4">
            <h3>{{ ucfirst($section) }} Section</h3>
            <select id="multi-select-{{ $section }}" name="sections[{{ $section }}][]" multiple>
                @foreach ($products as $product)
                <option value="{{ $product->id }}"
                    {{ isset($sectionProducts[$section]) && in_array($product->id, explode(',', $sectionProducts[$section])) ? 'selected' : '' }}>
                    {{ $product->name }}
                </option>
                @endforeach
            </select>
        </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>

<!-- Thêm Choices.js -->
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">

<script>
    // Giới hạn số lượng sản phẩm
    const sectionLimits = {
        'bike': 1,    // Giới hạn 4 sản phẩm cho bike section
        'featured': 4 // Giới hạn 1 sản phẩm cho featured section
    };

    @foreach ($sections as $section)
    const choices{{ $section }} = new Choices('#multi-select-{{ $section }}', {
        removeItemButton: true,
        searchEnabled: true,
        placeholderValue: 'Chọn sản phẩm...'
    });

    // Giới hạn số lượng sản phẩm được chọn
    document.querySelector('#multi-select-{{ $section }}').addEventListener('addItem', function(event) {
        if (choices{{ $section }}.getValue().length > sectionLimits['{{ $section }}']) {
            // Thông báo lỗi
            alert(`Chỉ được chọn tối đa ${sectionLimits['{{ $section }}']} sản phẩm cho {{ ucfirst($section) }} Section.`);

            // Xóa sản phẩm vừa thêm
            choices{{ $section }}.removeActiveItems();
        }
    });
    @endforeach
</script>

@endsection
