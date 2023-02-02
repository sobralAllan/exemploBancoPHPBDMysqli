<?php
    namespace POO\Banco\Modelo\DAO;

    require_once('Conexao.php');

    use POO\Banco\Modelo\DAO\Conexao;

    class Consultar{

        public function ConsultarIndividual(Conexao $conexao, string $nomeDaTabela, int $codigo){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["codigo"] == $codigo){
                        echo "<br><br>Código:  ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["telefone"];
                    }
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar

        public function ConsultarTudo(Conexao $conexao, string $nomeDaTabela){
            //Consultar
            try{
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeDaTabela";
                $result = mysqli_query($conn, $sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br><br>Código:  ".$dados["codigo"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".$dados["telefone"];
                }//fim do while

                mysqli_close($conn);
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do Consultar
    }    

?>