<?php

namespace App\Models;

use CodeIgniter\Model;

class phaseModel extends Model
{
    protected $table      = 'phase';
    protected $primaryKey = 'Num_phase';

    protected $useAutoIncrement = true;

    // Type de retour
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    // Champs autorisés
    protected $allowedFields = ['Desegnation', 'Nutriments', 'Tempoptimale','Hauteur'];

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
