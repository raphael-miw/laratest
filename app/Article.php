<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Article
 *
 * @property integer $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $sujet
 * @property string $contenu
 * @property string $active_at
 * @property integer $auteur_id
 * @property-read \App\Auteur $auteur
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereSujet($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereContenu($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereActiveAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Article whereAuteurId($value)
 * @mixin \Eloquent
 */
class Article extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * Get the phone record associated with the user.
     */
    public function auteur()
    {
        return $this->belongsTo('App\Auteur');
    }

}
