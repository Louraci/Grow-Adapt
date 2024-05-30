<?php

namespace App\Models;

use CodeIgniter\Model;

class plante_refModel extends Model
{
    protected $table      = 'plante_ref';
    protected $primaryKey = 'Id_plantRef ';

    protected $useAutoIncrement = true;

    // Type de retour
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    // Champs autorisés
    protected $allowedFields = ['Designation' ,'Hauteur'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'Date_creation';
    protected $updatedField  = 'Date_modification';
    protected $deletedField  = 'Date_suppression';

    // Validation
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
