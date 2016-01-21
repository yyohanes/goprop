<?php

namespace GoProp\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];

    private $_paidFeatures;

    //Relations
    public function category()
    {
        return $this->belongsTo('GoProp\Models\PackageCategory', 'package_category_id');
    }

    public function features()
    {
        return $this->belongsToMany('GoProp\Models\PackageFeature', 'package_package_feature')->orderBy('sort_order', 'ASC')->withPivot(['price', 'sort_order']);
    }

    public function properties()
    {
        return $this->belongsToMany('GoProp\Models\Package');
    }

    //Accessors
    public function getIsExclusiveAttribute()
    {
        $features = $this->features;
        return $features->contains('code', 'exclusive-agency-contract');
    }

    public function getPaidFeaturesAttribute()
    {
        if(!isset($this->_paidFeatures)){
            $this->_paidFeatures = $this->features()->where('price', '>', 0)->get();
        }

        return $this->_paidFeatures;
    }

    //Methods
    public function getFeature(PackageFeature $feature)
    {
        return $this->features->where('id', $feature->id)->first();
    }
}
