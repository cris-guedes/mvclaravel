## Description
Projeto desnvolvido na disciplina de SitiosWeb 3 da universidade [UTFPR](http://www.utfpr.edu.br/campus/toledo)
o trabalho consiste em montar uma aplicação simples de manipulação de dados em banco usando 
o padrão CRUD.


## Running
- execute o script sql sw3.sql que esta na pasta ./docs em seu bacno de preferencia
- mude as variaveis de ambiente no arquivo .env: 
```
DB_CONNECTION
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
```


### Folders structure (simplified)
```
📦app
 ┣ 📂Http
 ┃ ┣ 📂Controllers    # Controllers usados na aplicação
 ┣ 📂docs
 ┃  ┣ 📜sw3.sql       # Script sql Do banco de dados
📂routes
 ┣  📜web.php         # Rotas utilizadas na aplicação
 📂resources
 ┗ 📂views            # paginas Front-end Utilizadas na aplicação
 ┃ ┣ 📂clientsPages    
 ┃ ┣ 📂employeesPages
 ┃ ┣ 📂productsPages
 ┃ ┣ 📂ramalsPages
 ┃ ┣ 📂template
 ┃ ┗ 📜home.blade.php  
```



