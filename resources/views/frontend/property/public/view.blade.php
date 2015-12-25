@extends('frontend.master.layout')

@section('content')
<section class="property-search-columns">
    <div class="mid-content">
        <div class="container">
            <div class="col-sm-8 col-md-9">
                <div class="property-search-wrapper property-detail-wrapper">
                    @if(\Illuminate\Support\Facades\Auth::check() && $property->user_id == \Illuminate\Support\Facades\Auth::user()->id)
                        @include('frontend.includes.my_property_widget')
                    @endif

                    @include('frontend.property.compare_bar')

                    <header class="header-area">
                        <div class="pull-left">
                            <h3 class="entry-title">{{ $property->property_name }}</h3>
                        </div>
                        <div class="pull-right user-info">
                            <ul>
                                <li class="{{ $liked?'checked':'' }}"><a href="{{ route(($liked?'frontend.property.unlike':'frontend.property.like'), ['id' => $property->id]) }}"><i class="fa {{ $liked?'fa-heart':'fa-heart-o' }}"></i></a></li>
                                <li>
                                    @if(!\GoProp\Facades\PropertyCompareHelper::isAddedToComparison($property))
                                    <a href="{{ route('frontend.property.compare.add', ['id' => $property->id]) }}"><i class="fa fa-plus"></i></a>
                                    @else
                                    <a href="{{ route('frontend.property.compare.remove', ['id' => $property->id]) }}"><i class="fa fa-minus"></i></a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </header>
                    <div class="entry-detail">
                        <div class="entry-detail-location">
                            <div>{{ trans('property.for.'.$for.'_property_title', ['name' => trans('property.property_type.'.$property->type->slug)]) }}</div>
                            <div>{{ $subdistrict }}, {{ $city }}</div>
                        </div>
                        <div class="entry-detail-price">
                            <h2 class="entry-price">
                                @include('frontend.property.includes.price', ['for' => $property->getViewFor()])
                            </h2>
                        </div>
                    </div>
                    <div class="entry-content">
                        @if($property->photos->count() > 0)
                        <div class="banner-image-area">
                            <!--<div class="banner-status">Open House</div>-->
                            <div id="propertyDetail-Slider" class="flexslider">
                                <ul class="slides">
                                    @foreach($property->photos as $photo)
                                        <li><img src="{{ url('images/photo_gallery/'.$photo->filename) }}"></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="propertyDetailThumb-Slider" class="flexslider">
                                <ul class="slides">
                                    @foreach($property->photos as $photo)
                                    <li><img src="{{ url('images/photo_gallery_thumbnail/'.$photo->filename) }}"></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif

                        <p>
                            {!! nl2br($property->description) !!}
                        </p>
                        <ol class="faq-list">
                            <li>
                                <a href="#" class="faqs-question">{{ trans('property.view.address') }} <span class="faqs-arrow"><i class="fa fa-angle-down"></i></span></a>
                                <div class="faqs-answer clearfix">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p><strong>{{ trans('forms.fields.province') }}:</strong> {{ $province }}</p>
                                            <p><strong>{{ trans('forms.fields.city') }}:</strong> {{ $city }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><strong>{{ trans('forms.fields.area') }}:</strong> {{ $subdistrict }}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="faqs-question">{{ trans('property.view.details') }} <span class="faqs-arrow"><i class="fa fa-angle-down"></i></span></a>
                                <div class="faqs-answer clearfix">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p><strong>{{ trans('forms.fields.property.'.$for.'_price') }}:</strong>
                                                {{ \GoProp\Facades\ProjectHelper::formatNumber($property->getPrice($for), true) }}
                                                {{ ($for == 'rent')?' ('.trans('property.rent_price_type.'.$property->rent_price_type).')':'' }}</p>
                                            @if(!empty(intval($property->land_size)))
                                            <p><strong>{{ trans('forms.fields.property.land_size') }}:</strong> {{ $property->land_size }}</p>
                                            @endif

                                            @if(!empty(intval($property->building_size)))
                                            <p><strong>{{ trans('forms.fields.property.building_size') }}:</strong> {{ $property->building_size }}</p>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            <p><strong>{{ trans('forms.fields.property.bedrooms') }}:</strong> {{ $property->rooms }}</p>
                                            <p><strong>{{ trans('forms.fields.property.bathrooms') }}:</strong> {{ $property->bathrooms }}</p>
                                            <p><strong>{{ trans('forms.fields.property.parking') }}:</strong> {{ trans('property.parking.'.$property->parking) }}</p>
                                            @if($property->parking == 'garage')
                                                <p><strong>{{ trans('forms.fields.property.garage_size') }}:</strong> {{ $property->garage_size }}</p>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">
                                            @if(!empty(intval($property->floors)))
                                            <p><strong>{{ trans('forms.fields.property.floors') }}:</strong> {{ $property->floors }}</p>
                                            @endif

                                            @if(!empty($property->certificate))
                                            <p><strong>{{ trans('forms.fields.property.certificate') }}:</strong> {{ trans('property.certificate.'.$property->certificate) }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @if($property->floorplans->count() > 0)
                            <li>
                                <a href="#" class="faqs-question">{{ trans('property.view.floorplans') }} <span class="faqs-arrow"><i class="fa fa-angle-down"></i></span></a>
                                <div class="faqs-answer clearfix">
                                    @foreach($property->floorplans as $floorplan)
                                    <div class="row">
                                        <img src="{{ url('images/property_floorplan/'.$floorplan->filename) }}" alt="" class="img-responsive">
                                    </div>
                                    @endforeach
                                </div>
                            </li>
                            @endif

                            @if(!empty($property->virtual_tour_url))
                            <li>
                                <a href="#" class="faqs-question">{{ trans('property.view.virtual_tour') }} <span class="faqs-arrow"><i class="fa fa-angle-down"></i></span></a>
                                <div class="faqs-answer clearfix">
                                    <div class="row">
                                        <p><a href="{{ $property->virtual_tour_url }}" target="_blank">{{ $property->virtual_tour_url }}</a></p>
                                    </div>
                                </div>
                            </li>
                            @endif
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="widget-child">
                    @include('frontend.includes.call_request_sidebar')
                </div>
                <div class="widget-child">
                    @include('frontend.includes.keyword_search')
                </div>
                <div class="widget-child">
                    @include('frontend.includes.price_saving_sidebar')
                </div>
                <div class="widget-child">
                    @include('frontend.includes.advanced_search_sidebar')
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.includes.partner')

<div class="clearfix"></div>
@endsection