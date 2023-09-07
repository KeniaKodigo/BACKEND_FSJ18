<?php

class ReporteFPDF{

    public function exportar(){
        return "Exportando el documento en FPDF";
    }
}

class Inventario{

    public function procesarProductos(){
        $doc = new ReporteFPDF();
        $doc->exportar();
    }
}


?>