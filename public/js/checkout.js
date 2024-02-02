function getCurrentUser() {
    const userData = document.getElementById('app').dataset.user;
  return userData;

}
function getCartData() {
    const user = getCurrentUser();
    const storageKey = user ? 'user_cart_' + user.id : 'cart';
    return JSON.parse(localStorage.getItem(storageKey)) || [];
}

function setCartData(cartData) {
    const user = getCurrentUser();
    const storageKey = user ? 'user_cart_' + user.id : 'cart';

    if (cartData.length === 0) {
        localStorage.removeItem(storageKey);
    } else {
        localStorage.setItem(storageKey, JSON.stringify(cartData));
    }
}

function displayCartData() {

    const cartData = getCartData();
    console.log(cartData);
    const cartItemsContainer = $('#cartItemsContainer');
    const cartTotalAmount = $('#cartTotalAmount');
    const cartTotal = $('#total');
    
    cartItemsContainer.empty(); 
    const uniqueProductIds = new Set(cartData.map(item => item.id));
    console.log(uniqueProductIds);
    const cartCounter = uniqueProductIds.size;
    $('#cartCounter').text(cartCounter);

    cartData.forEach((item, index) => {
        const cartItemHtml = `
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div>
                                <img src="${item.images}" class="img-fluid rounded-3" alt="Shopping item" style="width: 80px;">
                            </div>
                            <div class="ms-3 ml-2">
                                <h5>${item.name}</h5>
                                <p class="small mb-0">256GB, Navy Blue</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-center">
                            <div class="d-flex flex-row" style="width: 120px;">
                                <button class="btn btn-outline-secondary btn-sm decrement-button" data-index="${index}">-</button>
                                <h5 class="fw-normal mb-0">&nbsp;${item.quantity}&nbsp;</h5>
                                <button class="btn btn-outline-secondary btn-sm increment-button" data-index="${index}">+</button>
                            </div>
                            <div style="width: 80px;">
                                <h5 class="mb-0">${item.price}</h5>
                            </div>
                            <a href="#!" style="color: #cecece;"><i class="fas fa-trash-alt"></i></a>
                            <button class="btn btn-danger btn-sm delete-button" data-index="${index}">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        cartItemsContainer.append(cartItemHtml);
    });

    const totalAmount = cartData.reduce((total, item) => total + Number(item.subtotal), 0);
    const total = totalAmount + 4.95 + 68.75;
    const formattedTotal = `$${total.toFixed(2)}`;
    cartTotalAmount.text(totalAmount);
    cartTotal.text(formattedTotal);

    $('.delete-button').on('click', function () {
        const index = $(this).data('index');
        deleteCartItem(index);
    });
    function deleteCartItem(index) {
        const cartTotalAmount = $('#cartTotalAmount');
        const cartTotal = $('#total');
        const cart = getCartData();
        
        const uniqueProductIds = new Set(cart.map(item => item.id));
        
        const cartCounter = uniqueProductIds.size;
        $('#cartCounter').text(cartCounter);

        // Remove the item at the specified index
        cart.splice(index, 1);

      
        setCartData(cart);


        displayCartData();
        
        
    }

$(document).ready(function() {
    $('.decrement-button').on('click', function() {
        const index = $(this).data('index');
        updateQuantity(index, -1);
    });

    $('.increment-button').on('click', function() {
        const index = $(this).data('index');
        updateQuantity(index, 1);
    });
});

    function updateQuantity(index, change) {
        console.log('Updating quantity:', index, change);
    const cartData = getCartData();
    const currentQuantity = cartData[index].quantity;
    console.log('Current quantity:', currentQuantity);

    const newQuantity = Math.max(1, currentQuantity + change);
   
    cartData[index].quantity = newQuantity;
    cartData[index].subtotal = newQuantity * cartData[index].price;

  
    setCartData(cartData);

    displayCartData();
}

   

    // ... (Your other event listeners and functions)
}

// ... (Your other functions)

$(document).ready(function() {
    displayCartData();
});


var cardDrop = document.getElementById('card-dropdown');
var activeDropdown;
cardDrop.addEventListener('click',function(){
  var node;
  for (var i = 0; i < this.childNodes.length-1; i++)
    node = this.childNodes[i];
    if (node.className === 'dropdown-select') {
      node.classList.add('visible');
       activeDropdown = node; 
    };
})

window.onclick = function(e) {
  console.log(e.target.tagName)
  console.log('dropdown');
  console.log(activeDropdown)
  if (e.target.tagName === 'LI' && activeDropdown){
    if (e.target.innerHTML === 'Master Card') {
      document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/2vbqk5lcpi7hjoc/MasterCard_Logo.svg.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Master Card';
    }
    else if (e.target.innerHTML === 'American Express') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/f5hyn6u05ktql8d/amex-icon-6902.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'American Express';      
    }
    else if (e.target.innerHTML === 'Visa') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Visa';
    }
  }
  else if (e.target.className !== 'dropdown-btn' && activeDropdown) {
    activeDropdown.classList.remove('visible');
    activeDropdown = null;
  }
}

// ... (Your other code)
