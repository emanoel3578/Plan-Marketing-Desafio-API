# 🖥️ Plan-Marketing-Desafio-API 🖥️
<h3> Projeto desenvolvido para a conclusão do processo seletivo </h3>

# Comandos para execução do container da API:
<p> Renomear .env.production para .env na pasta /src </p>
<p> docker-compose build && docker-compose up </p>
<p> docker exec php composer install </p>
<p> docker exec php php artisan key:generate </p>
<p> docker exec php php artisan migrate </p>

> # Documentação API:
> > ## Endpoints (Url's para onde deve-se fazer as requisições):
###  |POST| /criar - Endpoint disponível para registrar um novo produto.
 #### Autenticação: Não necessária
 ============================== <table>
  <tr>
    <td>Campos esperados</td>
    <td>Tipo</td>
    <td>Requerido</td>
    <td>Descrição</td>
  </tr>
  
  <tr>
    <td>name</td>
    <td>string</td>
    <td>SIM</td>
    <td>O nome do seu produto (Max:50 Characters)</td>
  </tr>
  
  <tr>
    <td>description</td>
    <td>string</td>
    <td>SIM</td>
    <td>A descrição do seu produto (Max:155 Characters)</td>
  </tr>
  
  <tr>
    <td>tension</td>
    <td>string</td>
    <td>SIM</td>
    <td>A tensão do seu produto em Volts</td>
  </tr>
  
  <tr>
    <td>brand</td>
    <td>string</td>
    <td>SIM</td>
    <td>Marca do seu produto</td>
  </tr>
</table>

---
###  |GET| /listar - Endpoint disponível para realizar a requisição dos produtos em forma de lista.
 ============================== <table>
<thead>
  <tr>
    <th>Campos esperados</th>
    <th>Tipo</th>
    <th>Requerido</th>
    <th>Descrição</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>itemsPerPage</td>
    <td>integer</td>
    <td>SIM</td>
    <td>Numero de items por requisição</td>
  </tr>
  <tr>
    <td>offset</td>
    <td>integer</td>
    <td>SIM</td>
    <td>Numero pelo qual proximo item da proxima requisição deve começar a procura</td>
  </tr>
</tbody>
</table>

---
###  |PATCH| /editar - Endpoint disponível para editar as informações dos produtos.
 ============================== <table>
<thead>
  <tr>
    <th>Campos esperados</th>
    <th>Tipo</th>
    <th>Requerido</th>
    <th>Descrição</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>id</td>
    <td>integer</td>
    <td>SIM</td>
    <td>Id do produto nos registros para alteração dos dados</td>
  </tr>
  
  <tr>
    <td>name</td>
    <td>string</td>
    <td>NÃO</td>
    <td>O nome do seu produto (Max:50 Characters)</td>
  </tr>
  
  <tr>
    <td>description</td>
    <td>string</td>
    <td>NÃO</td>
    <td>A descrição do seu produto (Max:155 Characters)</td>
  </tr>
  
  <tr>
    <td>tension</td>
    <td>string</td>
    <td>NÃO</td>
    <td>A tensão do seu produto em Volts</td>
  </tr>
  
  <tr>
    <td>brand</td>
    <td>string</td>
    <td>NÃO</td>
    <td>Marca do seu produto</td>
  </tr>
</tbody>
</table>

---
###  |DELETE| /deletar - Endpoint disponível para deletar um produto dos registros.
 ============================== <table>
<thead>
  <tr>
    <th>Campos esperados</th>
    <th>Tipo</th>
    <th>Requerido</th>
    <th>Descrição</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>id</td>
    <td>integer</td>
    <td>SIM</td>
    <td>Id do produto nos registros para deletar dos registros</td>
  </tr>
</tbody>
</table>

© 2022 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
