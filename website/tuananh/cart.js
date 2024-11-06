/*ADD ITEMS TO CART*/

let carts = document.querySelectorAll(".add-cart");

let products = [
  {
    name: "Pen 1",
    tag: "p1",
    price: 20,
    inCart: 0,
  },
  {
    name: "Pen 2",
    tag: "p2",
    price: 100,
    inCart: 0,
  },
  {
    name: "Pen 3",
    tag: "p15",
    price: 50,
    inCart: 0,
  },
  {
    name: "Pen 4",
    tag: "p11",
    price: 40,
    inCart: 0,
  },
  {
    name: " Pen 5 ",
    tag: "p8",
    price: 235,
    inCart: 0,
  },
  {
    name: "Pen 6 ",
    tag: "p5",
    price: 152,
    inCart: 0,
  },
  {
    name: "Pen 7 ",
    tag: "p24",
    price: 25,
    inCart: 0,
  },
  {
    name: "Pen 8 ",
    tag: "p14",
    price: 15,
    inCart: 0,
  },
];

for (let i = 0; i < carts.length; i++) {
  carts[i].addEventListener("click", () => {
    cartNumbers(products[i]);
    totalCost(products[i]);
  });
}
// Update the event listener loop

// Function to update cart when left arrow is clicked

/*SAVE PRODUCT NUMBERS WHEN REFRESH*/
function onLoadCartNumbers() {
  let productNumbers = localStorage.getItem("cartNumbers");

  if (productNumbers) {
    document.querySelector("span").textContent = productNumbers;
  }
}

/**/

function cartNumbers(product) {
  let productNumbers = localStorage.getItem("cartNumbers");
  productNumbers = parseInt(productNumbers);

  if (productNumbers) {
    localStorage.setItem("cartNumbers", productNumbers + 1);
    document.querySelector("span").textContent = productNumbers + 1;
  } else {
    localStorage.setItem("cartNumbers", 1);
    document.querySelector("span").textContent = 1;
  }

  setItems(product);
}

//sum products on cart
function setItems(product) {
  let cartItems = localStorage.getItem("productsInCart");
  //parse as js not json object
  cartItems = JSON.parse(cartItems);

  //increase purchase of same objects
  if (cartItems != null) {
    if (cartItems[product.tag] == undefined) {
      cartItems = {
        //rest operator to keep what was already in cartItems
        ...cartItems,
        [product.tag]: product,
      };
    }
    cartItems[product.tag].inCart += 1;
  } else {
    //if its first time
    product.inCart = 1;
    cartItems = {
      [product.tag]: product,
    };
  }
  product.inCart = 1;

  //parse as json object not js
  localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}
//calculate total cost
function totalCost(product) {
  //    console.log("the product price is", product.price);
  let cartCost = localStorage.getItem("totalCost");

  console.log("My cart cost is", cartCost);
  console.log(typeof cartCost);

  if (cartCost != null) {
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost", cartCost + product.price);
  } else {
    localStorage.setItem("totalCost", product.price);
  }
}
/////


//display cart products
function displayCart() {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let productContainer = document.querySelector(".products");
  let cartCost = localStorage.getItem("totalCost");
  if (!cartItems || Object.keys(cartItems).length === 0) {
    // If cart is empty, set total cost to 0
    cartCost = 0;
}

  if (cartItems && productContainer) {
    productContainer.innerHTML = "";
    Object.values(cartItems).map((item) => {
      productContainer.innerHTML += `
            <div class="product">
            <button class="fa-solid fa-x delete-item" data-name="${item.name}"></button>
          
                <img src="resources/img/pen/${item.tag}.jpeg">
                <span>${item.name}</span>
            </div>
            <div class="price">€${item.price}</div>
            <div class="quantity">
            <button class="fa-solid fa-arrow-left decrease-quantity" data-tag="${item.tag}" style="cursor:pointer;"></button>

                <span>${item.inCart}</span>
                <button class="fa-solid fa-arrow-right increase-quantity" data-tag="${item.tag}" style="cursor:pointer;"></button>

            
            </div>
            <div class="total">€${item.inCart * item.price}
            </div>
            `;
    });

    productContainer.innerHTML += `
            <div class="basketTotalContainer"
                <h4 class="basketTotalTitle">Basket Total</h4>
                <h4 class="basketTotal">
                    €${cartCost}
                </h4>
                
            </div>
        `;
        let decreaseButtons = document.querySelectorAll('.decrease-quantity');
        let increaseButtons = document.querySelectorAll('.increase-quantity');    
        let deleteButttons = document.querySelectorAll('.delete-item')
        
        decreaseButtons.forEach(button => {
          button.addEventListener('click', () => {
            console.log("Okla")
            decreaseQuantity(button.dataset.tag);
          });
        });
    
        increaseButtons.forEach(button => {
          button.addEventListener('click', () => {
            increaseQuantity(button.dataset.tag);
          });
        });
        deleteButttons.forEach(button => {
            button.addEventListener('click', () => {
                let itemName = button.dataset.name;
                let tag = Object.keys(cartItems).find(key => cartItems[key].name === itemName);
                deleteItem(tag);
            });
        });


        
     
    
        
       

  }
}
// function deleteItem(tag) {
//     let cartItems = JSON.parse(localStorage.getItem("productsInCart"));
//     let cartCost = parseInt(localStorage.getItem("totalCost"));
//     let itemPrice = cartItems[tag].price * cartItems[tag].inCart;

//     // Reset inCart to 0 for the deleted item
//     cartItems[tag].inCart = 0;

//     delete cartItems[tag];
//     localStorage.setItem("productsInCart", JSON.stringify(cartItems));
//     localStorage.setItem("totalCost", cartCost - itemPrice);

//     // Check if cart is empty, if so, set total cost to 0
//     if (Object.keys(cartItems).length === 0) {
//         localStorage.setItem("totalCost", 0);
//     }

//     displayCart();

//     // Update the cart icon with the new total quantity
//     let cartTotal = Object.values(cartItems).reduce((total, item) => total + item.inCart, 0);
//     document.querySelector("span").textContent = cartTotal;
// }
function deleteItem(tag) {
    let cartItems = JSON.parse(localStorage.getItem("productsInCart"));
    let cartCost = parseInt(localStorage.getItem("totalCost"));
    let itemPrice = cartItems[tag].price * cartItems[tag].inCart;

    // Update cartNumbers in localStorage only if it's greater than 0
    let productNumbers = localStorage.getItem("cartNumbers");
    productNumbers = parseInt(productNumbers);
    if (productNumbers > 0) {
        let updatedProductNumbers = productNumbers - cartItems[tag].inCart;
        localStorage.setItem("cartNumbers", updatedProductNumbers);
    }
    
    // Reset inCart to 0 for the deleted item
    cartItems[tag].inCart = 0;

    delete cartItems[tag];
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
    localStorage.setItem("totalCost", cartCost - itemPrice);

    // Check if cart is empty, if so, set total cost to 0
    if (Object.keys(cartItems).length === 0) {
        localStorage.setItem("totalCost", 0);
    }

    displayCart();

    // Update the cart icon with the new total quantity
    let cartTotal = Object.values(cartItems).reduce((total, item) => total + item.inCart, 0);
    document.querySelector("span").textContent = cartTotal;
}



function decreaseQuantity(tag) {
    let cartItems = JSON.parse(localStorage.getItem("productsInCart"));
    let cartCost = parseInt(localStorage.getItem("totalCost"));
  
    if (cartItems[tag].inCart > 1) {
      cartItems[tag].inCart--;
      localStorage.setItem("productsInCart", JSON.stringify(cartItems));
  
      let itemTotal = cartItems[tag].inCart * cartItems[tag].price;
      localStorage.setItem("totalCost", cartCost - cartItems[tag].price);
    }
  
    displayCart();
  }
  
  function increaseQuantity(tag) {
    let cartItems = JSON.parse(localStorage.getItem("productsInCart"));
    let cartCost = parseInt(localStorage.getItem("totalCost"));
  
    cartItems[tag].inCart++;
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
  
    let itemTotal = cartItems[tag].inCart * cartItems[tag].price;
    localStorage.setItem("totalCost", cartCost + cartItems[tag].price);
  
    displayCart();
  }
  ///
  
  
  
  
  onLoadCartNumbers();
  displayCart();

