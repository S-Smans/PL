<?php include_once "./include/header.inc.php"; ?>

<link rel="stylesheet" href="./css/form.css" />
<script src="./scripts/script.js" defer></script>
<title>Product Add</title>
</head>

<body>

  <header>
    <h1>Product Add</h1>
    <div>
      <button>Save</button>
      <button id="cancel">Cancel</button>
    </div>
  </header>
  <hr />

  <main>
    <form action="" id="product_form">
      <div>
        <label for="sku">SKU</label>
        <input type="text" id="sku" name="sku" size="30">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" size="30">
        <label for="price">Price ($)</label>
        <input type="text" id="price" name="price" size="30">
      </div>
      <label for="type">Type Switcher</label>
      <select name="type" id="productType">
        <option value="dvd" id="DVD">DVD</option>
        <option value="book" id="Book">Book</option>
        <option value="furniture" id="Furniture">Furniture</option>
      </select>
    </form>
  </main>

  <?php include_once "./include/footer.inc.php"; ?>


  <script>
    const cancelBtn = document.getElementById("cancel");
    cancelBtn.addEventListener("click", () => {
      location.href = "/product-list";
    })
  </script>