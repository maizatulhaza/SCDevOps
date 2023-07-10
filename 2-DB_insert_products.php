<?php
include 'config.php';

if (!$conn)
{
die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($conn, "db_indigo");

/*insert records of data into table Products */ 
//Tudung People page
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T1', 'Aisya in Chili', '39.50')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T2', 'Aisya in Lemon', '39.50')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T3', 'Aisya Curve in Pumpkin', '39.50')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T4', 'Aisya Curve in Primrose', '39.50')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T5', 'Art Nouveau (SQ) in Austere', '99')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T6', 'Art Nouveau (SQ) in Revere', '99')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T7', 'Maysaa in Carrot', '24')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T8', 'Maysaa in Taffy', '24')");

//Duck page
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D1', 'The Palestine dUCk Shawl in Black', '300')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D2', 'The Modern Lines dUCk Shawl - Heyday', '200')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D3', 'Textured Georgette Shawl with Nanotechnology - Bahulu', '130')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D4', 'Textured Georgette Shawl with Nanotechnology - Apam Balik', '130')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D5', 'The Anyaman dUCk Square Scarf - Saltwater', '200')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D6', 'The Anyaman dUCk Square Scarf - Sugarcane', '200')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D7', 'Frappe Blossom Square Scarf with nanotechnology in Purple Haze', '130')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D8', 'Frappe Blossom Square Scarf with nanotechnology in Berry Blue', '130')");

//Calaqisya page
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C1', 'Daniah Square Flint Purple', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C2', 'Daniah Square Beaver Fur', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C3', 'Daniah Square Apple Butter', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C4', 'Daniah Square Fawn', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C5', 'Daniah Square Praline', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C6', 'Daniah Square Pale Mauve', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C7', 'Daniah Square Black', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C8', 'Daniah Square Shadow Grey', '59')");

//Naelofar page
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N1', 'Qarina Deep Powder Blue', '99')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N2', 'Qarina Light Dusty Mushroom', '99')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N3', 'Tiara Black', '55.30')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N4', 'Tiara Green Pine', '55.30')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N5', 'Milda Shawl Dark Grey-Blue', '41.30')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N6', 'Milda Shawl Dark Red', '41.30')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N7', 'Milda Shawl Smokey Light Brown', '41.30')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N8', 'Milda Shawl Soft Brown', '41.30')");

//New Arrival page
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T9', 'Wayfarer Impi in Erat', '99')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T10', 'Wayfarer Impi in Kunjung', '99')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('T11', 'Wayfarer Impi in Salam', '99')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N9', 'Linia in Dark Powder Blue', '65')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N10', 'Linia in Dark Dusty Rose Mauve', '65')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('N11', 'Linia in Dark Fair Khaki', '65')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C9', 'Danish square in Lotus', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C10', 'Danish Square in Fragrant Lilac', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('C11', 'Danish square in Dark Black', '59')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D9', 'The Anyaman in Dragonfruit', '200')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D10', 'The Anyaman in Pear', '200')");
mysqli_query($conn,"INSERT INTO Product (productID, pName, pPrice)
VALUES ('D11', 'The Anyaman in Blue Pea', '200')");

echo "<br />Products data inserted";

mysqli_close($conn);
?>