O sistema oferece um gerenciamento simples e eficiente para usuários e endereços, com uma interface amigável para o administrador. Ele permite o cadastro, edição, visualização e exclusão de usuários e endereços, garantindo integridade e consistência dos dados por meio de relacionamentos e regras de negócio bem definidas. A exclusão em cascata evita que dados órfãos (endereços sem usuário) fiquem no banco de dados.<br>
<br><br>--Cadastro de Usuário e Endereço: <br>
 O administrador acessa o painel de administração e pode cadastrar um novo usuário. Para isso, ele preenche os campos de nome e e-mail do usuário. <br>
  As informações do usuário são salvas na tabela usuarios, enquanto os dados do endereço são armazenados na tabela enderecos. Cada endereço registrado é vinculado a um usuário específico por meio do usuario_id, que é a chave estrangeira na tabela enderecos.
<br><br>--Exibição de Usuários e Seus Endereços:<br>
O administrador tem acesso a uma tela de listagem, onde são exibidos todos os usuários cadastrados e seus respectivos endereços.<br>
Cada linha da tabela de visualização contém as seguintes informações:<br>
  -Nome do usuário<br>
  -E-mail do usuário<br>
  -Endereço(s)<br>
  -Número(s) de residência<br>
  -Valor das contas pagas<br>
Essa tela é centralizada, de modo que o administrador pode visualizar rapidamente todas as informações importantes sobre os usuários e seus endereços.
<br><br>--Edição de Dados de Usuários e Endereços:<br>
O administrador pode editar tanto os dados do usuário quanto os dados de seus endereços.<br>
   -Para editar o usuário, basta selecionar o usuário desejado na interface e alterar o nome ou e-mail.<br>
   -Para editar o endereço, o administrador seleciona o endereço a ser alterado e modifica o endereço, número da residência ou valor da conta paga.<br>
Após as edições, os dados são atualizados nas tabelas correspondentes (usuarios e enderecos).
<br><br>--Exclusão de Usuários e Seus Endereços:<br>
O administrador pode excluir um usuário. Quando um usuário é excluído, todos os seus dados relacionados, como os endereços e os valores das contas, também são excluídos da tabela enderecos por meio de um relacionamento de exclusão em cascata.<br>
Caso o administrador queira excluir apenas um endereço, ele pode realizar essa ação sem afetar os outros dados do usuário.<br>
O sistema pergunta ao administrador se ele tem certeza da exclusão antes de efetivar a operação, garantindo maior segurança e evitando exclusões acidentais.<br>



