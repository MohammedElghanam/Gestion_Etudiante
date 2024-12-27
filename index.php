<?php
// Define the action to handle
$action = $_GET['action'] ?? 'home'; 

switch ($action) {

    case 'afficherEtudiants':
        require_once './controllers/EtudiantController.php';
        $controller = new EtudiantController();
        $controller->afficherEtudiants(); 
    break;

    case 'ajouterEtudiant':
        require_once __DIR__ . '/views/ajouterEtudiant.php';
    break;

    case 'submitAjouterEtudiant': 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once __DIR__ . '/controllers/EtudiantController.php';
            $controller = new EtudiantController();
            $controller->ajouterEtudiant($_POST, $_FILES); 
        }
    break;
    
    case 'updateEtudiant':
        require_once './controllers/EtudiantController.php';
        $controller = new EtudiantController();
        $controller->afficherFormulaireUpdate($_GET['id']);
    break;
    
    case 'submitUpdateEtudiant':
        require_once './controllers/EtudiantController.php';
        $controller = new EtudiantController();
        $controller->mettreAJourEtudiant($_POST, $_FILES);
        header('Location: index.php?action=afficherEtudiants');
    break;
   
    case 'deleteEtudiant':
        require_once './controllers/EtudiantController.php';
        $controller = new EtudiantController();
        $controller->supprimerEtudiant($_POST['id']);
        header('Location: index.php?action=afficherEtudiants'); 
    break;
   
    default:
        echo "Page non trouvée."; 
    break;
    
}
?>
