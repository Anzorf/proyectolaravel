<?php

namespace App\Repositories;

use App\Models\Documentos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DocumentosRepository
 * @package App\Repositories
 * @version July 5, 2018, 4:00 am UTC
 *
 * @method Documentos findWithoutFail($id, $columns = ['*'])
 * @method Documentos find($id, $columns = ['*'])
 * @method Documentos first($columns = ['*'])
*/
class DocumentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Documentos::class;
    }
}
