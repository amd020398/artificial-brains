<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Donor</title>
</head>
<body style="background-image:url('./cover.png');background-size: cover;
background-color: #f2f2f0;
background-color: #f88f3a;
background-repeat: no-repeat;
background-position: center;
background-attachment: fixed;">

    <nav>
        <div class="logo">
            <h1 style="font-family: sans-serif;
            font-size: 22px; font-weight: 300; color: rgb(255, 255, 255);">FoodForGood</h1>
        </div>
    </nav>

    <!-- /* # Type - Selection 
# Storage - Selection
# Item - Selection
# Period - Integer  & Selection(Period)
# Details - Char
# Quantity - Integer */ -->

    <div class="container">
        <div class="form" style="background-color: rgba(216, 196, 196, 0.6);">
            <h2 style="text-align: center; margin-bottom: 20px; margin-top: 20px;">Donation Form</h2>
            <form action="value.php" method="get">
                <div class="type">
                    <td class="td">
                        <tr>Item Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;:&nbsp;</tr>
                        <tr> <Select name="type">
                            <option >Select</option>
                            <option value="Beverage">Beverage</option>
                            <option value=" Dough"> Dough</option>
                            <option value=" Pasta"> Pasta</option>
                            <option value=" Pesto"> Pesto</option>
                            <option value="Soy">Soy</option>
                            <option value="Fish">Fish</option>
                        

                                
                       <!--- Fish
                        Shellfish
                        Smoked Fish
                        Fresh meat
                        processed meat
                        Fresh poultry
                        fruit
                        vegetable
                        frozen-items
                        deli-item
                        shelf-item
                        baking
                        condiments
                        cookies
                        crackers
                        bakery-->
                            </Select>
                        </tr>
                        </td>
                </div>
                <div class="storage">
                    <td class="td">
                        <tr>Storage Type&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:&nbsp;</tr>
                        <tr> <Select name="storage">
                            <option>Select</option>
                            <option value="frozen" >Frozen</option>
                            <option value="Refrigerated" >Refrigerated</option>
                            <option value="Thawed" >Thawed</option>
                            <option value="Shelf" >Shelf</option>
                            </Select>
                        </tr>
                        </td>
                </div>
                <div class="Item">
                    <td class="td">
                        <tr>Item &nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;:&nbsp; </tr>
                        <tr> <input type="text" name="item" placeholder="Enter the Items">
                        </tr>
                        </td>
                </div>
                <div class="period">
                    <td class="td">
                        <tr>Day Of Expiry &nbsp; :&nbsp; </tr>
                        <tr> <input type="text" name="period"  placeholder="Enter the period">
                        </tr>
                        </td>
                </div>
                <div class="Details">
                    <td class="td">
                        <tr>Item Details &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </tr>
                        <tr> <input type="text" name="details" placeholder=" Enter the Dteails">
                        </tr>
                        </td>
                </div>
                <div class="Quantity">
                    <td class="td">
                        <tr>Quantity  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </tr>
                        <tr> <input type="number" name="quantity" placeholder="Enter the quantity">
                        </tr>
                        </td>
                </div>

                <div style="margin-left: 80px;" class="submit">
                    <input  type="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>