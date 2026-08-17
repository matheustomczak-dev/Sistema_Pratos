Desafio

Desenvolva um sistema que permita o cadastro de usuários e o gerenciamento de pratos do restaurante.

Cada prato deverá estar relacionado ao usuário responsável pelo seu cadastro. Dessa forma, ao cadastrar um novo prato, o sistema deverá armazenar não apenas suas informações, mas também identificar qual usuário realizou o cadastro.

O banco de dados deverá possuir pelo menos duas tabelas relacionadas: uma para armazenar os usuários e outra para armazenar os pratos.

O sistema deverá permitir cadastrar usuários, cadastrar pratos, visualizar os pratos existentes, editar suas informações, excluir registros e identificar os pratos cadastrados por cada usuário.

Requisitos do Sistema

RF1 — Cadastrar Usuário: O sistema deve permitir cadastrar usuários informando nome e e-mail.

RF2 — Cadastrar Prato: O sistema deve permitir que um usuário cadastre um prato informando nome, descrição, preço e categoria.

RF3 — Listar Pratos: O sistema deve apresentar todos os pratos cadastrados, informando também o usuário responsável pelo cadastro.

RF4 — Editar Prato: O sistema deve permitir alterar as informações de um prato já cadastrado.

RF5 — Excluir Prato: O sistema deve permitir excluir um prato já cadastrado.

RF6 — Listar Pratos por Usuário: O sistema deve permitir visualizar os pratos cadastrados por um determinado usuário.

RNF1 — Validação dos Campos: O sistema não deve permitir o cadastro de usuários ou pratos com campos obrigatórios vazios.

RNF2 — Segurança dos Dados: As operações que recebem informações fornecidas pelo usuário deverão utilizar Prepared Statements.