
<?php
    $nota1 = (float) readline("Digite a primeira nota (1 a 100): ");
    $nota2 = (float) readline("Digite a segunda nota (1 a 100): ");

    if ($nota1 < 1 || $nota1 > 100 || $nota2 < 1 || $nota2 > 100) {
        echo "Erro: as notas devem estar entre 1 e 100.\n";
    } else {
        $media = ($nota1 + $nota2) / 2;

        echo "Media final: " . number_format($media, 2, ',', '.') . "\n";

        if ($media >= 60) {
            echo "Situacao: Aprovado!\n";
        } elseif ($media >= 30) {
            echo "Situacao: Recuperacao.\n";
        } else {
            echo "Situacao: Reprovado.\n";
        }
    }
?>
