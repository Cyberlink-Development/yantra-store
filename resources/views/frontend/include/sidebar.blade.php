<div class="cz-sidebar rounded-lg box-shadow-lg sticky" id="shop-sidebar" >
    <div class="cz-sidebar-header box-shadow-sm">
        <button class="close ml-auto" type="button" data-dismiss="sidebar" aria-label="Close">
            <span class="d-inline-block font-size-xs font-weight-normal align-middle">Close sidebar</span>
            <span class="d-inline-block align-middle ml-2" aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="cz-sidebar-body">
        <!-- Categories-->
        <div class="widget widget-categories mb-4 ">
            <h3 class="widget-title ">Filters</h3>

            <div class="accordion mt-n1" id="shop-categories">
                <form id="filterForm">
                    <!-- Branc-->
                    <div class="card border-bottom">
                        <div class="card-header">
                            <h3 class="accordion-heading">
                                <a class="{{ isFilterByCategory('brands') ? '' : 'collapsed' }}" href="#shoes" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="shoes">Brands
                                    <span class="accordion-indicator"></span>
                                </a>
                            </h3>
                        </div>
                        <div class="collapse {{ isFilterByCategory('brands') ? 'show' : '' }}" id="shoes" data-parent="#shop-categories">
                            <div class="card-body">
                                <div class="widget widget-links cz-filter">
                                    <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" name="dell" value="dell" id="ex-check-1" {{ isFilterChecked('brands', 'dell') ? 'checked' : '' }} data-category="brands" >
                                                <label class="custom-control-label" for="ex-check-1">Dell</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" name="acer" value="acer" id="ex-check-2" data-category="brands" {{ isFilterChecked('brands', 'acer') ? 'checked' : '' }} >
                                                <label class="custom-control-label" for="ex-check-2">Acer</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-3" data-category="brands" >
                                                <label class="custom-control-label" for="ex-check-3">Lenevo</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-0">
                                                <label class="custom-control-label" for="ex-check-0">Dell</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-9">
                                                <label class="custom-control-label" for="ex-check-9">Acer</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-90">
                                                <label class="custom-control-label" for="ex-check-90">Lenevo</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- type-->
                    <div class="card border-bottom">
                        <div class="card-header">
                            <h3 class="accordion-heading">
                                <a class="collapsed" href="#type" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="shoes">Type
                                    <span class="accordion-indicator"></span>
                                </a>
                            </h3>
                        </div>
                        <div class="collapse" id="type" data-parent="#shop-categories">
                            <div class="card-body">
                                <div class="widget widget-links cz-filter">
                                    <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-4">
                                                <label class="custom-control-label" for="ex-check-4">Notebook</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-5">
                                                <label class="custom-control-label" for="ex-check-5">Ultrabook</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-6">
                                                <label class="custom-control-label" for="ex-check-6">Standard</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-a">
                                                <label class="custom-control-label" for="ex-check-a">Notebook</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-b">
                                                <label class="custom-control-label" for="ex-check-b">Ultrabook</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-c">
                                                <label class="custom-control-label" for="ex-check-c">Standard</label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- type-->

                    <!-- type-->
                    <div class="card border-bottom">
                        <div class="card-header">
                            <h3 class="accordion-heading"><a class="collapsed" href="#Processor" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="shoes">Processor<span class="accordion-indicator"></span></a></h3>
                        </div>
                        <div class="collapse" id="Processor" data-parent="#shop-categories">
                            <div class="card-body">
                                <div class="widget widget-links cz-filter">
                                    <ul class="widget-list cz-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-10">
                                                <label class="custom-control-label" for="ex-check-10">Notebook</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-11">
                                                <label class="custom-control-label" for="ex-check-11">Ultrabook</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-12">
                                                <label class="custom-control-label" for="ex-check-12">Standard</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-q">
                                                <label class="custom-control-label" for="ex-check-q">Notebook</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-w">
                                                <label class="custom-control-label" for="ex-check-w">Ultrabook</label>
                                            </div>
                                        </li>
                                        <li class="widget-list-item cz-filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input filter-input" type="checkbox" id="ex-check-e">
                                                <label class="custom-control-label" for="ex-check-e">Standard</label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Price range-->
                    @php
                        $roundedMaxPrice = roundUpMaxPrice($maxPrice);
                    @endphp
                    <div class="widget mt-2 mb-4 pb-4 border-bottom">
                        <h3 class="widget-title">Price</h3>
                        <div class="cz-range-slider" data-start-min="0" data-start-max="{{ $roundedMaxPrice}}" data-min="0" data-max="{{ $roundedMaxPrice }}" data-step="1">
                            <div class="cz-range-slider-ui"></div>
                            <div class="d-flex pb-1">
                                <div class="w-50 pr-2 mr-2">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend"><span class="input-group-text">Rs</span></div>
                                        <input class="form-control cz-range-slider-value-min" type="number" name="minPrice" >
                                    </div>
                                </div>
                                <div class="w-50 pl-2">
                                    <div class="input-group input-group-sm">
                                        <div class="input-group-prepend"><span class="input-group-text">Rs</span></div>
                                        <input class="form-control cz-range-slider-value-max" type="number" name="maxPrice">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" onclick="filterProduct(event)">Filter Products
                            <span>
                                <i style="font-size: 12px;" class="czi-arrow-right ml-1 mr-1 font-weight-bold "></i>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
