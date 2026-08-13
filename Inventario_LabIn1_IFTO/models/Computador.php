<?php
class Computador {
    private $id;
    private $marca;
    private $modelo_cpu;
    private $modelo_ram;
    private $modelo_gabinete;
    private $modelo_monitor;

    public function getId() { return $this->id; }
    public function getMarca() { return $this->marca; }
    public function getModeloCpu() { return $this->modelo_cpu; }
    public function getModeloRam() { return $this->modelo_ram; }
    public function getModeloGabinete() { return $this->modelo_gabinete; }
    public function getModeloMonitor() { return $this->modelo_monitor; }

    public function setId($id) { $this->id = $id; }
    public function setMarca($marca) { $this->marca = $marca; }
    public function setModeloCpu($modelo_cpu) { $this->modelo_cpu = $modelo_cpu; }
    public function setModeloRam($modelo_ram) { $this->modelo_ram = $modelo_ram; }
    public function setModeloGabinete($modelo_gabinete) { $this->modelo_gabinete = $modelo_gabinete; }
    public function setModeloMonitor($modelo_monitor) { $this->modelo_monitor = $modelo_monitor; }
}
?>