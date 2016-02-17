<?php

namespace GoProp\Http\Requests;

use GoProp\Models\Package;
use GoProp\Models\Payment;
use GoProp\Models\Property;
use GoProp\Models\PropertyType;

class PropertyFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];

        $routeName = $this->route()->getName();

        if(in_array($routeName, ['frontend.property.create.process', 'frontend.property.edit.process'])){
            $propertyTypeAllowedValues = implode(',', PropertyType::lists('id')->all());
            $rentPriceTypeAllowedValues = implode(',', array_keys(Property::getRentTypeLabel()));
            $viewingSchedulesAllowedValues = implode(',', array_keys(Property::getViewingScheduleOptionLabel()));
            $propertyFurnishingAllowedValues = implode(',', array_keys(Property::getFurnishingLabel()));

            $rules['property_name'] = 'required';
            $rules['province'] = 'required';
            $rules['city'] = 'required';
            $rules['subdistrict'] = 'required';
            $rules['address'] = 'required';
            $rules['postal_code'] = 'required';
            $rules['property_type_id'] = 'required|in:'.$propertyTypeAllowedValues;
            $rules['parking'] = 'required';
            $rules['garage_size'] = 'required_if:parking,garage';
            $rules['rooms'] = 'required';
            $rules['bathrooms'] = 'required';
            $rules['furnishing'] = 'required|in:'.$propertyFurnishingAllowedValues;
            $rules['for_sell'] = 'required|in:0,1';
            $rules['sell_price'] = 'required_if:for_sell,1';
            $rules['sell_viewing_schedule'] = 'required_if:for_sell,1';
            foreach($this->input('sell_viewing_schedule', []) as $idx => $sellViewingSchedule){
                $rules['sell_viewing_schedule.'.$idx] = 'in:'.$viewingSchedulesAllowedValues;
            }
            $rules['for_rent'] = 'required|in:0,1';
            $rules['rent_price'] = 'required_if:for_rent,1';
            $rules['rent_price_type'] = 'required_if:for_rent,1|in:'.$rentPriceTypeAllowedValues;
            $rules['rent_viewing_schedule'] = 'required_if:for_rent,1';
            foreach($this->input('rent_viewing_schedule', []) as $idx => $rentViewingSchedule){
                $rules['rent_viewing_schedule.'.$idx] = 'in:'.$viewingSchedulesAllowedValues;
            }
        }elseif(in_array($routeName, ['frontend.property.details.process'])){
            $certificateAllowedValues = implode(',', array_keys(Property::getCertificateLabel()));

            $rules['land_size'] = 'numeric';
            $rules['building_size'] = 'numeric';
            $rules['floor'] = 'numeric';
            $rules['certificate'] = 'in:'.$certificateAllowedValues;
            $rules['virtual_tour_url'] = 'url';
            $rules['description'] = 'required|min:10|max:300';
        }elseif(in_array($routeName, ['frontend.property.map.process'])){
            $rules['latitude'] = 'required';
            $rules['longitude'] = 'required';
        }elseif(in_array($routeName, ['frontend.property.packages.process'])){
            $allowedPackages = implode(',', Package::lists('id')->toArray());

            $rules['action'] = 'required|in:'.$allowedPackages;

            $package = Package::findOrFail($this->input('action'));
            $allowedFeatures = implode(',', $package->features->lists('id')->toArray());

            foreach($this->input('features.'.$package->id, []) as $featureIdx => $feature){
                $rules['features.'.$package->id.'.'.$featureIdx] = 'in:'.$allowedFeatures;
            }
        }elseif(in_array($routeName, ['frontend.property.review.process'])){
            $allowedPaymentMethods = array_keys(Payment::getPaymentMethods(null, TRUE));
            $allowedPaymentMethods = implode(',', $allowedPaymentMethods);

            if($this->input('action') == 'purchase'){
                $rules['payment_method'] = 'required|in:'.$allowedPaymentMethods;
            }
        }

        return $rules;
    }
}
