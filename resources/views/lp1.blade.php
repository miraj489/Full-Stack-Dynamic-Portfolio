<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class ="container">
        <div class="card">
            <h1>Tiger1</h1>
            <p>This is the desvription 1</p>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/036/324/708/small/ai-generated-picture-of-a-tiger-walking-in-the-forest-photo.jpg">
        </div>

        <div class="card">
            <h1>Fish</h1>
            <p>This is the description 2</p>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTN8WVmUpERLwgjOtfkE1YFGGE_hC5XiknBWg&s">
        </div>

        <div class="card">
            <h1>Tiger2</h1>
            <p>This is the description 3</p>
            <img src="https://static.vecteezy.com/system/resources/thumbnails/036/324/708/small/ai-generated-picture-of-a-tiger-walking-in-the-forest-photo.jpg">
        </div>


        <script>
            const card = document.querySelectorAll(".card");
            card.forEach(id=>{
                id.addEventListener("click",()=>{
                    alert(id.children[1].innerText);

            })
            })
        </script>

        
   
</body>
</html>