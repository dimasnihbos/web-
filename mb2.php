<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Cart</title>
  <link rel="stylesheet" href="style.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<body>

  <div class="container">
    <div class="card-left">
      <div class="main-image">
          <img src="img/mb2.jpg">
      </div>
    </div>
    <div class="card-right">
        <h2>MB 0.2 Supernova</h2>
        <div class="star">
         <div class="star-group">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
         </div>
         <span>3 Reviews</span>
        </div>
        <h4>Rp 3.000.000   <span> Rp 3.200.000</span></h4>
        <p>Kualitas Baik , Insole Tebal Bantalan Empuk , Banyak Pilihan Warna , Penguncian Pada kaki sangat amat nyaman</p>

        <div class="form">
          <div class="form-group">
            <label>Color</label>
            <select>
                <option>Supernova</option>
            </select>
          </div>
          <div class="form-group">
            <label>Qty</label>
            <div class="input-group">
              <button class="minus">-</button>
              <input type="text" value="1" id="qty">
              <button class="plus">+</button>
            </div>
          </div>
        </div>

        <button class="btn-cart">Add Cart</button>

    </div>
  </div>
  
  <script src="js/script.js"></script>
</body>
</html>