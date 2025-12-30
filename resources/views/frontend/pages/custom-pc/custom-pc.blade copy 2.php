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

    <!-- Component Rows -->
    @foreach ($componentTypes->sortBy('level') as $row)
        <div class="row bg-white rounded-lg px-0 px-md-3 py-3 mb-3"
             id="component-row-{{ $row->id }}"
             data-level="{{ $row->level }}"
             @if($row->level > 1) style="opacity: 0.5;" @endif>
            <div class="col-md-6">
                <div class="d-flex align-items-center mb-2 mb-md-0">
                    <div class="icon-wrapper d-flex justify-content-center align-items-center">
                        <img src="{{ asset('theme-assets/img/custom/mb.svg') }}" height="24" width="24" />
                    </div>
                    <div class="ml-3">
                        <h3 class="accordion-heading f-17 m-0">{{ $row->name }}</h3>
                        @if($row->level > 1)
                            <small class="text-muted">Select a Level {{ $row->level - 1 }} component first</small>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-between justify-content-md-end align-items-center" id="component-{{ $row->id }}-select">
                <span class="mr-2">No {{ $row->name }} Selected</span>
                <a class="btn btn-primary btn-sm pl-2"
                   href="#modal-{{ $row->id }}"
                   data-toggle="modal"
                   @if($row->level > 1) disabled @endif>
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
                    <div class="modal-body tab-content py-4" id="modal-body-{{ $row->id }}">
                        <div class="text-center" id="loading-{{ $row->id }}">
                            <div class="spinner-border" role="status">
                                <span class="sr-only">Loading compatible products...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="d-flex justify-content-center align-items-center">
        <a class="btn btn-primary pl-2" href="" id="complete-button" style="display:none;">Complete Selection to Buy</a>
    </div>
</div>
<script>
    let selectedProducts = {};
    let componentLevels = {};
    let allProducts = {};

    // Initialize component levels and products
    @foreach ($componentTypes as $row)
        componentLevels[{{ $row->id }}] = {{ $row->level }};
        allProducts[{{ $row->id }}] = [
            @foreach ($row->products as $product)
            {
                id: {{ $product->id }},
                name: "{{ addslashes($product->product_name) }}",
                price: {{ $product->discount_price ?? $product->price }},
                originalPrice: {{ $product->price }},
                discountPrice: {{ $product->discount_price ?? 'null' }},
                image: "",
                slug: "{{ $product->slug }}",
                // Get all compatible product IDs (both directions)
                compatibleWith: [
                    @php
                        // Products this product is compatible with (product_id -> compatible_product_id)
                        $compatibleIds = \DB::table('product_compatibilities')
                            ->where('product_id', $product->id)
                            ->pluck('compatible_product_id')
                            ->toArray();

                        // Products that are compatible with this product (compatible_product_id -> product_id)
                        $reverseCompatibleIds = \DB::table('product_compatibilities')
                            ->where('compatible_product_id', $product->id)
                            ->pluck('product_id')
                            ->toArray();

                        // Merge both arrays and remove duplicates
                        $allCompatibleIds = array_unique(array_merge($compatibleIds, $reverseCompatibleIds));
                    @endphp
                    {{ implode(',', $allCompatibleIds) }}
                ]
            },
            @endforeach
        ];
    @endforeach

    // Load compatible products for a component type
    function loadCompatibleProducts(componentId) {
        const modalBody = document.getElementById(`modal-body-${componentId}`);
        const loading = document.getElementById(`loading-${componentId}`);

        // Show loading
        loading.style.display = 'block';

        // Get compatible products
        let compatibleProducts = allProducts[componentId];

        // If this is level 2 or higher, filter by compatibility
        if (componentLevels[componentId] > 1) {
            const selectedLevel1Products = getSelectedProductsOfLevel(componentLevels[componentId] - 1);
            if (selectedLevel1Products.length === 0) {
                modalBody.innerHTML = '<p class="text-center text-danger">Please select a Level ' + (componentLevels[componentId] - 1) + ' component first.</p>';
                return;
            }

            // Filter products based on compatibility
            compatibleProducts = allProducts[componentId].filter(product => {
                return selectedLevel1Products.some(selectedProduct =>
                    product.compatibleWith.includes(selectedProduct.id) ||
                    selectedProduct.compatibleWith.includes(product.id)
                );
            });
        }

        // Hide loading
        loading.style.display = 'none';

        // Generate product HTML
        let productsHtml = '';
        if (compatibleProducts.length === 0) {
            productsHtml = '<p class="text-center">No compatible products available.</p>';
        } else {
            compatibleProducts.forEach(product => {
                productsHtml += `
                    <div class="row custom-row mx-0 mx-md-1 mb-3">
                        <div class="d-md-flex align-items-center col-md-10">
                            <div class="d-flex justify-content-center">
                                <img src="${product.image}" width="80" alt="">
                            </div>
                            <div class="ml-0 ml-md-2">
                                <h6 class="widget-product-title text-center text-md-left">
                                    ${product.name}
                                </h6>
                                <p class="m-0 font-weight-bold text-center text-md-left f-17">
                                    Rs. ${product.price}
                                    ${product.discountPrice ? `<del class="font-size-sm text-danger">Rs. ${product.originalPrice}</del>` : ''}
                                </p>
                                <p class="hover-underline m-0 text-center text-md-left f-17">
                                    <a href="{{ route('product-single', '') }}/${product.slug}" target="_blank" class="hover-underline">
                                        View Product
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <button class="btn btn-secondary btn-sm pl-2"
                                onclick="selectProduct('component-${componentId}', '${product.name.replace(/'/g, "\\'")}', '${product.price}', ${product.id})">
                                Add Product
                            </button>
                        </div>
                    </div>
                `;
            });
        }

        modalBody.innerHTML = productsHtml;
    }

    // Get selected products of a specific level
    function getSelectedProductsOfLevel(level) {
        const selectedOfLevel = [];
        for (let componentId in selectedProducts) {
            const compId = parseInt(componentId.replace('component-', ''));
            if (componentLevels[compId] === level) {
                selectedOfLevel.push(selectedProducts[componentId]);
            }
        }
        return selectedOfLevel;
    }

    // Handle modal show event
    @foreach ($componentTypes as $row)
        $('#modal-{{ $row->id }}').on('show.bs.modal', function() {
            loadCompatibleProducts({{ $row->id }});
        });
    @endforeach

    function selectProduct(containerId, productName, productPrice, productId) {
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

        // Save selected product with additional info
        const componentId = parseInt(containerId.replace('component-', ''));
        selectedProducts[containerId] = {
            id: productId,
            name: productName,
            price: parseFloat(productPrice),
            level: componentLevels[componentId],
            compatibleWith: allProducts[componentId].find(p => p.id === productId).compatibleWith
        };

        // Enable/disable next level components
        updateComponentAvailability();

        // Update total
        updateTotal();

        // Close modal
        $(`#modal-${containerId.replace('component-', '')}`).modal('hide');
    }

    function resetSelection(containerId) {
        const componentId = parseInt(containerId.replace('component-', ''));
        const container = document.getElementById(`${containerId}-select`);

        container.innerHTML = `
            <span class="mr-2">No Product Selected</span>
            <a class="btn btn-primary btn-sm pl-2" href="#modal-${containerId.replace('component-', '')}" data-toggle="modal">
                <i class="czi-add mr-2"></i>Select
            </a>
        `;

        // Remove product
        delete selectedProducts[containerId];

        // Reset all higher level components
        resetHigherLevelComponents(componentLevels[componentId]);

        // Update component availability
        updateComponentAvailability();

        // Update total
        updateTotal();
    }

    function resetHigherLevelComponents(level) {
        for (let componentId in componentLevels) {
            if (componentLevels[componentId] > level) {
                const containerId = `component-${componentId}`;
                if (selectedProducts[containerId]) {
                    delete selectedProducts[containerId];

                    const container = document.getElementById(`${containerId}-select`);
                    container.innerHTML = `
                        <span class="mr-2">No Product Selected</span>
                        <a class="btn btn-primary btn-sm pl-2" href="#modal-${componentId}" data-toggle="modal" disabled>
                            <i class="czi-add mr-2"></i>Select
                        </a>
                    `;
                }
            }
        }
    }

    function updateComponentAvailability() {
        for (let componentId in componentLevels) {
            const level = componentLevels[componentId];
            const row = document.getElementById(`component-row-${componentId}`);

            // Check if row exists
            if (!row) continue;

            const selectButton = row.querySelector('a[data-toggle="modal"]');

            // Check if select button exists
            if (!selectButton) continue;

            if (level === 1) {
                // Level 1 components are always available
                row.style.opacity = '1';
                selectButton.removeAttribute('disabled');
                selectButton.classList.remove('disabled');
            } else {
                // Check if previous level has selections
                const hasRequiredSelections = getSelectedProductsOfLevel(level - 1).length > 0;

                if (hasRequiredSelections) {
                    row.style.opacity = '1';
                    selectButton.removeAttribute('disabled');
                    selectButton.classList.remove('disabled');
                    const smallElement = row.querySelector('small');
                    if (smallElement) {
                        smallElement.style.display = 'none';
                    }
                } else {
                    row.style.opacity = '0.5';
                    selectButton.setAttribute('disabled', 'true');
                    selectButton.classList.add('disabled');
                    const smallElement = row.querySelector('small');
                    if (smallElement) {
                        smallElement.style.display = 'block';
                    }
                }
            }
        }

        // Show/hide complete button
        const totalSelected = Object.keys(selectedProducts).length;
        const completeButton = document.getElementById('complete-button');
        if (completeButton) {
            if (totalSelected > 0) {
                completeButton.style.display = 'inline-block';
            } else {
                completeButton.style.display = 'none';
            }
        }
    }

    function updateTotal() {
        let total = 0;
        for (let key in selectedProducts) {
            total += selectedProducts[key].price;
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

                // Update component availability
                updateComponentAvailability();

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

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        updateComponentAvailability();
    });

    document.getElementById('complete-button').addEventListener('click', function(e) {
        e.preventDefault();

        if (Object.keys(selectedProducts).length === 0) {
            toastr.warning("Please select at least one product before proceeding.");
            return;
        }

        let productsToAdd = Object.values(selectedProducts).map(p => ({
            product_id: p.id,
            quantity: 1
        }));

        $.ajax({
            url: "{{ route('cart-add-multiple') }}",
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                products: productsToAdd
            },
            success: function(res) {
                ajax_response(res);
                $('#cartNav').html(res.view);
                $('#mblCart .badge').text(res.newItemCount);
                window.location.href = "{{ route('cart-item') }}";

                toastr.success("Your custom PC has been added to the cart!");
            },
            error: function() {
                toastr.error("Something went wrong while adding products.");
            }
        });
    });


</script>
@endsection
