<?php
require_once './models/Etudiant.php';

class EtudiantController {
    private $model;

    public function __construct() {
        $this->model = new Etudiant();
    }

    public function afficherEtudiants() {
        $etudiants = $this->model->getEtudiants();

        if (empty($etudiants)) {
            echo "Aucun étudiant trouvé.";
        }
    
        require './views/afficherEtudiants.php';
    }

    public function ajouterEtudiant($postData, $fileData) {
        // Process form data
        $nom = $postData['nom'];
        $prenom = $postData['prenom'];
        $email = $postData['email'];
        $note = $postData['note'];

        // Handle image upload if any
        $imageName = null;
        if (!empty($fileData['image']['name'])) {
            $imageName = $fileData['image']['name'];
            move_uploaded_file($fileData['image']['tmp_name'], __DIR__ . '/../uploads/' . $imageName);
        }

        $makeEtudient = $this->model->ajouterEtudiant($nom, $prenom, $email, $note, $imageName);
        log($makeEtudient);
        if ($makeEtudient) {
                    header('Location: index.php?action=afficherEtudiants');
                } else {
                    echo 'Erreur lors de l\'ajout de l\'étudiant.';
                }
    }

    public function supprimerEtudiant($id) {
        if (!empty($id)) {
            $this->model->deleteEtudiantById($id);
        } else {
            echo "ID invalide.";
        }
    }

    public function afficherFormulaireUpdate($id) {
        $etudiant = $this->model->getEtudiantById($id);
        if ($etudiant) {
            require './views/updateEtudiant.php';
        } else {
            echo "Étudiant introuvable.";
        }
    }
    
    public function mettreAJourEtudiant($postData, $fileData) {
        $id = $postData['id'];
        $nom = $postData['nom'];
        $prenom = $postData['prenom'];
        $email = $postData['email'];
        $note = $postData['note'];
        $imageName = null;
    
        if (!empty($fileData['image']['name'])) {
            $imageName = $fileData['image']['name'];
            move_uploaded_file($fileData['image']['tmp_name'], __DIR__ . '/../uploads/' . $imageName);
        }
    
        $this->model->updateEtudiant($id, $nom, $prenom, $email, $note, $imageName);
    }
    
}
