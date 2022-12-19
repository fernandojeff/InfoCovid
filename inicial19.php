<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações sobre o covid</title>
    <link rel="stylesheet" href="covid.css">
</head>
<body>
    <fieldset>
        <?php
            $dat = $_POST ['inf'];

            switch ($dat) {
                case 1: echo "<legend>O que é o coronavírus?</legend>";
                        echo "A Covid-19 é uma infecção respiratória aguda causada pelo coronavírus SARS-CoV-2, potencialmente grave, de elevada transmissibilidade e de distribuição global.<br><br>
                        O SARS-CoV-2 é um betacoronavírus descoberto em amostras de lavado broncoalveolar obtidas de pacientes com pneumonia de causa desconhecida na cidade de Wuhan, província de Hubei, China, em dezembro de 2019. Pertence ao subgênero Sarbecovírus da família Coronaviridae e é o sétimo coronavírus conhecido a infectar seres humanos.<br><br>
                        Os coronavírus são uma grande família de vírus comuns em muitas espécies diferentes de animais, incluindo o homem, camelos, gado, gatos e morcegos. Raramente os coronavírus de animais podem infectar pessoas e depois se espalhar entre seres humanos como já ocorreu com o MERS-CoV e o SARS-CoV-2. Até o momento, não foi definido o reservatório silvestre do SARS-CoV-2.";
                        break;
                case 2: echo "<legend>Como a COVID-19 é trasmitida?</legend>";
                        echo "A transmissão acontece de uma pessoa doente para outra, por meio de:
                        
                        <ul>
                            <li>Aperto de mãos;</li>
                            <li>Gotículas de saliva;</li>
                            <li>Espirro;</li>
                            <li>Tosse;</li>
                            <li>Catarro;</li>
                            <li>Objetos ou superfícies contaminadas, como celulares, mesas, maçanetas, brinquedos, teclados de computador etc.</li>
                        </ul>
                        ";
                        break;
                case 3: echo "<legend>Sintomas da COVID-19</legend>";
                        echo "A COVID-19 afeta diferentes pessoas de diferentes maneiras. A maioria das pessoas infectadas apresentará sintomas leves a moderados da doença e não precisarão ser hospitalizadas.<br>

                        Sintomas mais comuns:
                        <ul>
                            <li>Febre;</li>
                            <li>Tosse;</li>
                            <li>Cansaço;</li>
                            <li>Perda de paladar ou olfato.</li>
                        </ul>

                        Sintomas menos comuns:
                        <ul>
                            <li>Dores de garganta;</li>
                            <li>Dor de cabeça;</li>
                            <li>Dores e desconfortos;</li>
                            <li>Diarreia;</li>
                            <li>Irritações na pele ou descoloração dos dedos dos pés ou das mãos;</li>
                            <li>Olhos vermelhos ou irritados.</li>
                        </ul>

                        Sintomas graves:
                        <ul>
                            <li>Dificuldade para respirar ou falta de ar;</li>
                            <li>Perda da fala, mobilidade ou confusão;</li>
                            <li>Dores no peito;</li>
                        </ul>

                        Procure atendimento médico imediatamente se apresentar sintomas graves. Sempre ligue antes de ir ao médico ou posto de saúde, clínicas ou hospitais.<br>
                        
                        Pessoas saudáveis que apresentarem os sintomas leves devem acompanhar a situação em casa.<br>

                        Em média, os sintomas aparecem cinco ou seis dias após a infeção pelo vírus. No entanto, eles também podem levar até 14 dias para se manifestarem.
                        ";
                        break;
                case 4: echo "<legend>Como se prevenir da COVID-19</legend>";
                        echo "<h3>Proteja a si mesmo e as pessoas ao seu redor conhecendo os fatos e tomando as precauções apropriadas. Siga os conselhos da autoridade local de saúde.</h3>
                        <br>

                        Fale com a autoridade de saúde local se quiser informações sobre as orientações mais relevantes para sua região.
                        <br>

                        Para evitar a propagação da COVID-19, siga estas orientações.
                        <ul>
                            <li>Mantenha uma distância segura de outras pessoas (pelo menos 1 metro), mesmo que elas não pareçam estar doentes.</li>
                            <li>Use máscara em público, especialmente em locais fechados ou quando não for possível manter o distanciamento físico.</li>
                            <li>Prefira locais abertos e bem ventilados em vez de ambientes fechados. Abra uma janela se estiver em um local fechado.</li>
                            <li>Limpe as mãos com frequência. Use sabão e água ou álcool em gel.</li>
                            <li>Tome a vacina quando chegar a sua vez. Siga as orientações locais para isso.</li>
                            <li>Cubra o nariz e a boca com o braço dobrado ou um lenço ao tossir ou espirrar.</li>
                            <li>Fique em casa se você sentir indisposição.</li>
                        </ul>

                        Procure atendimento médico se tiver febre, tosse e dificuldade para respirar. Ligue com antecedência para o órgão prestador de cuidados de saúde e peça direcionamento à unidade mais adequada. Isso protege você e evita a propagação de vírus e outras infecções.
                        <br><br>
                        Máscaras bem ajustadas ao rosto podem prevenir a propagação do vírus para outras pessoas. Isoladamente, elas não oferecem proteção contra a COVID-19, por isso o uso deve ser combinado com o distanciamento físico e a limpeza das mãos. Siga as orientações da autoridade local de saúde.
                        ";
                        break;
                case 5: echo "<legend>Tratamento da COVID-19</legend>";
                        echo "<h3>Auto cuidados</h3>
                        Após a exposição a uma pessoa com COVID-19, siga estas orientações:
                        <ul>
                            <li>Ligue para seu prestador de cuidados de saúde ou para uma central de informações sobre a doença para descobrir onde e quando você pode fazer um teste.</li>
                            <li>Informe outras pessoas com quem você teve contato para impedir a propagação do vírus.</li>
                            <li>Caso não seja possível fazer o teste, fique em casa e pratique o distanciamento social por 14 dias.</li>
                            <li>Enquanto estiver em quarentena, não vá ao trabalho, à escola ou a espaços públicos. Peça para alguém levar itens essenciais até você.</li>
                            <li>Mantenha pelo menos um metro de distância de outras pessoas, incluindo membros da sua família.</li>
                            <li>Use uma máscara para proteger os outros, até mesmo se/quando você precisar procurar atendimento médico.</li>
                            <li>Higienize as mãos com frequência.
                            </li>
                            <li>Fique em um cômodo separado dos outros membros da sua família. Se isso não for possível, use máscara.</li>
                            <li>Mantenha o ambiente bem ventilado.</li>
                            <li>Se você divide o quarto com alguém, deixe um metro de distância entre as camas.</li>
                            <li>Preste atenção por 14 dias para ver se você apresenta sintomas.</li>
                            <li>Ligue para o prestador de cuidados de saúde imediatamente se você apresentar qualquer um destes sintomas: dificuldade para respirar, perda da fala ou da mobilidade, confusão ou dores no peito.</li>
                            <li>Mantenha contato com seus entes queridos por telefone ou on-line e faça exercícios para manter o pensamento positivo.</li>
                        </ul>
                        <h3>Tratamentos médicos</h3>
                        
                        Cientistas do mundo todo estão trabalhando para encontrar e desenvolver tratamentos para a COVID-19.
                        <br></br>
                        Os tratamentos paliativos mais indicados incluem oxigênio, para casos mais graves e pacientes de alto risco devido a outras doenças, e suportes respiratórios, como ventilação, para pacientes em estado crítico.
                        <br>
                        A Dexametasona é um corticosteroide que pode ajudar a reduzir o tempo de ventilação e salvar as vidas de pacientes em situação mais grave.
                        <br><br>
                        ";
                        break;
            }
        ?>
        <p class="centro"><a href="covid.html"><button>Voltar</button></a></p>
    </fieldset>
    <p class="centro"><a href="../"><button>Voltar para página inicial</button></a></p>
</body>
</html>