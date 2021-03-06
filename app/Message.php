<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    /**
     * A message belong to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected $fillable = ['message'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
