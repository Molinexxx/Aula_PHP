# Aula PHP

Coletânea de exercícios e pequenos projetos desenvolvidos durante as aulas de PHP. O material vai de estruturas de controle e formulários a páginas que gravam dados em arquivos JSON.

## O que explorar

| Pasta | Conteúdo |
| --- | --- |
| [aula 5](Molina_php/aula%20-%205%20-%20php/) e [aula 6](Molina_php/aula6PHP/) | Exercícios com `switch`, `while` e `for`. |
| [Revisão de formulários](Molina_php/revisao-formularios/) | Leitura e tratamento de dados enviados pelo navegador. |
| [Aula 12](Molina_php/aula%2012/) | Reutilização de cabeçalho e rodapé com `include`. |
| [TodoList](Molina_php/TodoList/) | Adiciona, conclui e remove tarefas. Grava as alterações em `tasks.json`. |
| [Cadastro de alunos](Molina_php/cadastro_aluno/) | Cadastra, lista e remove registros armazenados em `alunos.json`. |
| [Mural de recados](Molina_php/comentario/) | Recebe e exibe mensagens armazenadas em `recados.json`. |
| [Portfólio de aula](Molina_php/Portifolio/) | Exercício de layout com seções de apresentação, projetos e contato. |

## Tecnologias

PHP, HTML, CSS, Bootstrap em algumas páginas e arquivos JSON para persistência nos exemplos indicados.

## Como executar

Com o PHP instalado, execute na raiz do repositório:

```bash
php -S localhost:8000 -t Molina_php
```

Abra a [lista de tarefas](http://localhost:8000/TodoList/), o [cadastro de alunos](http://localhost:8000/cadastro_aluno/) ou o [mural de recados](http://localhost:8000/comentario/mensagemDeRecado.php). Para os demais exercícios, use o caminho do arquivo relativo a `Molina_php/`. Os exemplos com JSON precisam de permissão de escrita nos respectivos arquivos.

## Aprendizados e status

Os exercícios praticam lógica, envio de formulários, composição de páginas e persistência simples. São atividades independentes de aula. Use dados fictícios, especialmente no cadastro que pede documentos pessoais.
