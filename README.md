<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

1-  Para a execução do codigo é necessario baixar e instalar os seguintes programas:<br>
    <strong>Composer</strong> - https://getcomposer.org/download/;<br>
    <strong>Node</strong> - https://nodejs.org/en/;<br>
    <strong>Xampp</strong> - https://www.apachefriends.org/pt_br/index.html/ (inicie o apache e o MYSQL após a instalação);<br>

2-  Após a instalação dos programas, baixe e extraia o diretorio do git;

3-  Abra o caminho do diretorio extraido atraves do terminal de sua escolha(CMD, PowerShell, etc);

4-  No terminal execute as seguintes linhas de comando:  <br>
    "composer install";<br>
    "php artisan key:generate";<br>
    "php artisan migrate";<br>

5-  No xampp abra o phpmyadmin clicando na ação admin do MYSQL.<br>
    Na página WEB aberta vá para a aba base de dados e selecione o banco de dados ttdc, depois vá para a aba SQL, copie e cole o conteudo dos blocos de nota <strong>"Dados BD      Produtos.txt"</strong> e <strong>"Dados BD Usuarios.txt"</strong> existente no diretorio baixado;

6-  Execute no terminal o comando <strong>"php artisan serve"</strong> e entre no link do server criado.

7- Pronto! Agora é só criar sua conta e usar.

PS: Para ver a funcionalidade Distribuição funcionando diariamente, mude a data do seu computador.
