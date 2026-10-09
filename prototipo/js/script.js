
"use strict";

document.addEventListener("DOMContentLoaded", () => {
    const linksMenu = document.querySelectorAll('nav a[href^="#"]');
    const secoes = document.querySelectorAll("main section[id]");
    const cabecalho = document.querySelector("header");

    function atualizarMenuAtivo() {
        const limite = cabecalho.getBoundingClientRect().bottom + 100;
        const chegouAoFinal =
            window.innerHeight + window.scrollY >=
            document.documentElement.scrollHeight - 2;

            let secaoAtual = window.scrollY < 50
            ? document.querySelector("#inicio")
            : secoes[0];

                    
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
            if (link.getAttribute("href") === `#${secaoAtual.id}`) {
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