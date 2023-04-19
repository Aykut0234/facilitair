<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinMeta extends Model
{
    use HasFactory;
    protected $table = 'pin_meta';
    protected $guarded = [];
    protected $fillable = ['pin_id', 'school_name', 'school_location', 'datum_gebruikname', 'reden_bijzonderheid', 'meningen', 'primair_doel', 'bijzonderheden', 'betrokkenen'];

    public function pin()
    {
        return $this->belongsTo(Pin::class);
    }
}
