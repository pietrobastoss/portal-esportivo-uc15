# Plano de testes

## 1. Testes manuais realizados

### Menu mobile

- **Abrir o menu:** aprovado.
- **Fechar o menu:** aprovado.
- **Atualização do texto e do ícone:** aprovada.
- **Navegação até a seção selecionada:** aprovada.
- **Fechamento do menu após selecionar uma opção:** aprovado.
- **Destaque da seção atual:** verificado no navegador em tela mobile.

### CSS e responsividade

- **Estados de interação:** regras de `hover`, `active` e `focus-visible` identificadas no CSS.
- **Movimento reduzido:** regra `prefers-reduced-motion` identificada no CSS.
- **Tabela responsiva:** aprovada em telas de 320 px, 375 px, 768 px e 1024 px, além de larguras inferiores a 320 px.
- **Responsividade geral:** testada nas larguras de 320 px, 375 px, 768 px e 1024 px.
- **Container Queries:** regra `@container (min-width: 25rem)` implementada nos cartões; comportamento visual conferido no navegador.
- **Adaptação dos cartões:** comportamento verificado no navegador em larguras de 768 px e 1024 px.
- **Zoom de 200%:** conteúdo legível e cabeçalho deixa de ficar fixo quando a altura disponível da janela é reduzida.
- **Orientação da tela:** conteúdo, menu, notícias, jogos e tabela verificados em retrato e paisagem, sem problemas visuais identificados.
- **Tela estreita (320 × 568 px):** títulos das notícias, textos dos jogos e tabela de classificação verificados; conteúdo organizado, sem rolagem horizontal na página.

### Acessibilidade

- **Navegação por teclado:** links e elementos interativos acessados com `Tab` e `Shift + Tab`; destaque visual do foco identificado e links testados com `Enter`.
- **Legibilidade visual:** textos e links avaliados visualmente; aparência considerada legível. O contraste ainda precisa ser medido com uma ferramenta específica.

**Observação:** os estados de interação e o movimento reduzido foram conferidos no código; nem todos foram testados individualmente no navegador.

## 2. Validações pendentes

- Medir o contraste dos textos e componentes com uma ferramenta de acessibilidade.
- Testar individualmente os estados de interação e o comportamento de movimento reduzido no navegador.
- Implementar e executar testes automatizados conforme a evolução do projeto.
- Realizar testes em dispositivos físicos, quando possível.

## 3. Status

Os testes manuais de responsividade, menu mobile, orientação da tela, zoom de 200% e navegação por teclado foram realizados e aprovados conforme as verificações descritas.

As validações de contraste, os testes individuais dos estados de interação e movimento reduzido, os testes automatizados e os testes em dispositivos físicos permanecem pendentes.
