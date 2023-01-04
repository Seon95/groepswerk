<style>
  body {
    background: #161616;
    font-family: sans-serif;

  }


  form {
    padding-top: 100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;



  }

  input {
    padding: 5px;
    width: 300px;
    color: #161616;
  }

  h1 {
    color: white;
    display: flex;
    justify-content: center;
    position: relative;
    top: 80px;
  }

  button {
    padding: 10px;
    width: 100px;
    margin-top: 10px;
    font-weight: 800;
  }
</style>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artikels toevoegen</title>
</head>

<body>


  <h1>Artikels toevoegen</h1>

  <form action="/addProducts/connection.php" method="POST">


    <input type="text" name="title" placeholder="Title">
    <br>
    <input type="text" name="description" placeholder="Description">
    <br>
    <input type="text" name="createdAt" placeholder="Created at">
    <br>
    <input type="text" name="price" placeholder="Price">
    <br>
    <input type="text" name="active" placeholder="Active">
    <br>
    <input type="text" name="category_id" placeholder="Category">

   


    <br>
    <input type="text" name="img" placeholder="Img">

    <button type="submit" name="submit"> Sign up</button>


  </form>


</body>

</html>