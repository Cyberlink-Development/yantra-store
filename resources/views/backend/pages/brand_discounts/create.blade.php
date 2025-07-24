@extends('backend.layouts.master')
@section('content')
<h2>Create Brand Discount</h2>
@include('backend.pages.brand_discounts._form', [
    'action' => route('brand-discounts.store'),
    'method' => 'POST',
    'brands' => $brands,
    'selectedBrand' => old('brand_id')
])
@endsection
