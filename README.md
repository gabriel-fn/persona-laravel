# Aplicação Persona API Laravel

Aplicação para gerar fichas de personagem de RPG que seguem as regras de "Mutantes e Malfeitores".

Feita para ser consumida pela [SPA Persona Ionic](https://github.com/warcontent/persona-ionic4).

Projeto produzido com Laravel v5.8.

## Getting Started

* Clone esse repositório: `git clone https://github.com/warcontent/persona-laravel.git`.
* `cd seuprojeto` vá para a raiz do seu projeto.
* Execute `composer install --no-scripts` para instalar as dependências.
* Execute `cp .env.example .env` para criar o arquivo configuração.
* Execute `php artisan key:generate` para gerar a chave de criptografia.
* Execute `php artisan migrate --seed` para migrar o banco de dados.
* Pronto. :tada:
