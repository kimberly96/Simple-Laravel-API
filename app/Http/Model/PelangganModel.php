<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PelangganModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pelanggan';

    public $timestamps = false;

    protected $primaryKey = 'id';

}
