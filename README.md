# Aplicação Persona API Laravel

Aplicação para gerar fichas de personagem de RPG que seguem as regras de "Mutantes e Malfeitores".

Feita para ser consumida pela [SPA Persona Ionic](https://github.com/gabriel-fn/persona-ionic4).

Para saber mais, veja esse [vídeo de apresentação do funcionamento da aplicação](https://warcontent.com/materiais/projeto-persona/).

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

Consulte **Instalação** para saber como implantar o projeto.

### 🛠️ Construído com

* [Laravel v5.8](https://laravel.com/docs/5.8) - O framework web usado
* [Laravel Passport](https://laravel.com/docs/5.8/passport) - Pacote oficial para autenticação de usuários do framework Laravel

### 🔧 Instalação

* Clone esse repositório: `git clone https://github.com/gabriel-fn/persona-laravel.git`.
* `cd seuprojeto` vá para a raiz do seu projeto.
* `composer install --no-scripts` para instalar as dependências.
* `cp .env.example .env` para criar o arquivo de configuração.
* `php artisan key:generate` para gerar a chave de criptografia.
* `php artisan migrate --seed` para migrar o banco de dados.
* `php artisan passport:keys` para gerar a chave criptografica do [Passport](https://laravel.com/docs/5.8/passport).
* `php artisan passport:client --password` para criar o cliente do [Passport](https://laravel.com/docs/5.8/passport).
* Pronto. :tada:

## 📦 Desenvolvimento

Algumas informações adicionais para implantar a aplicação em um sistema ativo.

Você precisa configurar as variáveis da aplicação e do banco de dados no arquivo **.env** criado (para atender ao seu ambiente de desenvolvimento/produção):

```
...

APP_URL=http://localhost

...

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Fique atento ao id e chave do cliente do pacote de autenticação [Laravel Passport](https://laravel.com/docs/5.8/passport). O id e a chave foram criados pelo comando `php artisan passport:client --password` e se encontram no seu banco de dados com os nomes:

```
client_id: 1
client_secret: "Yvn8jlQ6Zrqc9lDu9MtShNA3N4G0Qv7adQu4Hsa2"
```

* Essas 2 informações serão necessárias quando você for configurar a interface [SPA Persona Ionic](https://github.com/gabriel-fn/persona-ionic4).

---
⌨️ com ❤️ por [Gabriel Nascimento](https://www.linkedin.com/in/gabriel-fn/) 😊
