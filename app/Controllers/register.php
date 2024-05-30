<?php

namespace App\Controllers;

class register extends BaseController
{
public function register(): String
    {
        $Nom = $this->request->getpot('Nom');
        $Email = $this->request->getpost('Email');
        $password = $this->request->getpost('password');
        $password = $this->request->getpost('confirm_password');

        $agriculteurModel = new agriculteurModel();
        $data = ['Nom'=>$Nom ,
                 'Email'=>$Email ,
                 'password'=>$password
        ]

        if ($password !== $confirmPassword) {
            $session = session();
            $session->setFlashdata('error', 'Les mots de passe ne correspondent pas');
            return redirect()->to(base_url('agriculteur'));

            if ($agriculteurModel->insert($data)) {
                $session = session();
                $session->setFlashdata('success', 'Inscription réussie');
                return redirect()->to(base_url('login'));
            } else {
                $session = session();
                $session->setFlashdata('error', 'Erreur lors de l\'inscription');
                return redirect()->to(base_url('agriculteur'));
            }
        }
    }
    public function register(): String
    {
        return view('planteform');
 
    }
    public function login()
    {
        // Vérifie si le formulaire a été soumis
        if ($this->request->getMethod() === 'post') {
            // Récupérer les données du formulaire
            $Nom = $this->request->getVar('Nom');
            $password = $this->request->getVar('password');

            // Créer une instance du modèle Agriculteur
            $agriculteurModel = new AgriculteurModel();

            // Récupérer les données de l'agriculteur à partir de la base de données
            $agriculteur = $agriculteurModel->where('Nom', $Nom)->first();

            // Vérifier si l'agriculteur existe et si le mot de passe est correct
            if ($agriculteur && password_verify($password, $agriculteur['password'])) {
                // Stocker les données de l'agriculteur dans la session
                session()->set('agriculteur', $agriculteur);

                // Rediriger vers une autre page
                return redirect()->to(base_url('uer'));
            } else {
                // Rediriger avec un message d'erreur
                return redirect()->to(base_url('login'))->with('error', 'Nom ou mot de passe incorrect');
            }
        }

        // Afficher la vue de connexion
          return view('user');
}

}