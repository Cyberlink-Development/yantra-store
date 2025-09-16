@extends('backend.layouts.master')

@section('breadcrum')
    @include('backend.layouts.breadcrum', [
        'title' => 'Edit Offer',
        'backLabel' => 'List',
        'backLink' => route('offers.index')
    ])
@endsection

@section('content')
    <div class="container">
        <form method="post" class="form-group" action="{{ route('offers.update', $offer->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="box">
                                <hr>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="title" class="control-label">Title</label>
                                        <input class="form-control" placeholder="Offer Title" name="title" type="text" value="{{ old('title', $offer->title) }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="sub_title" class="control-label">Sub Title</label>
                                        <input class="form-control" placeholder="Sub Title" name="sub_title" type="text" value="{{ old('sub_title', $offer->sub_title) }}">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="type" class="control-label">Discount Type</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="">-- Select Type --</option>
                                            <option value="1" {{ old('type', $offer->type ?? null) === 1 ? 'selected' : '' }}>Percentage</option>
                                            <option value="0" {{ old('type', $offer->type ?? null) === 0 ? 'selected' : '' }}>Flat</option>
                                        </select>
                                    </div> -->

                                    <div class="form-group">
                                        <label for="discount" class="control-label">Discount Percent</label>
                                        <input class="form-control" placeholder="Enter discount value" name="discount" id="discount" type="number" min="0" max="99.99" value="{{ old('discount', $offer->discount ?? null) }}" >
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
                                Update
                            </button>
                        </div>
                    </div>

                    <div class="card" style="box-shadow:none; border:none;">
                        <div class="card-body">
                            <div class="form-group m-0">
                                <label for="status" class="control-label m-0">Status:</label>
                                <input type="checkbox" id="status" name="status" {{ old('status', $offer->status) ? 'checked' : '' }} />
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
            } else if (typeSelect.value === '1') { // percentage
                discountInput.disabled = false;
                discountInput.setAttribute('max', '99.99'); // less than 100
            } else if (typeSelect.value === '0') { // flat
                discountInput.disabled = false;
                discountInput.removeAttribute('max'); // no limit
            }
        }

        typeSelect.addEventListener('change', handleDiscountField);
        handleDiscountField(); // run on page load
    });
</script>
@endpush
