function addToCart(img1,img2,productName, price) {
  let cart = JSON.parse(localStorage.getItem('cart')) || [];
  cart.push({ img_1:img1, img_2:img2, name: productName, price: price });
  localStorage.setItem('cart', JSON.stringify(cart));
  alert(productName + " added to cart!");
  location.href = "http://localhost/TE_IT/cart.php";
}