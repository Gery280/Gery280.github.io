document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".btn.btn-primary").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        var template = document.getElementById("list-template");
        var total = itemList.childElementCount + 1;
        var clone = template.content.cloneNode(true);
        clone.querySelector("[data-id='ID']").textContent = `${total}`;
        clone.querySelector("[data-id='Name']").textContent = "Mechanical Morty";
        clone.querySelector("[data-id='Status']").textContent = True;
        clone.querySelector("[data-id='Species']").textContent = "Robot"
        clone.querySelector("[data-id='Image']")
        itemList.appendChild(clone);
    });
    document.querySelector(".btn.btn-light").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        itemList.replaceChildren();
    });
});