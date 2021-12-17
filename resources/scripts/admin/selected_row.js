document.addEventListener("DOMContentLoaded", () => {
    var rows = document.querySelectorAll(".table-row-tables");
    rows.forEach(row => {
        row.addEventListener("click", () => {
            let tableName = row.getAttribute("data-table");
            location = `${location.href + "&row=" + tableName}`;
        })
    });
})