# Plano de testes

## 1. Testes manuais realizados

### Menu mobile

- **Abrir o menu:** aprovado.
- **Fechar o menu:** aprovado.
- **Atualização do texto e do ícone:** aprovada.
- **Navegação até a seção selecionada:** aprovada.
- **Fechamento do menu após selecionar uma opção:** aprovado.

### CSS e responsividade

- **Estados de interação:** regras de `hover`, `active` e `focus-visible` identificadas no CSS.

- **Movimento reduzido:** regra `prefers-reduced-motion` identificada.

- **Tabela responsiva:** aprovada em telas de 320 px, 375 px, 768 px e 1024 px, além de larguras inferiores a 320 px.

- **Responsividade geral:** testada nas larguras de 320 px, 375 px, 768 px e 1024 px.

- **Container Queries:** regra `@container (min-width: 30rem)` implementada nos cartões; comportamento visual conferido no navegador.

- **Container Queries:** adaptação dos cartões verificada no navegador em larguras de 768 px e 1024 px.

- **Zoom de 200%:** conteúdo legível e cabeçalho deixa de ficar fixo quando a altura disponível da janela é reduzida.

- **Orientação da tela:** conteúdo, menu, notícias, jogos e tabela verificados em retrato e paisagem; sem problemas visuais identificados.

Observação: os estados de interação e o movimento reduzido foram conferidos no código; nem todos foram testados individualmente no navegador.

- **Tela estreita (320 × 568 px):** títulos das notícias, textos dos jogos e tabela de classificação verificados; conteúdo organizado, sem rolagem horizontal na página.

## 2. Próximas validações

- Testar a navegação por teclado.
- Verificar a responsividade em diferentes larguras de tela.
- Conferir o contraste e a visibilidade do foco.
- Implementar testes automatizados conforme a evolução do projeto.

## 3. Status

Os testes manuais do menu mobile foram aprovados. As demais validações permanecem pendentes.