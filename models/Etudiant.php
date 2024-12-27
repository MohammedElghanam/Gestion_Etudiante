<?php
require_once './db/Config.php';

class Etudiant {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function ajouterEtudiant($nom, $prenom, $email, $note, $image) {
        $sql = "INSERT INTO etudiants (nom, prenom, email, note, image) 
                VALUES (:nom, :prenom, :email, :note, :image)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':note', $note);
        $stmt->bindParam(':image', $image);
        return $stmt->execute();
    }
    

    public function getEtudiants() {
        $sql = "SELECT * FROM etudiants";
        $stmt = $this->conn->query($sql);
    
        $etudiants = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $etudiants;
    }

    public function deleteEtudiantById($id) {
        $sql = "DELETE FROM etudiants WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    
    public function getEtudiantById($id) {
        $sql = "SELECT * FROM etudiants WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function updateEtudiant($id, $nom, $prenom, $email, $note, $imageName) {
        $sql = "UPDATE etudiants SET 
                nom = :nom, 
                prenom = :prenom, 
                email = :email, 
                note = :note";
        
        if ($imageName) {
            $sql .= ", image = :image";
        }
        $sql .= " WHERE id = :id";
    
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':note', $note, PDO::PARAM_STR);
    
        if ($imageName) {
            $stmt->bindParam(':image', $imageName, PDO::PARAM_STR);
        }
    
        $stmt->execute();
    }

    
}
