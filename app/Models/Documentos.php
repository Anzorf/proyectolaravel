<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Documentos
 * @package App\Models
 * @version July 5, 2018, 4:00 am UTC
 *
 * @property \App\Models\users users
 * @property string title
 * @property string autor
 * @property string tags
 * @property string type_document
 * @property string document_body
 * @property integer idpersonas
 */
class Documentos extends Model
{
    use SoftDeletes;

    public $table = 'documentos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'autor',
        'tags',
        'type_document',
        'document_body',
        'document_body_markdown',
        'idpersonas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'autor' => 'string',
        'tags' => 'string',
        'type_document' => 'string',
        'document_body' => 'string',
        'document_body_markdown' => 'string',
        'idpersonas' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\Models\users::class, 'id');
    }
}
