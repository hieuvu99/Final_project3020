<!DOCTYPE html>

<!-- popcorn3.html 
     This describes the popcorn sales form
     -->

<html lang = "en">

  <head>
    
    <title> Order</title>
    <meta charset = "utf-8" />
    <style type = "text/css">
     td, tr, th, table {border: thin solid black;
    margin-left: 20%;
    width: 60%;
    height: 200%;
    text-align: center;
    }
    h1, h5 {
        margin-left: 20%;
    }
      
    </style>
     <link rel="stylesheet" href="styledocument.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' media='screen' href='styledocument.css'>

</head>
    <body>
       
        <div>
            <nav class="navbar navbar-dark bg-dark navbar1">
              <ul class="nav front">
                <li class="nav-item">
                  <a class="nav-link active" href="ProductPage.html"><img src="Vsmartlogo.png" alt="HTML Icon" style="margin-left:-0.3cm;"></a>
                </li>
                <li class="nav-item nav-content">
                  <a class="nav-link" href="ProductPage.html">SmartPhone</a>
                </li>
                <li class="nav-item nav-content">
                  <a class="nav-link" href="https://www.vsmart.net/en/tv-55ke8500">TV</a>
                </li>
                <li class="nav-item nav-content">
                  <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Support</a>
                </li>
              </ul>
              
               
              </ul>
            </nav>

        </div>
    </br></br></br>
            <h1> Order :</h1>
</br>
            <table>
            <?php

            if (isset( $_GET['color']) && isset($_GET['capacity'])){
                $color = $_GET['color'];
                $capacity = $_GET['capacity'];
                print("<tr><th>Vsmart</th>");
                print("<td>Color:$color </td>");
                print("<td>$capacity </td>
                </tr>");
            }
            else
            print("<h5>   Your cart is empty </h5>");
        ?>
            </table>
        <?php

        ?>
    </body>
    <script>

    </script>