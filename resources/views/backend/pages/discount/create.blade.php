@extends('backend.layouts.master')
@section('breadcrum')
    @include('backend.layouts.breadcrum', ['title'=>'Add Discount','backLabel'=>'Back','backLink'=> route('admin.discount')])
@endsection
@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{route('admin.discount.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- general form elements -->
                            <div class="box">

                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Code</label>
                                        <input type="text" name="code" class="form-control" value="{{ old('code') }}" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="type" class="control-label">Type</label>
                                        <select class="form-control" name="type" required>
                                            <option value="flat" {{ old('type') == 'flat' ? 'selected' : '' }}>Flat</option>
                                            <option value="percent" {{ old('type') == 'percent' ? 'selected' : '' }}>Percent</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Discount</label>
                                        <input type="number" step="0.5" name="discount" class="form-control" value="{{ old('discount') }}" required />
                                        <span class="text-danger" id="discount-error"></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Usage Limit</label>
                                        <input type="number" name="usage_limit" class="form-control" value="{{ old('usage_limit') }}" />
                                    </div>

                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <input type="date" name="expiry_date" class="form-control" value="{{ old('expiry_date') }}" />
                                        <span class="text-danger" id="expiry-error"></span>
                                    </div>

                                    <div class="form-group special-link">
                                        <label for="status" class="control-label">Status:</label>
                                        <select class="form-control" name="status">
                                            <option value="1" {{ old('status', 1) == 1 ? 'selected' : '' }}>On</option>
                                            <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Off</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <input class="btn btn-danger btn-xs pull-right" type="submit" value="Save">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<script>
    document.querySelector('form').addEventListener('submit', function (e) {
        let type = document.querySelector('[name="type"]').value;
        let discountInput = document.querySelector('[name="discount"]');
        let discount = parseFloat(discountInput.value);
        let discountError = document.getElementById('discount-error');

        let expiryInput = document.querySelector('[name="expiry_date"]');
        let expiryError = document.getElementById('expiry-error');
        let expiryDate = expiryInput.value ? new Date(expiryInput.value) : null;
        let today = new Date();
        today.setHours(0,0,0,0);

        discountError.textContent = '';
        expiryError.textContent = '';

        let hasError = false;

        if (type === 'percent' && discount >= 100) {
            discountError.textContent = "Percentage discount must be less than 100%";
            discountInput.focus();
            hasError = true;
        }

        if (expiryDate && expiryDate < today) {
            expiryError.textContent = "Expiry date must be today or later";
            if(!hasError) expiryInput.focus();
            hasError = true;
        }

        if(hasError) e.preventDefault(); 
    });

</script>
@stop
