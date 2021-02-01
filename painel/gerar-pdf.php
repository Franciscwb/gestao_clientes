<?php

use Mpdf\Mpdf;

ob_start();
    include('templateFinanceiro.php');
    $conteudo = ob_get_contents();
    ob_end_clean();

    $mpdf = new Mpdf();
    $mpdf->WriteHTML($conteudo);
    $mpdf->Output();
?>