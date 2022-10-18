<?php
// Some simple products with reference
echo "<a href='/HideURLCategory_Teapot/1'>Category 1 </br> </a>";
echo "<a href='/HideURLCategory_Teapot/2'>Category 2 </br> </a>";
echo "<a href='/HideURLCategory_Teapot/3'>Category 3 </br> </a>";

// Show some information about selected Category
if (isset($_GET['category_ID'])){
    echo ('List of products in category: ' .$_GET['category_ID']);

    switch ($_GET['category_ID']) {
        case 1:
            echo "<a  href='/HideURLCategory_Teapot/ProductID/1/1'> </br> Product 1 in category 1 </a>";
            echo "<a  href='/HideURLCategory_Teapot/ProductID/1/2'> </br> Product 2 in category 1 </a>";
            echo "<a  href='/HideURLCategory_Teapot/ProductID/1/3'> </br> Product 3 in category 1 </a>";
            break;
        case 2:
            echo "<a href='/HideURLCategory_Teapot/ProductID/2/1'> </br> Product 1 in category 2 </a>";
            echo "<a href='/HideURLCategory_Teapot/ProductID/2/2'> </br> Product 2 in category 2 </a>";
            break;
        case 3:
            echo "<a href='/HideURLCategory_Teapot/ProductID/3/1'> </br> Product 1 in category 3 </a>";
            echo "<a href='/HideURLCategory_Teapot/ProductID/3/2'> </br> Product 2 in category 3 </a>";
            break;
        default: echo " Category doesn't exist...";
        return;
    }

    // Show some information about selected Product
    if (isset($_GET['prodct_ID'])){
        echo "This product belongs to the category number: " .$_GET['category_ID'];
        echo " with ID:  " .$_GET['prodct_ID'];
    }
}

