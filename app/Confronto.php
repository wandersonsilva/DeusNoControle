<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confronto extends Model
{

    public function participante()
    {
        return $this->belongsTo(Participante::class);
    }

    public function campeonato()
    {
        return $this->belongsTo(Campeonato::class);
    }

}
