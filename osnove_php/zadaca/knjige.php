<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles.css">
<title>Zadaca Knjige</title>
</head>
<body>
   <hr>
<h1><p> Enter book data </p></h1>

<form action="obrazac.php" method ="POST">
<table>
    <tr>
    <td><label>Title </label></td>
    <td><input type="text" name ="Title" /></td>
    </tr>
    <tr>
    <td><label>Author</label></td>
    <td><input type="text" name="Author" /></td>
    </tr>
    <td><label> Available</label></td>
    <td><select name="Available">
        <option value="Available">Available</option>
        <option value="Unavailable">Unavailable</option>
    </select></td>
    </tr>
    <tr>
    <td><label>Pages</label></td>
    <td><input type="number" name="Pages"/></td>
    </tr>
    <tr>
    <td><label>ISBN</label></td>
    <td><input type="number" name="Isbn"/></td>
    </tr>
    <tr>
    <td><input type="submit"> </td>
    </tr>
</table>
</hr>

</form>
<h3>Book List</h3>
<table>
   <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Available</th>
      <th>Pages</th>
      <th>Isbn</th>
   </tr>
   <?php
   $json_data=file_get_contents("knjige.json");
   $knjige=json_decode( $json_data,true );
   foreach($knjige as $knjige){
      ?>
         <tr>
            <td>
               <?php echo $knjige['Title']; ?>
            </td>
            <td>
               <?php echo $knjige['Author']; ?>
            </td>
            <td>
               <?php echo $knjige['Available']; ?>
            </td>
            <td>
               <?php echo $knjige['Pages']; ?>
            </td>
            <td>
               <?php echo $knjige['Isbn']; ?>
            </td>
            
         </tr>
      <?php
   }
?>
</table>
</body>
</html>