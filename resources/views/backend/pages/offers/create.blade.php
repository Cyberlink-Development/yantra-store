@extends('backend.layouts.master')

@section('breadcrum')
    @include('backend.layouts.breadcrum', [
        'title' => 'Create Offer',
        'backLabel' => 'List',
        'backLink' => route('offers.index')
    ])
@endsection

@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{ route('offers.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="box">
                                <hr>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title" class="control-label">Title</label>
                                        <input class="form-control" placeholder="Offer Title" name="title" type="text" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="sub_title" class="control-label">Sub Title</label>
                                        <input class="form-control" placeholder="Sub Title" name="sub_title" type="text">
                                    </div>

                                    <div class="form-group">
                                        <label for="type" class="control-label">Discount Type</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="">-- Select Type --</option>
                                            <option value="1">Percentage</option>
                                            <option value="0">Flat</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="discount" class="control-label">Discount</label>
                                        <input id="discount" class="form-control" placeholder="Enter discount value" name="discount" type="number" min="0" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body" style="padding:.5rem;">
                            <button class="btn btn-danger btn-xs pull-right">
                                Save
                            </button>
                        </div>
                    </div>

                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="form-group m-0">
                                <label for="status" class="control-label m-0">Status:</label>
                                <input type="checkbox" id="status" name="status" checked />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const typeSelect = document.getElementById('type');
    const discountInput = document.getElementById('discount');

    function handleDiscountField() {
        if (!typeSelect.value) {
            discountInput.value = '';
            discountInput.disabled = true;
            discountInput.removeAttribute('max');
        } else {
            discountInput.disabled = false;
            if (typeSelect.value === '1') { // Percentage
                discountInput.setAttribute('max', '99.99'); // restrict < 100
            } else {
                discountInput.removeAttribute('max'); // Flat has no max
            }
        }
    }

    typeSelect.addEventListener('change', handleDiscountField);
    handleDiscountField(); // Run once on load
});
</script>
@endpush
