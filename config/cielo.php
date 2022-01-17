<?php

return [
    'erros' => [
        "01" => "Transação referida pelo banco emissor",
        "04" => "Transação não autorizada. Tente novamente mais tarde.",
        "05" => "Transação não autorizada. Contate o banco emissor do cartão.",
        "06" => "Erro ao efetuar a transação. Tente novamente",
        "07" => "Cartão com restrição. Contante o banco emissor do cartão",
        "08" => "Código de segurança inválido.",
        "14" => "Cartão inválido. Verifique as informações digitadas e tente novamente.",
        "15" => "Banco emissor indisponível.",
        "41" => "Cartão com restrição. Contante o banco emissor do cartão",
        "51" => "Saldo insuficiente. Contante o banco emissor do cartão",
        "54" => "Cartão vencido. Verifique o vencimento do seu cartão",
        "57" => "Transação não permitida. Contante o banco emissor do cartão",
        "60" => "Transação não permitida. Contante o banco emissor do cartão",
        "62" => "Transação não permitida. Contante o banco emissor do cartão",
        "78" => "Cartão não foi desbloqueado.",
        "82" => "Erro no cartão. Verifique as informações digitadas e tente novamente.",
        "91" => "Banco fora do ar.",
        "96" => "Erro ao efetuar a transação. Tente novamente"
    ],
    'bandeiras' => [
        "Visa" => "Visa",
        "Mastercard" => "Master",
        "American Express" => "Amex",
        "Elo" => "Elo",
        "Aura" => "Aura",
        "Diners Club" => "Diners Club",
        "JCB" => "JCB",
        "Discover" => "Discover",
        "Hipercard" => "Hipercard"
    ],
    'status' => [
        0 => "Aguardando Pagamento",
        1 => "Pagamento Realizado",
        2 => "Cancelado",
    ]
];
