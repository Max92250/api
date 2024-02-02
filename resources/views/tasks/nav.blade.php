<!DOCTYPE html>
<html lang="en">
<head>
   
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/check.css')}}" rel="stylesheet">
    <title>checkout Cart</title>
</head>
<body>

    <div class='container' id="app"  data-user="{{ Auth::user() }}">
      <div class='window'>
        <div class='order-info'>
          <div class='order-info-content'>
            <h2>Order Summary</h2>
                    <div class='line'></div>
           <div id="cartItemsContainer"></div>
            <div class='line'></div>
            <div class='total'>
              <span style='float:left;'>
                <div class='thin dense'>VAT 19%</div>
                <div class='thin dense'>Delivery</div>
                TOTAL
              </span>
              <span style='float:right; text-align:right;'>
                <div class='thin dense'>$68.75</div>
                <div class='thin dense'>$4.95</div>
                <p class="mb-2" id="total">$</p>
              </span>
            </div>
           
    </div>
    </div>
            <div class='credit-info'>
              <div class='credit-info-content'>
                <table class='half-input-table'>
                  <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                    <div class='dropdown-select'>
                    <ul>
                      <li>Master Card</li>
                      <li>American Express</li>
                      </ul></div>
                    </div>
                   </td></tr>
                </table>
                <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
                Card Number
                <input class='input-field'></input>
                Card Holder
                <input class='input-field'></input>
                <table class='half-input-table'>
                  <tr>
                    <td> Expires
                      <input class='input-field'></input>
                    </td>
                    <td>CVC
                      <input class='input-field'></input>
                    </td>
                  </tr>
                </table>
                <button class='pay-btn'>Checkout</button>
    
              </div>
    
            </div>
          </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src={{asset('js/cart.js')}}></script>
    
</body>
</html>
