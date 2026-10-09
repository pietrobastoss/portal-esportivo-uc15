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

});
