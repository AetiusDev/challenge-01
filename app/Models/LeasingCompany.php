<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class LeasingCompany extends Model
{
    use HasFactory;

    public function contacts(): MorphToMany
    {
        return $this->morphToMany(Contact::class, 'contactable');
    }
}
