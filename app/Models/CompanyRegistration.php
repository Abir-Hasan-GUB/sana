<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRegistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'name',
        'mobile',
        'business_location',
        'business_name',
        'abn_acn',
        'position',
        'business_age',
        'website',
        'facebook',
        'authorize',
        'success_story',
        'special_offer',
        'special_instructions',
        'is_approved',
        'category_id',
        'company_banner',
    ];
}
