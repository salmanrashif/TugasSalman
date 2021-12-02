<!DOCTYPE html>
<html>

<head>
  <title>Doctor Clinic Salman Rashif</title>
</head>

<body>
  <h1>Doctor Clinic Salman Rashif</h1>
  <hr>
  <h3>FORM ADD DOCTOR</h3>
  <form method="post" action="create_doctor_200023.php">
    <table>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="doctor_name_200023" required></td>
      </tr>
      </tr>
      <tr>
        <td>Gender</td>
        <td>
          <input type="radio" name="doctor_gender_200023" value="Male" required>Male
          <input type="radio" name="doctor_gender_200023" value="Female" required>Female
        </td>
      </tr>
      <tr>
        <td>address</td>
        <td><textarea name="doctor_address_200023" required></textarea></td>
      </tr>
      <tr>
        <td>phone</td>
        <td><input type="text" name="doctor_phone_200023" required></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" name="save" Value="Save">
          <input type="reset" name="reset" Value="Reset">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>