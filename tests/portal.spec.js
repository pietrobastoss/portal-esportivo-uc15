
const { test, expect } = require('@playwright/test');

test.describe('Portal Temporada em Jogo', () => {
  test.beforeEach(async ({ page }) => {
    await page.setViewportSize({ width: 375, height: 812 });
    await page.goto('http://localhost/wordpress/');
  });

  test('exibe as principais seções do portal', async ({ page }) => {
    await expect(
      page.getByRole('heading', {
        name: 'O futebol brasileiro em destaque',
      })
    ).toBeVisible();

    await expect(page.locator('#noticias')).toBeVisible();
    await expect(page.locator('#jogos')).toBeVisible();
    await expect(page.locator('#classificacao')).toBeVisible();
    await expect(page.locator('#sugestao')).toBeVisible();
  });

  test('permite abrir e fechar o menu mobile', async ({ page }) => {
    const botaoMenu = page.locator('.menu-toggle');

    await expect(botaoMenu).toBeVisible();
    await expect(botaoMenu).toHaveAttribute('aria-expanded', 'false');

    await botaoMenu.click();
    await expect(botaoMenu).toHaveAttribute('aria-expanded', 'true');

    await botaoMenu.click();
    await expect(botaoMenu).toHaveAttribute('aria-expanded', 'false');
  });

  test('permite avançar os destaques', async ({ page }) => {
    const primeiroDestaque = page.locator('.destaque-slide').nth(0);
    const segundoDestaque = page.locator('.destaque-slide').nth(1);

    await expect(primeiroDestaque).toBeVisible();
    await expect(segundoDestaque).toBeHidden();

    await page.locator('#destaque-proximo').click();

    await expect(primeiroDestaque).toBeHidden();
    await expect(segundoDestaque).toBeVisible();
  });

  test('filtra notícias pela busca', async ({ page }) => {
    const busca = page.locator('#busca-noticias');
    const noticias = page.locator('#noticias .noticia-item');
    const resultado = page.locator('#resultado-busca-noticias');

    await expect(noticias.first()).toBeVisible();

    await busca.fill('termo-impossivel-xyz');

    await expect(noticias.first()).toBeHidden();
    await expect(resultado).toContainText('Nenhuma notícia encontrada');

    await busca.fill('Internacional');

    await expect(noticias.first()).toBeVisible();
  });

  test('valida e confirma o formulário de sugestão', async ({ page }) => {
    const formulario = page.locator('#form-sugestao');
    const nome = page.locator('#nome-sugestao');
    const email = page.locator('#email-sugestao');
    const assunto = page.locator('#assunto-sugestao');
    const mensagem = page.locator('#mensagem-sugestao');
    const resultado = page.locator('#resultado-sugestao');

    await expect(formulario).toBeVisible();

    await nome.fill('Teste Automatizado');
    await email.fill('teste@example.com');
    await assunto.fill('Sugestão de teste');
    await mensagem.fill('Mensagem de teste automatizado.');

    await formulario.locator('button[type="submit"]').click();

    await expect(resultado).toContainText(
      'Sugestão validada com sucesso'
    );
    await expect(nome).toHaveValue('');
  });
});
