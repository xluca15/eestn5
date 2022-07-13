<?php
class Trabajador {
    private $nombre; 
    private $horas; 
    private $sueldoH;

    function __construct($n, $h, $sxh) {
        $this->nombre = $n;
        $this->horas = $h;
        $this->sueldoH = $sxh;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function gethoras() {
        return $this->horas;
    }
    public function getSueldoH() {
        return $this->sueldoH;
    }
    function calcularSueldo() {
        return $this->horas * $this->sueldoH;
    }
  }
  $empleado = new Trabajador($_POST['n1'], $_POST['n2'], $_POST['n3']);
  echo "Nombre: " . $empleado -> getNombre() . "<br>";
  echo "Horas: " . $empleado ->getHoras() . "<br>";
  echo "Sueldo por hora: " . $empleado -> getSueldoH() . "<br>";
  echo "Sueldo total de " . $empleado -> getNombre() . ": " . $empleado -> calcularSueldo() . "<br>";
?>