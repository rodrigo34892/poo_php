# Projeto de Exercícios PHP

Este projeto contém vários exercícios para praticar conceitos de programação em PHP. Cada exercício está organizado em seu próprio diretório e inclui um formulário HTML para entrada de dados, além de uma classe PHP correspondente para tratar a lógica.

## Estrutura do Projeto

```
**poo-php**
├── **Exerícios-poo**
│   ├── **1**
│   │   ├── index.php        // Formulário para dados do funcionário
│   │   └── classe.php    // Classe para cálculos do funcionário
│   ├── **2**
│   │   ├── index.php        // Formulário para dados do aluno
│   │   └── classe.php    // Classe para cálculos do aluno
│   └── **3**
│       ├── index.php        // Formulário para dados do produto
│       └── classe.php    // Classe para cálculos do pedido
├── README.md                // Documentação do projeto


## Exercício 1: Dados do Funcionário

- **index.php**: Contém um formulário para inserir dados do funcionário como nome, cargo, salário, carga horária semanal, bônus e horas extras. Ao enviar, processa os dados e exibe os resultados calculados usando a classe `Funcionario`.
- **classe.php**: Define a classe `Funcionario` com métodos para calcular valor da hora, salário com bônus, horas extras e exibir detalhes.

## Exercício 2: Notas do Aluno

- **index.php**: Contém um formulário para inserir dados do aluno, incluindo nome, disciplina e três notas. Processa o envio e exibe a média calculada e o status (aprovado, em recuperação ou reprovado) usando a classe `Aluno`.
- **classe.php**: Define a classe `Aluno` com métodos para calcular a média e determinar o status do aluno com base na média.

## Exercício 3: Pedidos de Produto

- **index.php**: Contém um formulário para inserir detalhes do produto como nome, quantidade, preço unitário e tipo de cliente. Processa o envio e exibe o total, desconto, imposto e total final usando a classe `Pedido`.
- **classe.php**: Define a classe `Pedido` com métodos para calcular total, desconto, imposto e total final.

## Como Começar

1. Clone o repositório ou baixe os arquivos do projeto.
2. Navegue até o diretório `php-exercises`.
3. Abra a pasta `exercises` e escolha um exercício para rodar.
4. Abra o arquivo `index.php` correspondente em um navegador para visualizar o formulário.
5. Preencha o formulário e envie para ver os resultados.

## Requisitos

Certifique-se de ter um ambiente de servidor local configurado para rodar scripts PHP. Você pode usar ferramentas como XAMPP, MAMP ou similar.

## Licença

Este projeto é open-source e está disponível para uso e modificação por qualquer pessoa.
