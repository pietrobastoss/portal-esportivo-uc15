# Relatório final — UC15

## 1. Objetivo

Desenvolver o Temporada em Jogo, um portal esportivo sobre futebol brasileiro, com foco em responsividade, acessibilidade e facilidade de navegação, principalmente em dispositivos móveis.

## 2. Tecnologias utilizadas

- HTML5 para a estrutura semântica.
- CSS3 para estilização e layout responsivo.
- JavaScript para interatividade e validações no navegador.
- PHP para integração com o WordPress.
- WordPress para gerenciamento e publicação de conteúdos.
- Git e GitHub para controle de versão.
- XAMPP para executar o WordPress em ambiente local.

## 3. Funcionalidades implementadas

- Menu responsivo com abertura e fechamento em dispositivos móveis.
- Navegação pelas seções Início, Notícias, Jogos e Classificação.
- Destaque da seção atual no menu.
- Exibição de notícias e jogos cadastrados no WordPress.
- Busca textual entre as três notícias mais recentes carregadas na página.
- Carrossel de três destaques fictícios, com botões de navegação e suporte a arraste horizontal.
- Formulário de sugestão de pauta com campos obrigatórios, validação de e-mail e mensagem de confirmação.
- Tabela de classificação com posições, equipes e pontos de demonstração.
- Acesso às publicações por meio de seus títulos.
- Estilos de foco visível e respeito à preferência por movimento reduzido.

O formulário é demonstrativo: os dados não são enviados a um servidor nem armazenados.

## 4. Integração com WordPress

O tema filho Temporada em Jogo foi integrado ao WordPress e testado localmente com XAMPP.

As notícias e os jogos são obtidos de publicações cadastradas nas categorias correspondentes. A classificação utiliza dados de demonstração definidos no código PHP.

Também foram realizados testes com duas funções de usuário: Administrador e Editor. O usuário fictício `editor.teste` conseguiu acessar as publicações, mas não visualizou o menu Aparência.

## 5. Testes realizados

Foram realizados testes manuais de:

- Abertura e fechamento do menu mobile.
- Navegação entre seções e destaque da seção ativa.
- Responsividade em diferentes larguras de tela, incluindo 320 px, 375 px, 768 px e 1024 px.
- Navegação por teclado e identificação do foco visível.
- Exibição das notícias e dos jogos cadastrados no WordPress.
- Busca de notícias, incluindo o estado sem resultados.
- Navegação do carrossel pelos botões e por arraste horizontal.
- Validação dos campos obrigatórios e do e-mail no formulário.
- Exibição da mensagem de confirmação do formulário.
- Acesso ao painel do WordPress com os perfis Administrador e Editor.

Os resultados e as limitações dos testes estão registrados no arquivo `TESTES.md`. Não se afirma a realização de testes automatizados completos.

## 6. Acessibilidade e responsividade

O projeto utiliza HTML semântico, foco visível, navegação por teclado, atributos de acessibilidade e regras CSS para movimento reduzido.

Foram realizadas verificações manuais de responsividade, orientação da tela e zoom, além de verificações de contraste para combinações de cores específicas. Essas verificações não representam uma auditoria completa de conformidade com as diretrizes de acessibilidade.

## 7. Decisões e limitações

- Os conteúdos de demonstração e os destaques utilizam textos fictícios.
- A busca filtra as três notícias mais recentes carregadas na página; não pesquisa todas as publicações do WordPress.
- A classificação não é atualizada automaticamente a partir de resultados reais.
- O formulário não envia nem armazena sugestões.
- A funcionalidade de favoritos não faz parte do MVP atual, conforme registrado em `DECISOES.md`.
- O ambiente WordPress utilizado nos testes é local e depende da configuração do XAMPP.
- O usuário fictício de teste foi criado para verificar permissões no ambiente local.

## 8. Publicação e versionamento

O código-fonte está versionado no Git e armazenado no GitHub. A integração com o WordPress foi validada no ambiente local.

A publicação em um servidor acessível pela internet não foi realizada até o momento.

## 9. Próximas verificações

As evidências das principais telas e funcionalidades foram organizadas na pasta `docs/evidencias`. Antes da entrega, ainda é necessário conferir os requisitos finais da atividade e a consistência entre o relatório, o código e os testes realizados. Testes automatizados e uma auditoria abrangente de acessibilidade e desempenho não foram confirmados como concluídos.

## 10. Conclusão

O projeto Temporada em Jogo permitiu aplicar conhecimentos de HTML, CSS, JavaScript, PHP, WordPress e Git em um portal esportivo responsivo. Durante o desenvolvimento, foram implementadas funcionalidades de navegação, busca, destaques e validação de formulário, além da integração com o gerenciamento de publicações do WordPress.

Os testes manuais contribuíram para verificar o comportamento das funcionalidades e documentar suas limitações. O projeto está versionado no GitHub e foi validado em ambiente local, permanecendo necessárias as verificações finais e a conferência dos requisitos de entrega da UC15.