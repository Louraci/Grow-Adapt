<?php

namespace App\Models;

use CodeIgniter\Model;

class planteModel extends Model
{
    protected $table      = 'plante';
    protected $primaryKey = 'Id_Plante';

    protected $useAutoIncrement = true;

    // Type de retour
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    // Champs autorisés
    protected $allowedFields = ['Nom'];

    public function insertPlante($data)
    {
        return $this->insert($data);
    }
    
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