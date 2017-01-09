<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function details()
    {
      return $this->hasmany(Detail::class);
    }
}
