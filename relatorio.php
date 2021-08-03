<html>

<head>
    <style type="text/css">
        @page {
            margin: 1cm;
        }

        body {
            font-family: sans-serif;
            margin: 2.2cm 0;
            text-align: justify;
        }

        #header,
        #footer {
            position: fixed;
            left: 0;
            right: 0;
            color: black;
            font-size: 10pt;
        }

        #header {
            top: 0;
            font-size: 18pt;
            margin-bottom: 20pt;
        }

        #footer {
            bottom: 0;
            border-top: 0.5pt solid black;
            margin-top: -20pt;
        }

        #header table,
        #footer table {
            width: 100%;
            border-collapse: collapse;
            border: none;
        }

        .cor {
            background-color: #ddd;
        }

        #header td,
        #footer td {
            padding: 0;
            width: 95%;
        }

        .page-number {
            text-align: right;
        }

        .page-number:before {
            content: "Página "counter(page);
        }

        hr {
            border: 0.1px solid #000;
        }

        .dados_gerais td {
            background-color: #fff;
        }

        #watermark {
            position: fixed;
            bottom: 10cm;
            left: 2.5cm;
            width: 8cm;
            height: 8cm;
            z-index: -1000;
        }

        #qrcode {
            margin-top: -0.5cm;
            margin-left: 0cm;
            bottom: 1.5cm;
            right: 2cm;
            width: 3cm;
            height: 2.5cm;
        }

        #assinatura {
            margin-top: 1.0cm;
            margin-left: 2cm;
            bottom: 0.5cm;
            left: 0.5cm;
            width: 3cm;
            height: 2cm;
        }
    </style>
</head>

<body>
    <?php $dadosPermissionario = 10 ?>
    <?php if ($dadosPermissionario) {
    ?>
        <div id="watermark">

        </div>
        <div id="header">
            <table style="padding: 30px 50px 5px 50px;">
                <tr>
                    <td style="padding: 5px 50px 5px 5px; width: 20%;"><img style="width: 90px;height: 80px;"></td>
                    <td style="text-align: left; width: 60%">
                        <div style="font-size: 12pt;"><strong style="color:#000000; font-size: 13pt">PREFEITURA DE SÃO JOSÉ DO RIO PRETO - SP</strong><br>
                            SECRETARIA MUNICIPAL DE TRÂNSITO, TRANSPORTES<BR> E SEGURANÇA</div>
                    </td>
                </tr>
            </table>
        </div>
        <br><br>
        <div>
            <table style="padding: 5px 50px 5px 50px;">
                <tr>
                    <td style="padding: 5px 5px 2px 100px; font-size: 18pt;text-align: center; width: 100%" colspan="2">
                        AUTORIZAÇÃO
                    </td>
                </tr>
                <tr>
                    <td>
                        EXERCÍCIO: 2021
                    </td>
                </tr>
                <tr>
                    <td>
                        Validade: 31/12/2021
                    </td>
                </tr>
                <br><br>
                <hr style="margin: -5px 50px 0px 55px;">
                <table style="padding: 5px 50px -25px 50px;">
                    <tr>
                        <td style="padding: 5px 5px 0px 5px; font-size: 13pt; text-align: justify">
                            AUTORIZO o Sr. Emerson Donizete Boni, portador do CPF. 202.769.878-70, permissionário do alvará TE 005, a transportar o aluno MURILO A. MARQUES E MIGUEL A. MARQUES do colégio “VENCER”, tendo juntado ao seu requerimento declaração da genitora e a autorização do permissionário Thiago Alves Ferreira, estando em conformidade com o Artigo 1º, parágrafo 3º, da Lei Municipal nº. 10.767 de 08/09/2010.
                        </td>
                    </tr>
                </table>
                <table style="padding: 5px 50px 0px 50px; width: 135%;">
                    <tr>
                        <td style="padding: 5px 5px 0px 5px; font-size: 12pt; text-align: left" colspan="2">
                            São José do Rio Preto, <?= $dadosPermissionario['dat_inicio'] ?>.
                        </td>
                        <td colspan="2">
                            <div id="assinatura">
                                <img style="width: 180%" src="../empro_icad/imagens/assinatura_smtts.png">
                            </div>
                        </td>
                    </tr>
                </table>
                <br>
                <table style="padding: 5px 50px 0px 50px;">
                    <tr>
                        <td style="padding: 5px 5px 0px 5px; font-size: 11pt; text-align: justify">
                            Autorização válida por 10 (dez) dias a partir da data da emissão.
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 5px 0px 5px; font-size: 11pt; text-align: justify">
                            Juntar a cópia do documento na categoria ALUGUEL ao protocolo <strong><?= $dadosPermissionario['protocolo'] ?>.</strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 5px 0px 5px; font-size: 11pt; text-align: justify">
                            Não concluindo o processo no prazo de 10 (dez) dias, o veículo será BLOQUEADO na categoria ALUGUEL.
                        </td>
                    </tr>
                </table>
                <table style="padding: 5px 50px 0px 50px;">
                    <tr>
                        <td style="padding: 5px 5px 0px 5px; font-size: 12pt; text-align: justify">
                            <strong>AMAURY HERNANDES</strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 5px 0px 5px; font-size: 12pt; text-align: justify">
                            Secretário Municipal de Trânsito, Transportes e Segurança
                        </td>
                    </tr>
                </table>
                <br>
                <table style="padding: 5px 50px -20px 50px; width: 100%;">
                    <tr>
                        <td>
                            <div id="qrcode">
                                <img style="width: 135%" src="<?= $arquivoImagem ?>">
                            </div>
                        </td>
                    </tr>
                </table>
            </table>
        </div>
    <?php
    }
    ?>
</body>

</html>