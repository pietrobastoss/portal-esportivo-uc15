"use strict";

document.addEventListener("DOMContentLoaded", () => {
const linksMenu = document.querySelectorAll(
'nav a[href^="#"]'
);


const secoes = document.querySelectorAll(
    "main section[id]"
);

const cabecalho = document.querySelector("header");

const botaoMenu = document.querySelector(".menu-toggle");
const menuPrincipal = document.querySelector("#menu-principal");
const textoBotaoMenu = document.querySelector(".menu-toggle-text");
const iconeBotaoMenu = document.querySelector(".menu-toggle-icon");

function fecharMenu() {
    menuPrincipal.classList.remove("menu-aberto");
    botaoMenu.setAttribute("aria-expanded", "false");
    textoBotaoMenu.textContent = "Menu";
    iconeBotaoMenu.textContent = "☰";
}

botaoMenu.addEventListener("click", () => {
    const menuAberto =
        botaoMenu.getAttribute("aria-expanded") === "true";

    if (menuAberto) {
        fecharMenu();
    } else {
        menuPrincipal.classList.add("menu-aberto");
        botaoMenu.setAttribute("aria-expanded", "true");
        textoBotaoMenu.textContent = "Fechar";
        iconeBotaoMenu.textContent = "×";
    }
});

function atualizarMenuAtivo() {
    const limite =
        cabecalho.getBoundingClientRect().bottom + 100;

    const chegouAoFinal =
        window.innerHeight + window.scrollY >=
        document.documentElement.scrollHeight - 2;

    let secaoAtual = secoes[0];

    if (window.scrollY < 50) {
        secaoAtual = document.querySelector("#inicio");
    } else if (chegouAoFinal) {
        secaoAtual = secoes[secoes.length - 1];
    } else {
        secoes.forEach((secao) => {
            if (secao.getBoundingClientRect().top <= limite) {
                secaoAtual = secao;
            }
        });
    }

    linksMenu.forEach((link) => {
        if (
            link.getAttribute("href") === `#${secaoAtual.id}`
        ) {
            link.setAttribute("aria-current", "location");
        } else {
            link.removeAttribute("aria-current");
        }
    });
}

linksMenu.forEach((link) => {
    link.addEventListener("click", (evento) => {
        const destino = link.getAttribute("href");
        const secao = document.querySelector(destino);

        if (secao) {
            evento.preventDefault();

            fecharMenu();

            secao.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
            
            history.replaceState(null, "", destino);
        }
    });
});

window.addEventListener("scroll", atualizarMenuAtivo);
window.addEventListener("resize", atualizarMenuAtivo);


atualizarMenuAtivo();

// Busca e filtro de notícias
const campoBusca = document.querySelector("#busca-noticias");
const resultadoBusca = document.querySelector("#resultado-busca-noticias");
const noticias = document.querySelectorAll("#noticias .noticia-item");

if (campoBusca && resultadoBusca && noticias.length > 0) {
    campoBusca.addEventListener("input", () => {
        const termo = campoBusca.value
            .trim()
            .toLocaleLowerCase("pt-BR");

        let quantidadeVisivel = 0;

        noticias.forEach((noticia) => {
            const texto = noticia.textContent.toLocaleLowerCase("pt-BR");
            const corresponde = texto.includes(termo);

            noticia.hidden = !corresponde;

            if (corresponde) {
                quantidadeVisivel++;
            }
        });

        if (termo === "") {
            resultadoBusca.textContent =
                `Exibindo ${quantidadeVisivel} notícias mais recentes.`;
        } else if (quantidadeVisivel === 0) {
            resultadoBusca.textContent =
                "Nenhuma notícia encontrada para essa busca.";
        } else {
            resultadoBusca.textContent =
                `${quantidadeVisivel} notícia(s) encontrada(s).`;
        }
    });
}

 // Galeria de destaques
 const trilhoDestaques = document.querySelector("#trilho-destaques");
 const slidesDestaques = document.querySelectorAll(".destaque-slide");
 const botaoAnterior = document.querySelector("#destaque-anterior");
 const botaoProximo = document.querySelector("#destaque-proximo");
 const estadoDestaques = document.querySelector("#estado-destaques");
 
 if (
     trilhoDestaques &&
     slidesDestaques.length > 0 &&
     botaoAnterior &&
     botaoProximo &&
     estadoDestaques
 ) {
     let indiceDestaque = 0;
     let inicioArraste = null;
 
     function mostrarDestaque(indice) {
         indiceDestaque =
             (indice + slidesDestaques.length) % slidesDestaques.length;
 
         slidesDestaques.forEach((slide, i) => {
             slide.hidden = i !== indiceDestaque;
         });
 
         estadoDestaques.textContent =
             `Destaque ${indiceDestaque + 1} de ${slidesDestaques.length}`;
     }
 
     botaoAnterior.addEventListener("click", () => {
         mostrarDestaque(indiceDestaque - 1);
     });
 
     botaoProximo.addEventListener("click", () => {
         mostrarDestaque(indiceDestaque + 1);
     });
 
     trilhoDestaques.addEventListener("pointerdown", (evento) => {
         inicioArraste = evento.clientX;
     });
 
     trilhoDestaques.addEventListener("pointerup", (evento) => {
         if (inicioArraste === null) {
             return;
         }
 
         const distancia = evento.clientX - inicioArraste;
 
         if (distancia > 50) {
             mostrarDestaque(indiceDestaque - 1);
         } else if (distancia < -50) {
             mostrarDestaque(indiceDestaque + 1);
         }
 
         inicioArraste = null;
     });
 
     trilhoDestaques.addEventListener("pointercancel", () => {
         inicioArraste = null;
     });
 
     mostrarDestaque(0);
 }

 
    // Validação do formulário de sugestão de pauta
    const formularioSugestao = document.querySelector("#form-sugestao");
    const resultadoSugestao = document.querySelector("#resultado-sugestao");

    if (formularioSugestao && resultadoSugestao) {
        formularioSugestao.addEventListener("submit", (evento) => {
            evento.preventDefault();

            if (!formularioSugestao.checkValidity()) {
                formularioSugestao.reportValidity();
                return;
            }

            resultadoSugestao.textContent =
                "Sugestão validada com sucesso! Este formulário é demonstrativo: nenhum dado foi enviado ou armazenado.";

            formularioSugestao.reset();
        });
    }

 
});
