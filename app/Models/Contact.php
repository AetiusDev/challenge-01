<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Contact extends Model
{
    use HasFactory;

    public function banks(): MorphToMany
    {
        return $this->morphedByMany(Bank::class, 'contactable');
    }

    public function clients(): MorphToMany
    {
        return $this->morphedByMany(Client::class, 'contactable');
    }

    public function leasingCompanies(): MorphToMany
    {
        return $this->morphedByMany(LeasingCompany::class, 'contactable');
    }

    public function suppliers(): MorphToMany
    {
        return $this->morphedByMany(Supplier::class, 'contactable');
    }
}
