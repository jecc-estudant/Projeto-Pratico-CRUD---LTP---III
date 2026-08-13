<?php
require_once '../config/Database.php';
require_once '../models/Computador.php';

class ComputadorDAO {
    private $conn;
    private $table_name = "computadores";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }
    public function create(Computador $computador) {
        $query = "INSERT INTO " . $this->table_name . " 
                  (marca, modelo_cpu, modelo_ram, modelo_gabinete, modelo_monitor) 
                  VALUES (:marca, :cpu, :ram, :gabinete, :monitor)";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":marca", $computador->getMarca());
        $stmt->bindValue(":cpu", $computador->getModeloCpu());
        $stmt->bindValue(":ram", $computador->getModeloRam());
        $stmt->bindValue(":gabinete", $computador->getModeloGabinete());
        $stmt->bindValue(":monitor", $computador->getModeloMonitor());

        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function readOne($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update(Computador $computador) {
        $query = "UPDATE " . $this->table_name . " 
                  SET marca = :marca, modelo_cpu = :cpu, modelo_ram = :ram, 
                      modelo_gabinete = :gabinete, modelo_monitor = :monitor 
                  WHERE id = :id";
        
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":marca", $computador->getMarca());
        $stmt->bindValue(":cpu", $computador->getModeloCpu());
        $stmt->bindValue(":ram", $computador->getModeloRam());
        $stmt->bindValue(":gabinete", $computador->getModeloGabinete());
        $stmt->bindValue(":monitor", $computador->getModeloMonitor());
        $stmt->bindValue(":id", $computador->getId());

        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }
}
?>