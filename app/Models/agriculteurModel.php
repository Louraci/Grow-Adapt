<?php

namespace App\Models;

use CodeIgniter\Model;

class agriculteurModel extends Model
{
    protected $table      = 'agriculteur';
    protected $primaryKey = 'Nom';

    protected $useAutoIncrement = true;

    // Type de retour
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    // Champs autorisés
    protected $allowedFields = ['Email','password'];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'Date_creation';
    protected $updatedField  = 'Date_modification';
    protected $deletedField  = 'Date_suppression';

    public function insertAgriculteur($data)
    {
        return $this->insert($data);
    }
    // Validation
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
