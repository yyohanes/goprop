@extends('frontend.account.logged_in.layout')

@section('content')
    <div class="top-navigation">
        <div class="row">
            <div class="col-sm-10">
                <div class="menu-preview">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('frontend.property.view', ['for' => $model->getViewFor(), 'id' => $model->id, 'preview' => TRUE, 'backUrl' => \Illuminate\Support\Facades\Request::fullUrl()]) }}"><img src="{{ asset('assets/frontend/images/property-preview.png') }}" alt="" /> {{ trans('property.create.preview_property') }}</a></li>
                        <li><a href="#"><img src="{{ asset('assets/frontend/images/property-disable.png') }}" alt="" /> Disable property</a></li>
                    </ul>
                </div>
                <div class="form-wizard-menu">
                    <ul class="list-unstyled">
                        <li class="active"><a href="{{ route('frontend.property.edit', ['id' => $model->id]) }}">
                                <div class="img-wrap"></div>
                                <span>{{ trans('property.steps.main_details') }}</span>
                            </a></li>
                        <li class="active"><a href="{{ route('frontend.property.details', ['id' => $model->id]) }}">
                                <div class="img-wrap"></div>
                                <span>{{ trans('property.steps.property_details') }}</span>
                            </a></li>
                        <li class="active"><a href="{{ route('frontend.property.map', ['id' => $model->id]) }}">
                                <div class="img-wrap"></div>
                                <span>{{ trans('property.steps.map') }}</span>
                            </a></li>
                        <li class="active"><a href="{{ route('frontend.property.photos', ['id' => $model->id]) }}">
                                <div class="img-wrap"></div>
                                <span>{{ trans('property.steps.photos') }}</span>
                            </a></li>
                        <li class="active"><a href="{{ route('frontend.property.floorplans', ['id' => $model->id]) }}">
                                <div class="img-wrap"></div>
                                <span>{{ trans('property.steps.floorplan') }}</span>
                            </a></li>
                        <li class="current"><a href="">
                                <div class="img-wrap"></div>
                                <span>{{ trans('property.steps.packages') }}</span>
                            </a></li>
                    </ul>
                    <div class="form-wizard-progressbar">
                        <div class="form-wizard-bars" style="width: 90%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10">
            <div class="register-form-wrapper">
                {!! Form::model($model, ['route' => ['frontend.property.review.process', 'id' => $model->id]]) !!}
                <header class="header-area">
                    <h3 class="entry-title">{!! trans('property.order_review.page_title') !!}</h3>
                </header>
                <div class="entry-content">
                    <p>{{ $order->package->name }}</p>
                </div>

                <?php $addons = $order->getAddons(); ?>
                @if(count($addons) > 0)
                <header class="header-area">
                    <h3 class="entry-title">{!! trans('property.order_review.addons') !!}</h3>
                </header>
                <div class="entry-content">
                    <ul class="list-unstyled">
                        @foreach($addons as $addon)
                        <li>{{ trans('property.package.feature.'.$addon->code) }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(bccomp($order->total_amount, 0) == 1)
                <header class="header-area">
                    <h3 class="entry-title">{!! trans('property.order_review.payment_methods') !!}</h3>
                </header>
                <div class="entry-content" id="payment-method-section">
                    <div class="row">
                        <div class="col-xs-4">
                            @foreach(\GoProp\Models\Payment::getPaymentMethods() as $paymentMethodIdx=>$paymentMethod)
                            <div class="radio">
                                <label>
                                    {!! Form::radio('payment_method', $paymentMethodIdx, (old('payment_method') == $paymentMethodIdx)) !!} {{ $paymentMethod['label'] }}
                                </label>
                            </div>
                            @endforeach
                        </div>

                        <div class="col-xs-8">
                            <div id="payment-descriptions">
                                @foreach(\GoProp\Models\Payment::getPaymentMethods() as $paymentMethodIdx=>$paymentMethod)
                                <div data-payment_method="{{ $paymentMethodIdx }}" class="payment-description">
                                    <p>
                                        {!! $paymentMethod['description'] !!}
                                    </p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    {!! Form::hidden('payment_method', \GoProp\Models\Payment::METHOD_NO_PAYMENT) !!}
                @endif

                <header class="header-area">
                    <h3 class="entry-title">{!! trans('property.order_review.total_cost') !!}</h3>
                </header>

                <div class="entry-content">
                    {{ \GoProp\Facades\ProjectHelper::formatNumber($order->total_amount, TRUE) }}
                </div>

                <div class="entry-content">
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('agree_tc', 1, false) !!}
                            {{ trans('property.order_review.agree_tc') }} <a href="{{ route('frontend.page.property_terms_conditions') }}" class="ajax_popup fancybox.ajax">{{ trans('property.order_review.terms_conditions') }}</a>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 payment"><img src="{{ asset('assets/frontend/images/payment-logo.png') }}" class="img-responsive"></div>
                </div>
                <div class="row">
                    <hr class="form-divider">
                </div>
                <div class="form-action row">
                    <div class="col-sm-6 is-left">
                        {!! Form::button(trans('forms.change_package_btn'), ['name' => 'action', 'value' => 'change_package', 'type' => 'submit', 'class' => 'btn btn-yellow']) !!}
                    </div>
                    <div class="col-sm-6 is-right">
                        {!! Form::button(trans('forms.purchase_btn'), ['name' => 'action', 'value' => 'purchase', 'type' => 'submit', 'class' => 'btn btn-grey']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
@endsection

@section('bottom_scripts')
    @parent

    <script>
        $('.radio input[name="payment_method"]', '#payment-method-section').on('click', function(){
            $('.payment-description', '#payment-descriptions').hide();
            $('.payment-description[data-payment_method="'+$(this).val()+'"]', '#payment-descriptions').show();
        });

        if($('.radio input[name="payment_method"]:checked', '#payment-method-section').length > 0){
            $('.radio input[name="payment_method"]:checked', '#payment-method-section').click();
        }else{
            $('.radio:first-child input[name="payment_method"]', '#payment-method-section').click();
        }
    </script>
@endsection