@if($reviews->count() > 0)
    @foreach($reviews as $row)
        <div class="product-review pb-4 mb-4 border-bottom">
            <div class="d-flex justify-content-between mb-3">
                <div class="media media-ie-fix align-items-center mr-4 pr-2">
                    <img class="rounded-circle" width="50" src="img/shop/reviews/01.jpg" alt="Rafael Marquez" />
                    <div class="media-body pl-3">
                        <h6 class="font-size-sm mb-0">{{$row->name}}</h6>
                        <span class="font-size-ms text-muted">{{ $row->created_at->format('M d, Y') }}</span>
                    </div>
                </div>
                <div class="mb-2">
                    <div class="star-list d-flex">
                        @php
                            $stars = getStarRatings($row->rating);
                        @endphp

                        @for ($i = 0; $i < $stars['full']; $i++)
                            <i class="sr-star czi-star-filled active-star"></i>
                        @endfor
                        @if ($stars['half'])
                            <i class="sr-star czi-star-half active-star"></i>
                        @endif
                        @for ($i = 0; $i < $stars['empty']; $i++)
                            <i class="sr-star czi-star-filled inactive-star"></i>
                        @endfor
                    </div>
                </div>
            </div>
            <p class="font-size-md mb-2">{{$row->message}}</p>
        </div>
    @endforeach
@else
    <div class="product-review pb-4 mb-4 border-bottom">
        <p>
            Soon...
        </p>
    </div>
@endif
