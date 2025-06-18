const testElement = document.getElementById("test");
if (testElement) {
    console.log(testElement.innerText);
}


const navItems = document.querySelector(".navbar ul")?.children || [];
for (let i = 0; i < navItems.length; i++) {
    navItems[i].addEventListener('click', function (event) {
        alert(event.target.innerText);
    });
}


document.querySelectorAll(".title").forEach((abc) => {
    abc.onclick = function () {
        this.innerHTML = `
        <h3>
          <a href="#">This is JS</a>
          <p>This is assigned dynamically</p>
        </h3>
        `;

        this.style.color = "red";
        this.style.backgroundColor = "#f0f0f0";
        this.style.borderRadius = "10px";
        this.style.padding = "20px";


        this.classlist.add("card");

        avatar = document.getElementById("avatar");
        avatar.src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQtbiwGu-luk3449VXHVLC6ja1WTujofLJvQ&s";
        avatar.classlist.add("card");
    };
});
