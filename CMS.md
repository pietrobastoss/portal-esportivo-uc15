# Documentação do WordPress — Temporada em Jogo

## 1. Ambiente local

O projeto utiliza WordPress instalado localmente com XAMPP para desenvolver e validar o tema filho.

- **Servidor local:** XAMPP
- **CMS:** WordPress
- **Endereço local:** http://localhost/wordpress
- **Tema pai:** Twenty Twenty-Five (`twentytwentyfive`)
- **Tema filho:** Temporada em Jogo
- **Versão declarada do tema filho:** 1.0.0

O endereço acima funciona apenas no computador em que o WordPress está instalado e configurado.

## 2. Estrutura do tema filho

Os arquivos-fonte estão em `wordpress/tema-filho/`.

- `style.css`: identificação do tema e estilos personalizados.
- `functions.php`: carregamento dos estilos, do JavaScript e da meta tag viewport.
- `front-page.php`: estrutura da página inicial do portal.
- `script.js`: funcionalidades interativas do portal.

O tema filho herda os recursos do Twenty Twenty-Five e mantém as personalizações separadas do tema pai, evitando alterações diretas nos arquivos originais.

## 3. Instalação e ativação

1. Instale e inicie o XAMPP, com os serviços necessários para o WordPress em execução.
2. Instale o WordPress no ambiente local e confirme que ele abre em `http://localhost/wordpress`.
3. Copie a pasta `wordpress/tema-filho/` para `wp-content/themes/`, dentro da instalação do WordPress.
4. Confirme que a pasta copiada se chama `temporada-em-jogo` e contém os quatro arquivos descritos acima.
5. No painel administrativo do WordPress, acesse **Aparência → Temas** e ative **Temporada em Jogo**.
6. Abra a página inicial do site e valide o layout, o menu e as funcionalidades interativas.

Se o projeto for instalado em outro computador, os caminhos e as configurações do servidor poderão precisar de ajustes.

## 4. Atualização durante o desenvolvimento

Após alterar os arquivos-fonte no repositório, copie os arquivos atualizados para a pasta do tema ativo no WordPress:

`C:\xampp\htdocs\wordpress\wp-content\themes\temporada-em-jogo`

Verifique se os arquivos foram copiados para o destino correto e recarregue o site. Se o navegador apresentar uma versão antiga, faça uma atualização forçada da página.

Mantenha as alterações no repositório Git e confira o estado do projeto antes de realizar commits.

## 5. Usuários e permissões

O projeto foi validado com contas de teste no WordPress, incluindo uma conta com perfil Editor para verificar as permissões disponíveis.

O perfil Editor pode gerenciar conteúdo editorial conforme as permissões padrão do WordPress, mas não deve ter acesso administrativo completo às configurações do site.

Não registre senhas, tokens ou outros dados de autenticação neste documento ou no repositório.

## 6. Conteúdo e funcionalidades demonstrativas

- A busca filtra as três notícias carregadas na página; não é uma busca global por todo o WordPress.
- O formulário de sugestão apresenta uma confirmação no navegador, mas não envia nem armazena os dados.
- A tabela de classificação contém dados fictícios para demonstração.
- Os destaques do carrossel utilizam conteúdo demonstrativo.

Essas limitações devem ser consideradas ao avaliar o projeto e não devem ser confundidas com funcionalidades de produção.

## 7. Backup e recuperação

Antes de alterações importantes, faça uma cópia de segurança do banco de dados do WordPress e dos arquivos necessários, incluindo `wp-content`, uploads e temas personalizados.

Para recuperar o ambiente, restaure o banco de dados e os arquivos correspondentes e confira as configurações locais. Não inclua backups de bancos de dados, credenciais ou dados pessoais no repositório Git.

Os procedimentos detalhados de backup e restauração ainda precisam ser testados e registrados.

## 8. Publicação

O ambiente validado é local. Este documento não afirma que o site está publicado em um servidor público.

Antes de uma publicação, será necessário configurar hospedagem, HTTPS, banco de dados e URLs adequados, revisar usuários e permissões, testar os fluxos essenciais e preparar um procedimento de reversão.

## 9. Limitações e pendências

- O ambiente documentado é local e depende do XAMPP e do WordPress instalados.
- Os procedimentos de backup e restauração precisam de validação prática.
- A publicação em ambiente de produção ainda precisa ser documentada e testada.
- As funcionalidades demonstrativas descritas acima não substituem serviços de produção.
