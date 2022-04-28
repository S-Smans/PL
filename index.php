<?php include_once "./include/header.inc.php"; ?>

<title>Product List</title>
</head>

<body>

  <header>
    <h1>Product List</h1>
    <div>
      <button id="add">ADD</button>
      <button class="delete-product-btn">MASS DELETE</button>
    </div>
  </header>
  <hr />

  <main>

  </main>

  <?php include_once "./include/footer.inc.php"; ?>


  <script>
    const addBtn = document.getElementById("add");
    addBtn.addEventListener("click", () => {
      location.href = location.href + "/add-product.php";
    });
  </script>