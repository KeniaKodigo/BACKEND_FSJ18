<?php

#clase bajo nivel
class ReporteFPDF{
    public function exportar(){
        return "Exportando el documento en FPDF";
    }
}

class DOMPDF2{
    public function exportar(){
        return "Exportando el documento en DOMPDF";
    }
}

#clase de alto nivel
class Inventario{
    public function procesarProductos(){
        //instancia (creando un objeto)
        $doc = new ReporteFPDF();
        $doc->exportar();
    }
}

#Escalable
#cumpliendo el principio

#abstraccion: interface / clase abstracta

interface tipoPDF{
    public function exportarDoc();
}

#modulos bajo nivel (librerias)
class FPDF implements tipoPDF{
    public function exportarDoc()
    {
        return "Este documento esta utilizando la libreria FPDF";
    }
}

class DOMPDF implements tipoPDF{
    public function exportarDoc()
    {
        return "Este documento esta utilizando la libreria DOMPDF";
    }
}

class HPDF implements tipoPDF{
    public function exportarDoc()
    {
        return "";
    }
}

#clase alto nivel

class GestionInventario{
    
    /**
     * metodo que recibe objetos de la interfaz tipoPDF
     * FPDF, DOMPDF, HPDF
     */
    public function procesarProductos(tipoPDF $pdf){
        return $pdf->exportarDoc();
    }
}

$gestion = new GestionInventario();
$gestion->procesarProductos(new DOMPDF); //Este documento esta utilizando la libreria DOMPDF

$gestion = new GestionInventario();
$gestion->procesarProductos(new HPDF); //""


?>