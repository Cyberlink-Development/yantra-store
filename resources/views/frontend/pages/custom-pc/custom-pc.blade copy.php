@extends('frontend.include.master')
@section('content')

<style>
    .btn-danger{
        background-color: var(--secondary) !important;
    }
    .icon-wrapper {
        /* background-color: rgba(254, 105, 106, 0.1); */
        background-color: var(--secondary);
        border-radius: 100%;
        padding: 10px;
        height: 50px;
        width: 50px;
    }

    .f-17 {
        font-size: 17px;
    }

    .custom-header {
        border: none !important;
        padding-bottom: 0 !important;
    }

    .custom-row {
        border: 1px solid #e3e9ef;
        padding: 11px 0;
        border-radius: 8px;
        transition: 0.5s ease-in;
    }

    .custom-row:hover {
        background-color: #f5f5f5;
    }

    .hover-underline {
        text-decoration: none;
    }

    .hover-underline:hover {
        text-decoration: underline;
    }
</style>
<!-- Page Title-->
<div class=" bg-primary pt-2 pb-2">
    <div class="container py-2 py-lg-3">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center align-item-center  mb-3 mb-lg-0 pt-lg-2 ">
                <div>
                    <div class=" pr-lg-4 text-center">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <img src="{{ asset('theme-assets/img/custom/settings.png') }}" height="70" width="70">
                            <h1 class="h3 mb-0 text-white mt-2"> Customize Your PC</h1>
                        </div>
                        <p class="text-white">Build your dream PC by selecting components below. We'll check compatibility and calculate the total cost.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Content-->
<div class="container-fluid px-4 px-md-5 mt-5">
    <div class="row">
        <div class="col-12 p-0">
            <div class="d-flex  justify-content-between pt-2 ">
                <div class=" pr-lg-4 text-md-left text-center">
                    <h2 class="h4 mb-0">Build Your Own PC</h2>
                </div>
                <div class=" pr-lg-4 text-md-left text-center">
                    <h2 id="total-price" class="h5 mb-0">Total: Rs. 0</h2>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="form-inline flex-nowrap mr-3 mr-sm-4 pb-3">
                    <button class="btn btn-outline-primary btn-sm" type="button" onclick="resetAll()">
                        <i class="czi-loading font-size-base mr-2"></i>Reset
                    </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Motherboard -->
    @foreach ($componentTypes as $row)
        <div class="row bg-white rounded-lg px-0 px-md-3 py-3 mb-3">
            <div class="col-md-6">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <div class="icon-wrapper d-flex justify-content-center align-items-center">
                        <img src="{{ asset('theme-assets/img/custom/mb.svg') }}" height="24" width="24" />
                    </div>
                    <div class="ml-3">
                        <h3 class="accordion-heading f-17 m-0">{{ $row->name }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-between justify-content-md-end align-items-center" id="component-{{ $row->id }}-select">
                <span class="mr-2">No {{ $row->name }} Selected</span>
                <a class="btn btn-primary btn-sm pl-2" href="#modal-{{ $row->id }}" data-toggle="modal">
                    <i class="czi-add mr-2"></i>Select
                </a>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal-{{ $row->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header custom-header">
                        <h4 class="h4 mb-0 ml-2">Select a {{ $row->name }}</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body tab-content py-4">
                        @forelse ($row->products as $product)
                            <div class="row custom-row mx-0 mx-md-1 mb-3">
                                <div class="d-md-flex align-items-center col-md-10">
                                    <div class="d-flex justify-content-center">
                                        <img src="{{ $product->main_image->image ? asset('images/products/' . $product->main_image->image) : asset('theme-assets/img/offer/offer1.png') }}" width="80" alt="">
                                    </div>
                                    <div class="ml-0 ml-md-2">
                                        <h6 class="widget-product-title text-center text-md-left">
                                            {{ $product->product_name }}
                                        </h6>
                                        <p class="m-0 font-weight-bold text-center text-md-left f-17">
                                            Rs. {{ $product->discount_price ?? $product->price }}
                                            @if($product->discount_price)
                                                <del class="font-size-sm text-danger">Rs. {{ $product->price }}</del>
                                            @endif
                                        </p>
                                        <p class="hover-underline m-0 text-center text-md-left f-17">
                                            <a href="{{route('product-single',$product->slug)}}" target="_blank" class="hover-underline">
                                                View Product
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2 d-flex align-items-center justify-content-center">
                                    <button class="btn btn-secondary btn-sm pl-2"
                                        onclick="selectProduct('component-{{ $row->id }}', '{{ $product->product_name }}','{{ $product->discount_price ?? $product->price }}')">
                                        Add Product
                                    </button>
                                </div>
                            </div>
                        @empty
                            <p class="text-center">No products available for {{ $row->name }}</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center align-items-center">
        <a class="btn btn-primary pl-2" href="">Complete Selection to Buy</a>
    </div>
</div>
<script>
    let selectedProducts = {};

    function selectProduct(containerId, productName, productPrice) {
        const container = document.getElementById(`${containerId}-select`);
        container.innerHTML = `
            <div class="d-flex align-items-center w-100">
                <span class="flex-grow-1 text-truncate">${productName}</span>
                <span class="ml-3 text-nowrap">Rs. ${parseFloat(productPrice).toLocaleString()}</span>
                <button class="btn btn-sm btn-danger ml-3" onclick="resetSelection('${containerId}')">
                    <i class="czi-trash"></i>
                </button>
            </div>
        `;

        // Save selected product
        selectedProducts[containerId] = parseFloat(productPrice);

        // Update total
        updateTotal();

        // Close modal
        $(`#modal-${containerId.replace('component-', '')}`).modal('hide');
    }

    function resetSelection(containerId) {
        const container = document.getElementById(`${containerId}-select`);
        container.innerHTML = `
            <span class="mr-2">No Product Selected</span>
            <a class="btn btn-primary btn-sm pl-2" href="#modal-${containerId.replace('component-', '')}" data-toggle="modal">
                <i class="czi-add mr-2"></i>Select
            </a>
        `;

        // Remove product
        delete selectedProducts[containerId];

        // Update total
        updateTotal();
    }

    function updateTotal() {
        let total = 0;
        for (let key in selectedProducts) {
            total += selectedProducts[key];
        }
        document.getElementById('total-price').innerText = `Total: Rs. ${total.toLocaleString()}`;
    }

    function resetAll() {
        Swal.fire({
            title: 'Are you sure?',
            text: "This will clear all your selected components.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, reset all!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Clear selections
                selectedProducts = {};

                // Reset all component rows
                document.querySelectorAll("[id$='-select']").forEach(container => {
                    const id = container.id.replace('-select', '');
                    container.innerHTML = `
                        <span class="mr-2">No Product Selected</span>
                        <a class="btn btn-primary btn-sm pl-2" href="#modal-${id.replace('component-', '')}" data-toggle="modal">
                            <i class="czi-add mr-2"></i>Select
                        </a>
                    `;
                });

                // Reset total
                updateTotal();

                // Success message
                Swal.fire(
                    'Reset!',
                    'All selections have been cleared.',
                    'success'
                );
            }
        });
    }

</script>

@endsection