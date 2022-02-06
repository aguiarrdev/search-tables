class Tables
{
    constructor() {
        this.handle_actions();
    }

    handle_actions() {
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
}

document.addEventListener("DOMContentLoaded", () => {
    new Tables;
});