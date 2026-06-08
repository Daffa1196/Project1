<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'title',
        'description',
        'target_donation',
        'collected_donation',
        'deadline'
    ];

    // One To One
    public function account()
    {
        return $this->hasOne(CampaignAccount::class);
    }

    // One To Many
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    // Many To Many
    public function categories()
    {
        return $this->belongsToMany(
            Category::class,
            'campaign_category'
        );
    }
}