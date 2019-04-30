<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Model;

trait TenantModels
{
    /**
     * inicia configurações do model
     */
    protected static function boot()
    {
        parent::boot();

        /**
         * adiciona scope global
         */
        static::addGlobalScope(new TenantScope());

        static::creating(function(Model $obj){
            $companyId = \Auth::user()->company_id;
            $obj->company_id = $companyId;
        });
    }
}
