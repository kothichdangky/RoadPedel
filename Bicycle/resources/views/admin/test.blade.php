@extends('layouts.navadmin')
@section('content')

    <div class="container">
        <h1>Choices.js Demo</h1>

        <!-- Multi-select Dropdown -->
        <div class="example">
            <label for="multi-select">Multi-select Dropdown:</label>
            <select id="multi-select" multiple>
                <option for="product-{{ $product->id }}">{{ $product->name }}</option>
            </select>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script>
        // Initialize multi-select dropdown
        const multiSelect = new Choices('#multi-select', {
            removeItemButton: true,
            searchEnabled: true,
            placeholderValue: 'Select multiple options...'
        });
    </script>
</body>
</html>
@endsection
