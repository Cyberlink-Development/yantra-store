<form method="POST" action="{{ $action }}">
    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif

    <div class="form-group">
        <label>Brand</label>
        <select name="brand_id" class="form-control">
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ old('brand_id', $selectedBrand ?? '') == $brand->id ? 'selected' : '' }}>
                    {{ $brand->brand_name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Discount Type</label>
        <select name="discount_type" class="form-control">
            <option value="percentage">Percentage</option>
            <option value="fixed">Fixed</option>
        </select>
    </div>

    <div class="form-group">
        <label>Discount Value</label>
        <input type="number" step="0.01" name="discount_value" class="form-control" value="{{ old('discount_value', $discount->discount_value ?? '') }}">
    </div>

    <div class="form-group">
        <label>Starts At</label>
        <input type="date" name="starts_at" class="form-control" value="{{ old('starts_at', $discount->starts_at ?? '') }}">
    </div>

    <div class="form-group">
        <label>Ends At</label>
        <input type="date" name="ends_at" class="form-control" value="{{ old('ends_at', $discount->ends_at ?? '') }}">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
