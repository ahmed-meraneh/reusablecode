import { slideUp, slideUpAndRemove } from "../functions/animations";

export class Alert extends HTMLElement {
    constructor() {
        super();
    }

    connectedCallback() {
        // On recupère l'attribut type
        this.type = this.getAttribute("type");

        // On recupère le texte à l'interieur
        const text = this.innerHTML;

        // On ajoute les class d'alert
        this.classList.add("alert");
        this.classList.add(`alert-${this.type}`);

        // On definit la syntaxe de l'element
        this.innerHTML = `<svg>
            <use xlink:href="/sprite.svg#${this.icon}"></use>
        </svg>
        <div>
            ${text}
        </div>
        <a class="alert-close">
            <svg>
                <use xlink:href="/sprite.svg#cross"></use>
            </svg>
        </a>
        `;

        // On supprime l'element lorsque le button x est cliqué
        this.querySelector(".alert-close").addEventListener("click", (e) => {
            e.preventDefault();
            this.close();
        });
    }

    close(element = this) {
        element.classList.add("out");
        window.setTimeout(async () => {
            await slideUp(element);
            element.parentElement.removeChild(element);
        }, 500);
    }

    get icon() {
        if (this.type === "danger") {
            return "warning";
        } else if (this.type === "success") {
            return "check";
        }
        return this.type;
    }
}

export class FloatingAlert extends Alert {
    connectedCallback() {
        super.connectedCallback();
        this.classList.add("is-floating");
        const duration = this.getAttribute("duration");
        let progressBar = "";
        if (duration !== null) {
            progressBar = `<div class="alert__progress" style="animation-duration: ${duration}s">`;
            window.setTimeout(async () => {
                this.classList.add("out");
                window.setTimeout(async () => {
                    await slideUp(this);
                    this.parentElement.removeChild(this);
                }, 500);
            }, duration * 1000);
        }

        super.innerHTML = super.innerHTML + progressBar;
    }
}
