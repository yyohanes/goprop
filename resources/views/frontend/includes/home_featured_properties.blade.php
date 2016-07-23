<?php
$exclusiveProperties = \GoProp\Facades\ProjectHelper::getFeaturedProperties(10);
?>
@if(count($exclusiveProperties) > 0)
<section class="exclusive-property-columns">
    <div class="container">
        <header class="header-area">
            <h2 class="entry-title text-uppercase">{{ trans('property.featured_property_widget.title') }}</h2>
        </header>
        <div class="entry-content">
            <div class="exclusive-property-carousel">
                <div id="exclusiveProperty-list">
                    @foreach($exclusiveProperties as $exclusiveProperty)
                        <div class="exclusiveProperty-item exclusiveProperty-{{ $exclusiveProperty->exclusive_type }}">
                            <a href="{{ route('frontend.property.view', ['id' => $exclusiveProperty->id]) }}">
                                <img src="{{ url('images/exclusive_thumbnail/'.$exclusiveProperty->getPhotoThumbnail()) }}" />

                                <div class="exclusiveProperty-overlay">
                                    <div class="exclusiveProperty-detail">
                                        <h3 class="entry-title">{{ $exclusiveProperty->property_name }}</h3>
                                        <div class="entry-desc">{{ \GoProp\Facades\AddressHelper::getAddressLabel($exclusiveProperty->subdistrict, 'subdistrict') }}, {{ \GoProp\Facades\AddressHelper::getAddressLabel($exclusiveProperty->city, 'city') }}</div>
                                        <div class="entry-sale">{{ trans('property.for.'.($exclusiveProperty->for_sell?'sell':'rent').'_property_title', ['name' => trans('property.property_type.'.$exclusiveProperty->type->slug)]) }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif