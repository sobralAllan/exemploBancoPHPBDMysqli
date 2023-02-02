<?php
    namespace POO\Banco\Modelo\DAO;

    require_once('Conexao.php');

    use POO\Banco\Modelo\DAO\Conexao;

    class Atualizar{
        public function Atual(Conexao $conectar, string $nomeDaTabela, int $codigo, string $campo, string $valor){
            //Atualizar
            try{
                $conn = $conectar->Conectar();
                $sql = "update $nomeDaTabela set $campo = '$valor' where codigo = $codigo";
                $result = mysqli_query($conn,$sql);

                if($result){
                    return "<br><br>Atualizado com Sucesso!";
                }else{
                    return "<br><br>Não Atualizado!";
                }

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Atualizar
    }//fim da classe
?>