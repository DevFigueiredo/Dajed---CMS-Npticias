<?php 

function ConsultaListaRepublicas(){
    $consulta = selecionar("SELECT *, republica.ativo as reps_status, republica.id as rep_id FROM republica_info as republica 
    LEFT JOIN republica_responsavel as rep_responsavel ON rep_responsavel.id = republica.fk_responsavel
    LEFT JOIN republica_imagens as imagens ON  imagens.fk_republica = republica.id
    LEFT JOIN republica_tipo as rep_tipo ON rep_tipo.id = republica.fk_republica_tipo
    GROUP BY republica.id");
return $consulta;
}



function ConsultaRepublica($id){
    $consulta = selecionar("SELECT * FROM republica_info as republica 
    LEFT JOIN republica_tipo as rep_tipo ON rep_tipo.id = republica.fk_republica_tipo
    RIGHT JOIN republica_responsavel as rep_responsavel ON rep_responsavel.id = republica.fk_responsavel
    WHERE republica.id=$id");
 
return $consulta;
}


function ConsultaFotosRepublica($id){
    $consulta = selecionar("SELECT republica.id, republica.titulo,imagens.imagem,republica.valor_total, republica.qtd_quartos, republica.qtd_banheiros, republica.qtd_garagem FROM republica_info as republica 
    LEFT JOIN republica_imagens as imagens ON  imagens.fk_republica = republica.id WHERE republica.id=$id;");
return $consulta;
}

function ConsultaTagsRepublica($id){
    $consulta = selecionar("SELECT *, rep_tag.id as tag_id FROM republica_info as republica 
    LEFT JOIN republica_tags as rep_tag ON rep_tag.fk_republica = republica.id 
    WHERE republica.id=$id");
return $consulta;
}

function ConsultaTagsRepublicas(){
    $consulta = selecionar("SELECT *, rep_tag.id as tag_id FROM republica_info as republica 
    LEFT JOIN republica_tags as rep_tag ON rep_tag.fk_republica = republica.id");
return $consulta;
}

function ConsultaRegrasRepublica($id){
    $consulta = selecionar("SELECT rep_regras.id as regra_id ,rep_regras.regra, republica.titulo FROM republica_info as republica 
    LEFT JOIN republica_regras as rep_regras ON rep_regras.fk_republica = republica.id 
    WHERE republica.id=$id");
return $consulta;
}

function ConsultaRegraRepublicas(){
    $consulta = selecionar("SELECT *, rep_regras.id as regra_id FROM republica_info as republica
    RIGHT JOIN republica_regras as rep_regras ON rep_regras.fk_republica = republica.id 
    ORDER BY republica.titulo");
return $consulta;
}



function ConsultaResponsavel(){
    $consulta = selecionar("SELECT * FROM republica_responsavel");
return $consulta;
}

function ConsultaInscricoes(){
    $consulta = selecionar("SELECT *, republica_contato.id as id_inscricao FROM republica_contato LEFT JOIN republica_info as republica ON republica.id = republica_contato.fk_republica");
return $consulta;

}

?>