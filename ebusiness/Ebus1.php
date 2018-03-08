<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Select Product</title>
        
          <link rel="stylesheet" href="ebus.css" type="text/css"/>
          <link href="https://fonts.googleapis.com/css?family=Leckerli+One" rel="stylesheet">
          <link rel="icon" href="https://www.cubsucc.com/contentFiles/staffProfileImages/CUBSLogoColCMYK16.png">
           <meta charset= "utf-8">
       
       
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_cal.js"></script>
        
        
    </head>
    
    <body>
        
          <ul>
         
               <li><a href="../homepage.html">Homepage</a></li>
               <li><a href="../cv_page1.html">CV</a></li>
               <li><a href="../interests/interests-menu.html">Interests</a></li>
               <li><a href="skysales.html">Sky Sales</a></li>
               <li><a href="info.html">About Cloud</a></li>
                <li><a href="Ebus1.php">Products</a></li>
               
     </ul>
        
        <div class="main">
        
        <h4>Select a Product</h4>
        
        <br>
        
        <form method="POST" action="Ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onclick="disablebtnProceed()"/>
                salesforce @ $100
            </label>
            
            <br>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onclick="disablebtnProceed()"/>
                cloud9 @ 200$
            </label>
            
            
            <br>
            
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ 300$
            </label>
            
            <br>
            
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onclick="disablebtnProceed()"/>
                gmail @ 400$
            </label>
            
            
            <br>
            <br>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
             
             <br>
             <br>
             
             <label for="discount">
                 Discount
                 <input type="text" id="discount" name="discount" value="0.00" readonly/>
             </label>
             
             <br>
             <br>
             
             <label for="vat">
                 VAT
                 <input type="text" id="vat" name="vat" value="0.00" readonly/>
             </label>
             
             <br>
             <br>
             
             <label for="total">
                 Total
                 <input type="text" id="total" name="total" value="0.00" readonly/>
             </label>
             
        <br>
        <br>
        <br>
        <br>
        <br>
        
            <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
             
        </form>
        
       <br/>
       
        <button id="btn" onclick="calcSub()">Calculate Cost</button>
        <a role="button" id="clear" href="Ebus1.php">Clear Choice</a>
        <a href="skysales.html" alt="back" class="back">
          <img src= "../images/back.png" height=75 width=75></a>
       </div>
        </body>
    
    
</html>