<div class="property-item">
    <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property->id]) }}" class="img">
        <img src="{{ $image }}" alt="Image" class="img-fluid w-100" style="height: 300px" />
        {{-- <img src="{{ $property->images->first()?->imageUrl() }}" alt="Image"
            class="img-fluid" /> --}}
    </a>

    <div class="property-content">
        <div class="price mb-0">
            <span>{{ number_format($property->price, thousands_separator: ' ') }} FCFA </span>
        </div>
        <div>
            {{-- <span class="d-block mb-2 text-black-50">{{ $property->postal_code }} -
                {{ $property->city }}</span> --}}
            <div class="specs fs-4 d-flex mb-0">
                <span class="d-block d-flex align-items-center my-3">
                    <i class="bi bi-geo-alt text-dark me-2 fs-6"></i>
                    <span class="caption">{{ $property->city }} Localisation</span>
                </span>
            </div>
            <span class="city d-block mb-3 fs-5">{{ $property->title }}</span>

            <div class="specs fs-4 d-flex mb-3">

                @if ($property->type !== 'terrain')
                    <span class="d-block d-flex align-items-center me-3">
                        <span class="icon-bed me-2"></span>
                        <span class="caption">{{ $property->bedrooms }} pièces</span>
                    </span>
                @endif

                <span class="d-block d-flex align-items-center">
                    {{-- <span class="icon-bath me-2"></span> --}}
                    <me-2 class="bi bi-fullscreen me-2"></i>
                        <span class="caption">{{ $property->surface }} m²</span>
                </span>

            </div>
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property->id]) }}"
                class="btn btn-primary py-2 px-3">Voir les
                détails </a>

            <hr>
            <span class="d-block d-flex align-items-center">
                <i class="bi bi-alarm me-2"></i>
                <span class="caption">{{ $property->created_at }}</span>
            </span>
        </div>

    </div>
</div>
