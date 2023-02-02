<?php
    namespace POO\Banco\Modelo\DAO;

    require_once('Conexao.php');

    use POO\Banco\Modelo\DAO\Conexao;

    class Inserir{
        public function Insert(Conexao $conexao, string $nomeDaTabela, string $nome, string $celular){
            //Inserir
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into $nomeDaTabela(codigo, nome, telefone) values ('','$nome','$celular')";
                $result = mysqli_query($conn,$sql);
                
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }else{
                    return "<br><br>Não inserido!";
                }   

                mysqli_close($conn);
            }catch(Exception $erro){
                echo $erro;
            }
        }//fim do inserir
    }//fim da classe
?>