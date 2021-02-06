<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

1- Para a execução do código, é necessário baixar e instalar os seguintes programas:<br>
     <strong>• Composer - https://getcomposer.org/download/;</strong><br>
     <strong>• Node - https://nodejs.org/en/;</strong><br>
     <strong>• Xampp - https://www.apachefriends.org/pt_br/index.html/</strong> (inicie o Apache e o MYSQL após a instalação).

2- Após a instalação dos programas, baixe e extraia o diretório do git;

3- No diretório já extraido, renomeie o arquivo <strong>".env.example"</strong> para <strong>.env</strong>

4- Abra o caminho do diretório extraído através do terminal de sua escolha (CMD, PowerShell, etc). 

5- No terminal, execute as seguintes linhas de comando:<br>
     <strong>• "composer install";</strong><br>
     <strong>• "php artisan key:generate";</strong><br>
     <strong>• "php artisan migrate". </strong>

6- No programa <strong>Xampp</strong>, abra o <strong>phpmyadmin</strong> clicando na ação admin do MYSQL. Na página WEB aberta, vá para a aba <strong>base de dados</strong> e selecione o banco de dados <strong>ttdc</strong>. Feito isso, vá para a aba <strong>SQL</strong>, copie e cole os códigos SQL dos blocos de nota <strong>"Dados BD Produtos.txt"</strong> e <strong>"Dados BD Usuarios.txt"strong> existente no diretório baixado e os execute. 

7- No terminal, execute o comando <strong>"php artisan serve"</strong> e entre no link do server criado.

8-<strong> Pronto! Agora é só criar sua conta e usar!</strong>

Obs: Para ver a funcionalidade "Distribuição de produtos" funcionando diariamente, mude a data do seu computador.
