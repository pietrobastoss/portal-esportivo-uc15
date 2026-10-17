# Portal Esportivo — Temporada em Jogo

Projeto desenvolvido para a UC15 — HTML Mobile First, com foco em design responsivo, acessibilidade e boas práticas de desenvolvimento web.

## Objetivo

Apresentar notícias, jogos, classificação e destaques do futebol brasileiro em uma interface adaptada a dispositivos móveis.

## Público-alvo

Torcedores que desejam consultar informações esportivas de forma rápida, principalmente pelo celular.

## Funcionalidades

- Navegação responsiva entre as seções do portal.
- Destaques com controles para avançar e voltar e interação por gesto.
- Notícias carregadas do WordPress e busca entre as três notícias exibidas.
- Seção de jogos administrada por conteúdo do WordPress.
- Tabela de classificação demonstrativa.
- Formulário de sugestão de pauta com validação no navegador e mensagem de confirmação.
- Tema filho personalizado para WordPress.

## Tecnologias

- HTML5 semântico
- CSS3, Flexbox, Grid e Container Queries
- JavaScript
- WordPress
- Tema filho baseado no Twenty Twenty-Five

Bootstrap 5.3 e jQuery 4 fazem parte dos requisitos previstos no projeto e precisam ter sua utilização e versão efetivamente verificadas antes de serem considerados implementados.

## Estrutura do repositório

- `prototipo/`: protótipo HTML, CSS e JavaScript.
- `wordpress/tema-filho/`: arquivos-fonte do tema filho.
- `tests/`: espaço destinado aos testes automatizados.
- `docs/evidencias/`: capturas de tela das verificações realizadas.
- `docs/relatorio-final.md`: relatório final do projeto.
- `DECISOES.md`: decisões técnicas e justificativas.
- `TESTES.md`: procedimentos e resultados dos testes.
- `CMS.md`: configuração e documentação do WordPress.

## Executar o protótipo

1. Clone ou baixe este repositório.
2. Abra a pasta `prototipo`.
3. Abra `index.html` em um navegador moderno.

O protótipo utiliza arquivos locais de HTML, CSS e JavaScript. Algumas diferenças podem ocorrer conforme o navegador.

## Executar a versão WordPress

A versão WordPress foi desenvolvida e validada em ambiente local com XAMPP.

1. Instale e configure o XAMPP e o WordPress.
2. Copie `wordpress/tema-filho/` para `wp-content/themes/temporada-em-jogo/`.
3. No painel do WordPress, acesse **Aparência → Temas** e ative **Temporada em Jogo**.
4. Abra a página inicial do site local.

Consulte `CMS.md` para detalhes sobre instalação, atualização e limitações do ambiente.

## Testes

Os procedimentos e resultados dos testes manuais estão registrados em `TESTES.md`. As evidências disponíveis ficam em `docs/evidencias/`.

O projeto possui testes automatizados com Playwright, localizados em `tests/portal.spec.js`. Foram executados cinco testes com sucesso no Chromium, verificando as principais seções do portal, o menu mobile, o carrossel de destaques, a busca de notícias e o formulário de sugestão.

Para executar os testes, instale as dependências com `npm install`, instale o navegador necessário com `npx playwright install chromium` e execute `npm test`.

Os testes acessam o endereço `http://localhost/wordpress/`; portanto, o WordPress local precisa estar configurado e em execução antes da execução da suíte.

## Limitações conhecidas

- A busca filtra apenas as três notícias carregadas na página.
- O formulário de sugestão apresenta confirmação no navegador, mas não envia nem armazena informações.
- A classificação utiliza dados fictícios.
- O carrossel contém conteúdo demonstrativo.
- A versão WordPress está em ambiente local; não há publicação pública documentada.

## Autor

Pietro Bastos
