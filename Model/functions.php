<?php 
function ConsultaListaRepublicas(){
    $consulta = selecionar("SELECT republica.id,republica.esgotado,bairro,rep_tipo.tipo, rep_tipo.cor,republica.titulo,imagens.imagem,republica.valor_total, republica.qtd_vagas,republica.qtd_quartos, republica.qtd_banheiros, republica.qtd_garagem, 
    IF(republica.esgotado=1,'<strong style=color:red>ESGOTADO</strong>',republica.valor_total) as valor_total
    FROM republica_info as republica 
    LEFT JOIN republica_imagens as imagens ON  imagens.fk_republica = republica.id
    LEFT JOIN republica_tipo as rep_tipo ON rep_tipo.id = republica.fk_republica_tipo
    WHERE republica.ativo=1 GROUP BY republica.id");
return $consulta;
}



function ConsultaRepublica($id){
    $consulta = selecionar("SELECT rep_responsavel.nome,rep_responsavel.email, rep_responsavel.idade, republica.*, bairro ,rep_tipo.tipo,
    IF(republica.esgotado=1,'<a href=#><strong style=color:red>ESGOTADO</strong></a>',republica.valor_total) as valor_total
    FROM republica_info as republica 
    LEFT JOIN republica_tipo as rep_tipo ON rep_tipo.id = republica.fk_republica_tipo
    RIGHT JOIN republica_responsavel as rep_responsavel ON rep_responsavel.id = republica.fk_responsavel
   WHERE republica.id=$id AND republica.ativo=1");
 
return $consulta;
}


function ConsultaFotosRepublica($id){
    $consulta = selecionar("SELECT republica.id,imagens.principal, republica.titulo,imagens.imagem,republica.valor_total, republica.qtd_quartos, republica.qtd_banheiros, republica.qtd_garagem FROM republica_info as republica 
    LEFT JOIN republica_imagens as imagens ON  imagens.fk_republica = republica.id WHERE republica.id=$id;");
return $consulta;
}

function ConsultaTagsRepublica($id){
    $consulta = selecionar("SELECT rep_tag.nome_tag FROM republica_info as republica 
    LEFT JOIN republica_tags as rep_tag ON rep_tag.fk_republica = republica.id 
    WHERE republica.id=$id");
return $consulta;
}

function ConsultaRegrasRepublica($id){
    $consulta = selecionar("SELECT rep_regras.regra FROM republica_info as republica 
    LEFT JOIN republica_regras as rep_regras ON rep_regras.fk_republica = republica.id 
    WHERE republica.id=$id");
return $consulta;
}


?>