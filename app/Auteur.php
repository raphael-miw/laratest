<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Auteur
 *
 * @property integer $id
 * @property string $deleted_at
 * @property string $nom
 * @property string $prenom
 * @property boolean $active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Article[] $articles
 * @method static \Illuminate\Database\Query\Builder|\App\Auteur whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Auteur whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Auteur whereNom($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Auteur wherePrenom($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Auteur whereActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Auteur whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Auteur whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Auteur extends Model
{
    use SoftDeletes;
    //

    protected $fillable = [
        'nom', 'prenom',
    ];

    public function articles()
    {
        return $this->hasMany('App\Article');
    }
}
