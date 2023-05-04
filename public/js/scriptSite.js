const videoElement = document.getElementById("intro");
videoElement.addEventListener("ended", () => {
    const linkElement = document.createElement("a");
    linkElement = document.createElement("a");
    linkElement.setAttribute("href", "http://127.0.0.1:8000/articles_all");
    linkElement.innerHTML = "Lien vers les services proposés";
    videoElement.insertAdjacentElement("afterend", linkElement);
})

// filtrer les utilisateurs du tableau des commandes client :
function filtrerTableau() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("nom-utilisateur");
    filter = input.value.toUpperCase();
    table = document.getElementById("table-utilisateurs");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; // Première colonne contient le nom d'utilisateur
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

