<style>

body {
  background: #161616;

  font-family: sans-serif;


  
}



form{
padding-top: 100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    

}
</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<form action="/addProducts/connection.php" method="POST">


<input type="text" name = "title" placeholder="title">
<br>
<input type="text" name = "description" placeholder="description">
<br>
<input type="text" name = "createdAt" placeholder="createdAt">
<br>
<input type="text" name = "price" placeholder="price">
<br>
<input type="text" name = "active" placeholder="active">
<br>
<input type="text" name = "category_id" placeholder="category">
<br>
<input type="text" name = "img" placeholder="img">

<button type="submit" name="submit"> Sign up</button>


</form>


</body>
</html>




