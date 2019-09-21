<?php  

$data['Grãos'] = $_POST['beans'] ?? '';
$data['Tipo'] = $_POST['beantype'] ?? '';
$data['Extras'] = $_POST["extras"] ?? '';
$data['Nome'] = $_POST['name'] ?? '';
$data['Endereço'] = $_POST['address'] ?? '';
$data['Cidade'] = $_POST['city'] ?? '';
$data['Estado'] = $_POST['state'] ?? '';
$data['CEP'] = $_POST['zip'] ?? '';
$data['Telefone'] = $_POST['phone'] ?? '';
$data['Comentários'] = $_POST['comments'] ?? '';
$item = array ( );
$msg = '<p>';

foreach ($data as $key => $value) {
    $item["$key"] = empty ( $value ) ? ', ' . $key : '';
}

if ( !empty ( $data['Nome'] ) ) {
    $msg .= "Obrigado, <strong>{$data['Nome']}</strong>, pelo seu pedido";
} else {
    $msg .= "Obrigado pelo seu pedido";
}

$msg .= "... Porém, parece que você esqueceu de completar alguns itens no formulário. Como" . $item['Nome'] .
    $item['Endereço'] . $item['Cidade'] . $item['Estado'] . $item['CEP'] . $item['Telefone'] . '. Você pode
    clicar no botão voltar e tentar novamente, caso contrário, seremos incapazes de realizar o seu pedido na
    Máquina de Grãos, e isso é triste.</p>';
$msg .= "<p>
            Aqui está o que nós recebemos por enquanto:
        </p>
        <p>";

foreach ($data as $key => $value) {
    if ( $key == 'Extras' ) {
        foreach ( $value as $item ) {
            $msg .= !empty ( $item ) ? "<strong>Extra:</strong> $item<br>" : '';
        }
    } else {
        $msg .= !empty ( $data["$key"] ) ? "<strong>" . ucfirst ( $key ) . ":</strong> $value<br>" : '';
    }
}

$msg .= '</p>';

if ( !empty ( $data['Grãos'] ) AND !empty ( $data['Tipo'] ) AND !empty ( $data['Nome'] ) AND 
    !empty ( $data['Endereço'] ) AND !empty ( $data['Cidade'] ) AND !empty ( $data['Estado'] ) AND 
    !empty ( $data['CEP'] ) AND !empty ( $data['Telefone'] ) ) {

    $msg = "<p>
                Obrigado, <strong>{$data['Nome']}</strong>, pelo seu pedido da Máquina de Grãos do StarBuzz.
            </p>
            <p>
                Seu pedido, {$data['Grãos']}, {$data['Tipo']}, será enviado para:
            </p>
            <p>
                {$data['Nome']}<br>
                {$data['Endereço']}<br>
                {$data['Cidade']}<br>
                {$data['Estado']}, {$data['CEP']}<br>
                {$data['Telefone']}
            </p>";

    if ( !empty ( $data['Comentários'] ) ) {
        $msg .= "<p>
                    Obrigado por enviar seus comentários ao StarBuzz! Nós amamos receber comentários de nossos usuários da Máquina de Grãos. Você disse,
                </p>
                <p style='margin-left: 40px'>
                    {$data['Comentários']}
                </p>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>A Máquina de Grãos do StarBuzz</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Site criado no curso de HTML com CSS" />
    <meta name="keywords" content="curso html css site café">
    <meta name="autor" content="André Moura">
    <link href="starbuzz.css" rel="stylesheet" type="text/css"/>
    <link href="styledform.css" rel="stylesheet" type="text/css"/>
</head>
<body>

    <h1>A Máquina de Grãos do StarBuzz</h1>
    
    <?=$msg?>
    
</body>
</html>