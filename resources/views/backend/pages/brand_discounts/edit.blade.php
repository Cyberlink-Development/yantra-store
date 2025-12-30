@extends('backend.layouts.master')
@section('content')
<h2>Edit Brand Discount</h2>
@include('backend.pages.brand_discounts._form', [
    'action' => route('brand-discounts.update', $brandDiscount),
    'method' => 'PUT',
    'brands' => $brands,
    'discount' => $brandDiscount,
    'selectedBrand' => $brandDiscount->brand_id
])
@endsection
