<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Paiement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .transaction-card {
            background-color: #ffffff;
            border-radius: 16px;
            padding: 20px;
            max-width: 900px;
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
        }
        .transaction-card img {
            max-width: 150px;
            height:100%;
            border-radius: 8px;
        }
        .product-image {
            flex: 1;
        }
        .product-details {
            flex: 2;
            margin-left: 20px;
            margin-right: 20px;
        }
        .product-details h2 {
            color: #333333;
            margin-bottom: 10px;
        }
        .product-details p {
            color: #666666;
            margin: 5px 0;
        }
        .product-details .back-to-catalog {
            text-decoration: none;
            color: #999;
        }
        .product-details .product-description {
            margin-top: 10px;
        }
        .product-info {
            flex: 1;
            text-align: right;
        }
        .product-info .price {
            font-size: 24px;
            color: #333333;
        }
        .product-info .price .sale {
            font-size: 16px;
            color: #ff6f61;
            margin-left: 10px;
            vertical-align: middle;
        }
        .product-info .stock {
            color: #333333;
            margin: 10px 0;
        }
        .pay-button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 70px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none; /* Pour enlever le soulignage de texte */
            display: block;
            margin: 10px 0;
        }
        .pay-button:hover {
            background-color: #0056b3;
        }
        .social-share {
            display: flex;
            justify-content: space-between;
            width: 120px;
            margin-top: 10px;
            margin-left: auto;
        }
        .social-share a {
            text-decoration: none;
        }
        .social-share img {
            width: 24px;
            height: 24px;
        }
    </style>
</head>
<body>
    <div class="transaction-card">
        <div class="product-image">
            <img src="img/buyy.JFIF" alt="Produit">
        </div>
        <div class="product-details">
            <h2>Sneakers</h2>
            <p><a href="#" class="back-to-catalog">Back to catalog</a></p>
            <div class="product-description">
                <p>Durable and breathable upper supports your foot during movements. Additional cushioning provides a bouncy push. The heel lock system adds stability.</p>
            </div>
        </div>
        <div class="product-info">
            <p class="price">$20.00 <span class="sale">SALE</span></p>
            <p class="stock">In stock: 12 available</p>
            <?php
            // Récupérer les détails de la transaction
            $transaction_id = uniqid();
            $montant = 20.00;
            $commercant_id = '20'; // Ce commercant_id doit être configuré sur le site e-commerce

            // Afficher les détails de la transaction
            echo "<p>Montant à Payer: $montant MRU</p>";
            echo "<p>Code Commerçant : $commercant_id</p>";
            ?>
            <a href="<?php echo "http://127.0.0.1:8000/nextpay/payer?transaction_id=$transaction_id&montant=$montant&commercant_id=$commercant_id"; ?>" class="pay-button">Buy Now</a>
            <div class="social-share">
                <a href="#"><img src="img/facebook.png" alt="Share"></a>
                <a href="#"><img src="img/twitter.png" alt="Tweet"></a>
                <a href="#"><img src="img/pinterest.png" alt="Pin it"></a>
            </div>
        </div>
    </div>
</body>
</html>
