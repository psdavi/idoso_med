# projeto-frameworks-grupo-4
O sistema a ser desenvolvido trata-se de um website para gerenciamento de medicamentos para um abrigo de idosos. Ele possui papel relevante para auxiliar funcionários do abrigo a gerenciarem de forma mais efetiva o controle de medicamentos dos abrigados, fornecendo uma assistência de saúde mais humanizada.



📥 Passos após baixar o repositório

Clonar o repositório

git clone https://github.com/psdavi/idoso_med.git

cd nome-do-repositorio


Instalar as dependências PHP com o Composer

composer install


Copiar o arquivo .env.example para .env

cp .env.example .env


Gerar a chave da aplicação

php artisan key:generate


Configurar o banco de dados

Edite o arquivo .env com as credenciais do seu banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha


Rodar as migrations

php artisan migrate


Instalar dependências do frontend (opcional)

Se o projeto utilizar assets compilados via Laravel Mix ou Vite:

npm install
npm run dev


Iniciar o servidor local

php artisan serve


O projeto estará disponível em: http://localhost:8000
