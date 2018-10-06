<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $guarded = ['id'];

    /**
     * Find a Url by its short version
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  mixed $short_url
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFindShort($query, $short_url)
    {
        $query = $query->where('short_url', $short_url);

        return $query->first();
    }
}
