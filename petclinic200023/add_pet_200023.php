<?php

?>

<!DOCTYPE html>
<html>

<head>
  <title>Pet Clinic Salman Rashif</title>
</head>

<body>
  <h1>Pet Clinic Salman Rashif</h1>
  <hr>
  <h3>FORM ADD PET</h3>
  <form method="post" action="create_pet_200023.php">
    <table>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="pet_name_200023" required></td>
      </tr>
      <tr>
        <td>Type</td>
        <td>
          <select name="pet_type_200023" required>
            <option value="">Choose</option>
            <option value="Cat">Cat</option>
            <option value="Dog">Dog</option>
            <option value="Reptil">Reptil</option>
            <option value="Bird">Bird</option>
            <option value="Rodent">Rodent</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <input type="radio" name="pet_gender_200023" value="Male" required> Male
          <input type="radio" name="pet_gender_200023" value="Female" required> Female
        </td>
      </tr>
      <tr>
        <td>Age</td>
        <td><input type="number" name="pet_age_200023" required></td>
      </tr>
      <tr>
        <td>Owner</td>
        <td><input type="text" name="pet_owner_200023" required></td>
      </tr>
      <tr>
        <td>address</td>
        <td><textarea name="pet_address_200023" required></textarea></td>
      </tr>
      <tr>
        <td>phone</td>
        <td><input type="text" name="pet_phone_200023" required></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="save" Value="SAVE">
          <input type="reset" name="reset" Value="RESET">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>