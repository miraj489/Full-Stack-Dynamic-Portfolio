console.log(document.getElementById("test").innerText);

tags = documunt.querySelector(".navbar").children;
    for (i= 0; i<tags.length; i++)
    {
        tags[i].addEventlistener('click', function(About){
            alert(event.target.innerText);
        });
    }


document.querySelectorAll(".title").forEach((abc) => {
    abc.onclick = function() {
        prompt(this.innerText)
    };
});