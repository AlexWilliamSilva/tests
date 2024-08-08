<?php

use PHPUnit\Framework\TestCase; // caminho usado pelo composer paara acessar a classe de testes presente no framework do phpunit

use App\Estante; // puxa as informações atraves do composer.json do arquivo Estante.php

class EstanteTest extends TestCase // classe criada para herdar metodos da classe testcase
{
    public function testArrayContemLivros() // função de teste
    {
        $estante = new Estante(); // variavel criada para instanciar e armazenar os dados da classe Estante
        $localizados = $estante->ArrayContemLivros(); // variavel criada para armazenar a variavel estante que esta chamando a função ArrayContemLivros
        $this->assertContains('Dorian gray', $localizados); // variavel que chama a verificação do nome do livro presente na array localizados
    }
}