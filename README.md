# Programacao_PHP

# 📘 Programação em PHP

Repositório dedicado ao aprendizado e prática da linguagem **PHP**, desenvolvido com os materiais e exercícios da **Escola da Amazônia**. O foco deste repositório é consolidar a lógica de programação, estruturas de dados fundamentais e evolução para o desenvolvimento web.

---

## 🎯 Sumário

- [Visão Geral](#-visão-geral)
- [Estrutura dos Exercícios](#-estrutura-dos-exercícios)
  - [🟢 Nível 1 — Fundamentos](#-nível-1--fundamentos)
  - [🟡 Nível 2 — Condições](#-nível-2--condições)
  - [🟠 Nível 3 — Laços de Repetição](#-nível-3--laços-de-repetição)
  - [🔵 Nível 4 — Arrays](#-nível-4--arrays)
  - [🟣 Nível 5 — Funções](#-nível-5--funções)
  - [🔴 Nível 6 — Desafios Práticos](#-nível-6--desafios-práticos)
- [Trilha de Conteúdos](#-trilha-de-conteúdos)
- [Como Executar](#-como-executar)
  - [Opção 1: Servidor Embutido do PHP (Recomendado)](#opção-1-servidor-embutido-do-php-recomendado)
  - [Opção 2: Via XAMPP / WampServer](#opção-2-via-xampp--wampserver)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Licença](#-licença)

---

## 📖 Visão Geral

Este repositório reúne uma progressão prática dividida em **6 níveis de dificuldade** com **20 exercícios práticos**, além de um plano de estudos cobrindo desde a sintaxe básica até recursos avançados como Orientação a Objetos e integração com banco de dados.

---

## 📁 Estrutura dos Exercícios

Os exercícios práticos estão organizados na pasta [`Exercícios`](./Exercícios) por níveis de aprendizado:

### 🟢 Nível 1 — Fundamentos
Focado no primeiro contato com a sintaxe PHP, saída de dados e operações aritméticas básicas.

| Arquivo | Descrição |
| :--- | :--- |
| [Exercício 1 — Olá, mundo.php](./Exercícios/🟢%20Nível%201%20—%20Fundamentos/Exercício%201%20—%20Olá,%20mundo.php) | Impressão da mensagem inicial usando `echo`. |
| [Exercício 2 — Variáveis.php](./Exercícios/🟢%20Nível%201%20—%20Fundamentos/Exercício%202%20—%20Variáveis.php) | Declaração, atribuição e concatenação de variáveis de texto e números. |
| [Exercício 3 — Soma.php](./Exercícios/🟢%20Nível%201%20—%20Fundamentos/Exercício%203%20—%20Soma.php) | Soma simples entre dois valores numéricos. |
| [Exercício 4 — Operações matemáticas.php](./Exercícios/🟢%20Nível%201%20—%20Fundamentos/Exercício%204%20—%20Operações%20matemáticas.php) | Operações fundamentais: adição, subtração, multiplicação e divisão. |

---

### 🟡 Nível 2 — Condições
Trabalha com desvios condicionais (`if`, `else`, `elseif`) e operadores de comparação/lógicos.

| Arquivo | Descrição |
| :--- | :--- |
| [Exercício 5 — Maior de idade.php](./Exercícios/🟡%20Nível%202%20—%20Condições/Exercício%205%20—%20Maior%20de%20idade.php) | Verificação de maioridade com base na idade informada. |
| [Exercício 6 — Número par ou ímpar.php](./Exercícios/🟡%20Nível%202%20—%20Condições/Exercício%206%20—%20Número%20par%20ou%20ímpar.php) | Identificação de paridade utilizando o operador módulo (`%`). |
| [Exercício 7 — Maior entre dois números.php](./Exercícios/🟡%20Nível%202%20—%20Condições/Exercício%207%20—%20Maior%20entre%20dois%20números.php) | Comparação entre dois valores para indicar o maior ou se são iguais. |
| [Exercício 8 — Aprovação do aluno.php](./Exercícios/🟡%20Nível%202%20—%20Condições/Exercício%208%20—%20Aprovação%20do%20aluno.php) | Cálculo de média e validação de situação (Aprovado ou Reprovado). |

---

### 🟠 Nível 3 — Laços de Repetição
Prática com estruturas de repetição (`for`, `while`) para iterações e contadores.

| Arquivo | Descrição |
| :--- | :--- |
| [Exercício 9 — Números de 1 a 10.php](./Exercícios/🟠%20Nível%203%20—%20Laços%20de%20repetição/Exercício%209%20—%20Números%20de%201%20a%2010.php) | Contagem progressiva de 1 a 10 usando laço `for`. |
| [Exercício 10 — Tabuada.php](./Exercícios/🟠%20Nível%203%20—%20Laços%20de%20repetição/Exercício%2010%20—%20Tabuada.php) | Geração automática da tabuada de multiplicação de um número. |
| [Exercício 11 — Soma de 1 a 100.php](./Exercícios/🟠%20Nível%203%20—%20Laços%20de%20repetição/Exercício%2011%20—%20Soma%20de%201%20a%20100.php) | Acumulador para calcular o somatório dos números de 1 a 100. |
| [Exercício 12 — Números pares.php](./Exercícios/🟠%20Nível%203%20—%20Laços%20de%20repetição/Exercício%2012%20—%20Números%20pares.php) | Listagem de números pares em um intervalo numérico. |

---

### 🔵 Nível 4 — Arrays
Manipulação de vetores, coleções de dados e iterações com `foreach`.

| Arquivo | Descrição |
| :--- | :--- |
| [Exercício 13 — Lista de nomes.php](./Exercícios/🔵%20Nível%204%20—%20Arrays/Exercício%2013%20—%20Lista%20de%20nomes.php) | Declaração e exibição dos itens de uma lista de nomes com `foreach`. |
| [Exercício 14 — Média de notas.php](./Exercícios/🔵%20Nível%204%20—%20Arrays/Exercício%2014%20—%20Média%20de%20notas.php) | Cálculo da média aritmética a partir de um array numérico com `count()`. |
| [Exercício 15 — Encontrar o maior número.php](./Exercícios/🔵%20Nível%204%20—%20Arrays/Exercício%2015%20—%20Encontrar%20o%20maior%20número.php) | Algoritmo para encontrar e exibir o maior elemento dentro de um array. |

---

### 🟣 Nível 5 — Funções
Criação de funções reutilizáveis, passagem de parâmetros e retorno de valores com `return`.

| Arquivo | Descrição |
| :--- | :--- |
| [Exercício 16 — Função para somar.php](./Exercícios/🟣%20Nível%205%20—%20Funções/Exercício%2016%20—%20Função%20para%20somar.php) | Função com parâmetros que retorna a soma de dois números. |
| [Exercício 17 — Função para verificar idade.php](./Exercícios/🟣%20Nível%205%20—%20Funções/Exercício%2017%20—%20Função%20para%20verificar%20idade.php) | Função que recebe a idade e retorna se a pessoa é maior ou menor de idade. |

---

### 🔴 Nível 6 — Desafios Práticos
Problemas aplicados que integram múltiplos conceitos como laços, arrays associativos e regras de negócio.

| Arquivo | Descrição |
| :--- | :--- |
| [Exercício 18 — Sistema de notas.php](./Exercícios/🔴%20Nível%206%20—%20Desafios%20práticos/Exercício%2018%20—%20Sistema%20de%20notas.php) | Processamento de notas de aluno, cálculo de média e situação final. |
| [Exercício 19 — Caixa eletrônico.php](./Exercícios/🔴%20Nível%206%20—%20Desafios%20práticos/Exercício%2019%20—%20Caixa%20eletrônico.php) | Distribuição de cédulas (R$ 100, 50, 20 e 10) usando `intdiv()` e operador resto. |
| [Exercício 20 — Cadastro de produtos.php](./Exercícios/🔴%20Nível%206%20—%20Desafios%20práticos/Exercício%2020%20—%20Cadastro%20de%20produtos.php) | Array associativo de produtos com cálculo de subtotal por item e valor total do estoque. |

---

## 🗺️ Trilha de Conteúdos

O plano de aprendizado do curso abrange os seguintes tópicos:

1. **Fundamentos e Ambiente**:
   - Configuração do PHP, XAMPP e servidor embutido.
   - Sintaxe básica, tags PHP, variáveis e tipos de dados.
2. **Estruturas de Controle**:
   - Condicionais: `if`, `else`, `elseif`, `switch` e operador ternário.
   - Repetições: `for`, `while`, `do-while`, `foreach`, `break` e `continue`.
3. **Estruturas de Dados**:
   - Arrays indexados e associativos, matrizes multidimensionais.
   - Funções de array (`count`, `sort`, `array_push`, etc.).
4. **Modularização**:
   - Funções, escopo de variáveis, parâmetros nomeados e tipagem.
   - Inclusão de arquivos com `include`, `require`, `include_once` e `require_once`.
5. **PHP na Web**:
   - Formulários HTML e métodos HTTP (`GET` e `POST`).
   - Superglobais: `$_GET`, `$_POST`, `$_SERVER`, `$_SESSION` e `$_COOKIE`.
6. **Programação Orientada a Objetos (POO)**:
   - Classes, propriedades, métodos e instanciação (`new`, `$this`).
   - Construtores (`__construct`), encapsulamento (`public`, `protected`, `private`).
   - Herança, interfaces e polimorfismo.
7. **Manipulação de Arquivos e Diretórios**:
   - Leitura e escrita com `fopen()`, `fwrite()`, `fread()`, `file_get_contents()`.
   - Gerenciamento de pastas (`mkdir()`, `scandir()`) e arquivos (`unlink()`, `rename()`).
8. **Banco de Dados (MySQL / PDO)**:
   - Conexão com banco via PDO.
   - Operações de CRUD (Create, Read, Update, Delete) com Prepared Statements.
9. **Projeto Prático Final**:
   - Aplicação completa integrando formulários, regras de negócio e persistência.

---

## 🚀 Como Executar

### Pré-requisitos
- [PHP](https://www.php.net/) instalado na máquina (versão 8.0 ou superior recomendada).
- Alternativamente, [XAMPP](https://www.apachefriends.org/) ou [WampServer](https://www.wampserver.com/).

### Opção 1: Servidor Embutido do PHP (Recomendado)

Você pode iniciar o servidor web nativo do PHP diretamente na raiz do projeto:

```bash
# Clone o repositório
git clone https://github.com/Rogerio-filho80/Programacao_PHP.git

# Acesse o diretório
cd Programacao_PHP

# Inicie o servidor embutido
php -S localhost:8000
```

Abra o seu navegador e acesse:
```
http://localhost:8000/Exercícios/
```
A partir daí, você pode navegar pelas pastas e clicar em qualquer exercício para executá-lo.

---

### Opção 2: Via XAMPP / WampServer

1. Instale o **XAMPP** e inicie o serviço **Apache** no painel de controle.
2. Copie ou clone esta pasta para dentro do diretório `htdocs` (geralmente em `C:\xampp\htdocs\Programacao_PHP`).
3. Abra o navegador e acesse:
   ```
   http://localhost/Programacao_PHP/Exercícios/
   ```

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8+** — Linguagem principal
- **HTML5** — Estrutura de saída para visualização no navegador
- **Git & GitHub** — Controle de versão e hospedagem do código

---

## 📄 Licença

Este projeto está sob a licença [MIT](./LICENSE). Sinta-se livre para usar, estudar e compartilhar.
