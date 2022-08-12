<!DOCTYPE HTML>
<html>
<head>
  <title>VIP Form</title>
</head>
<body>
<h1>VIP Informations</h1>
 <form action="insert.php" method="POST">

 
  <table>

    <tr>
    <td>First :</td>
    <td><input type="text" name="Fname" required></td>
    <td>Middle :</td>
    <td><input type="text" name="Mname"></td>
    <td>Last :</td>
    <td><input type="text" name="Lname" required></td>
    </tr>
    
   <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>

    <td>Age :</td>
    <td><input type="age" name="age" required></td>

   </tr>


   <tr>
    <td>Address :</td>
    <td><input type="text" name="address" required></td>
   </tr>
 
   <tr>
    <td>Birthday :</td>
    <td><input type="birthday" name="birthday" required></td>

    <td>Contact no :</td>
    <td><input type="contact" name="contact"></td>
   </tr>


   <tr>
    <td>Invited by :</td>
    <td><input type="text" name="invited" required></td>
    </td>
   </tr>

   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>