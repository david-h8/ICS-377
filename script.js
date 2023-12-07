
function searchMenu() {
    // Get input value
    var input, filter, menu, menuItem, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    menu = document.getElementById("menu");
    menuItem = menu.getElementsByClassName("menu-item");

    // Loop through all menu items, and hide those that don't match the search query
    for (i = 0; i < menuItem.length; i++) {
        txtValue = menuItem[i].innerText || menuItem[i].textContent;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            menuItem[i].style.display = "";
        } else {
            menuItem[i].style.display = "none";
        }
    }
}
