<?php

namespace App\Models;

use App\Models\Testimonial;
use App\Models\GambarProyek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyek extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $table = 'proyek';
    protected $primaryKey = 'id_proyek';

    public function gambarProyek(): HasMany
    {
        return $this->hasMany(GambarProyek::class, 'id_proyek','id_proyek');
    }

    public function testimoni(): HasMany
    {
        return $this->hasMany(Testimonial::class, 'id_proyek','id_proyek');
    }
}
