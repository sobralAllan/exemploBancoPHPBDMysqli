<?php
namespace POO\Banco\Modelo\DAO;

require_once('Conexao.php');

use POO\Banco\Modelo\DAO\Conexao;

class Excluir{
    public function Deletar(Conexao $conexao, string $nomeDaTabela, int $codigo){
        //Excluir
        try{
            $conn = $conexao->Conectar();
            $sql = "delete from $nomeDaTabela where codigo = $codigo";
            $result = mysqli_query($conn,$sql);

            if($result){
                return "<br><br>Excluido com sucesso!";
            }else{
                return "<br><br>Não consultado!";
            }

            mysqli_close($conn);
        }catch(Except $erro){
            echo $erro;
        }
    }//fim do Excluir
}    
?>