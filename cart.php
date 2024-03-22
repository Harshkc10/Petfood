
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #cartItems {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
        }

        .card {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-bottom: 1rem;
        }

        .img_container,
        .img_container img {
            width: 100%;
        }

        .card-body h5,
        .card-body p {
            text-align: center;
        }

        .card button {
            width: 100%;
            padding: 5px;
            background-color: red;
            color: white;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="cartItems"></div>
    <script>
        let cartItems = JSON.parse(localStorage.getItem('cart'));

        if (cartItems && cartItems.length > 0) {
            let cartContainer = document.getElementById('cartItems');
            cartItems.forEach(function (item, index) {
                let card = document.createElement('div');
                card.classList.add('col-sm-4');
                let cardContent = `
            <div class="card" style="width: 18rem; margin: 10px;">
                <div class='img_container'>
                    <img src="./assets/images/${item.img_1}"/>
                </div>
                <div class="card-body">
                    <h5 class="card-title">${item.name}</h5>
                    <p class="card-text">Price: Rs.${item.price}</p>
                </div>
                <button onclick='deleteItem(${index})'>Delete</button>
            </div>
        `;
                card.innerHTML = cardContent;
                cartContainer.appendChild(card);
            });
        } else {
            let cartContainer = document.getElementById('cartItems');
            let message = document.createElement('div');
            message.classList.add('col');
            message.textContent = "Your cart is empty.";
            cartContainer.appendChild(message);
        }
        function deleteItem(index) {
            let cartItems = JSON.parse(localStorage.getItem('cart'));
            cartItems.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cartItems));
            location.reload(); // Refresh the page to reflect the updated cart
        }
    </script>
    <script src="./assets/js/cart.js"></script>
</body>

</html>