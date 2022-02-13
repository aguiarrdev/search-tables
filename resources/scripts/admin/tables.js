class Tables
{
    constructor() {
        this.handleActions();
        this.shortStrings();
        this.handleCopy();
    }

    handleActions() {
        const btnList = document.querySelectorAll(".btn-action");

        btnList.forEach(btn => {
            if (btn.getAttribute("data-table")) {
                let table = btn.getAttribute("data-table");

                btn.addEventListener("click", () => {
                    window.location.href = `${window.location.href}&table=${table}`;
                });
            }
        });
    }

    shortStrings() {

        const tds = document.querySelectorAll(".st-td");

        tds.forEach(td => {

            const hidden = document.createElement("input");
            hidden.setAttribute("type", "hidden");
            hidden.value = td.innerHTML;

            const i = document.createElement("i");
            i.classList.add("fas");
            i.classList.add("fa-copy");


            let arr = Array.from(td.innerHTML);
            let text = "";
            
            if (arr.length > 50 && ! td.classList.contains("st-td-actions")) {
                arr.forEach(element => {
                    if (text.length < 50) {
                        text += element;
                    }
                });
                
                td.innerHTML = `${text}...`;
            }

            td.appendChild(hidden);

            if (!td.classList.contains("st-td-actions")) {
                td.appendChild(i);
            }
        } );
    }

    handleCopy() {
        const tds = document.querySelectorAll(".st-td");
        tds.forEach(td => {
            const i = td.querySelector("i");

            if (i) {
                i.addEventListener("click", () => {
                    this.copy(td);
                });
            }
        });
    }

    copy(element) {

        const hidden = element.querySelector("input");
        const i = element.querySelector("i");

        const temp = document.createElement("input");
        temp.style = "position: absolute; left: -1000px; top: -1000px";
        temp.value = hidden.value;

        document.body.appendChild(temp);
        temp.select();

        document.execCommand('copy');

        const text = element.innerText;

        element.innerText = 'The text was copied!';
    
        setTimeout(() => {
            element.innerHTML = text;
            element.appendChild(hidden);
            element.appendChild(i);
        }, 1000);


        document.body.removeChild(temp);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    new Tables;
});