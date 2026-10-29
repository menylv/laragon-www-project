<!--
Matric Number: A223717
Name: AMNI NAJLAA
-->
<!DOCTYPE html>
<html>
<head>
  <title>Biodata</title>
  <style>
   * {
  box-sizing: border-box;
}
body {
  width: 90%;
  max-width: 700px;
  margin: 30px auto;
  background-color: #f5f7fa;
  font-family: Arial, sans-serif;
}
h1 {
  margin-bottom: 8px;
}
hr {
  margin: 16px 0;
  border: 0;
  border-top: 5px dotted #d5dde6;
}
form table {
  display: block;
  width: 100%;
  border: 0px;
}
form table tbody,
form table tr,
form table td {
  display: block;
  width: 100%;
}
form table tr {
  margin-bottom: 16px;
}
form table td {
  padding: 3px 0;
  border: 0;
}
form table td:first-child {
  color: #18309e;
  font-weight: bold;
}
form table input:not([type="radio"]),
form table textarea,
form table select {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #c5cfda;
  border-radius: 5px;
  background-color: #fff;
  color: #263548;
  font: inherit;
}
form table textarea {
  min-height: 110px;
  resize: vertical;
}
form table input[type="radio"] {
  margin: 0 5px 0 0;
}
 
form table input[type="radio"] + label {
  margin-right: 18px;
}
form table input[type="color"] {
  height: 44px;
  padding: 4px;
}
form table input[type="range"] {
  padding: 0;
}

form button,
form input[type="reset"] {
  display: block;
  width: 100%;
  margin: 10px 0;
  padding: 11px;
  border: 0;
  border-radius: 4px;
  color: #fff;
  background-color: #24669d;
  font: inherit;
  cursor: pointer;
}
form input[type="reset"] {
  background-color: #ff99c4;  /* pick an appropriate color */
}
form button:hover {
  background-color: #7f093a;  /* pick a darker color */
}
form input[type="reset"]:hover {
  background-color: #35000f;  /* pick a darker color */
}

  </style>
</head>
<body>
<h1>Biodata Form</h1>
<hr>
<form action="http://lrgs.ftsm.ukm.my/users/a123456/lab-2/validate_biodata.php" method="post" enctype="multipart/form-data">
  <table border="1" cellpadding="10">
    <tr>
      <td>Name:</td>
      <td><input type="text" name="name" placeholder="Insert your name" autofocus required
                 pattern="[A-Z][a-z ]+(\s[A-Z][a-z ]+)*" title="Name must be in Title Case"></td>
    </tr>
    <tr>
      <td>Age:</td>
      <td><input type="number" name="age" min="0" max="100" step="1" required></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><input type="radio" name="gender" id="male" value="male" checked required><label for="male">Male</label>
          <input type="radio" name="gender" id="female" value="female" required><label for="female">Female</label></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><textarea name="address" cols="50" rows="5" placeholder="Insert your address" required></textarea></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="email" name="email" id="emailId" required
                 pattern="[^@\s]+@[^@\s]*ukm[^@\s]*"
                 title="Email must contain the word ukm"></td>
    </tr>
    <tr>
      <td>Date of Birth:</td>
      <td><input type="date" name="dob" id="dobId" required></td>
    </tr>

    <tr>
      <td>Height:</td>
      <td><input type="range" name="height" id="heightId" min="100" max="200" value="150" oninput="outputId.value = heightId.value"><output id="outputId">150</output>cm</td>
    </tr>
     <tr>
      <td>Phone Number:</td>
      <td><input type="tel" name="phone" id="phoneId" placeholder="+60##-#######" required
                 pattern="(\+60|0060)[0-9]{1,2}-?[0-9]{7,8}"
                 title="Must begin with +60 or 0060"></td>
    </tr>
    <tr>
      <td>My favourite color:</td>
      <td><input type="color" name="color" id="colorId" value="#008000" required></td>
    </tr>
    <tr>
      <td>FB/TW/IG:</td>
      <td><input type="url" name="fbtwig" id="fbtwigId" placeholder="Insert the URL" required></td>
    </tr>
    <tr>
      <td>My Face photo:</td>
      <td><input type="file" name="photo" id="photoId" accept="image/*" required></td>
    </tr>
    <tr>
      <td>My University:</td>
      <td>
        <select name="university" placeholder="Insert your university name" required>
          <option value="">Select your university</option>
          <option value="UM">University of Malaya</option>
          <option value="UPM">University Putra Malaysia</option>
          <option value="USM">University Sains Malaysia</option>
          <option value="UIAM">International Islamic University Malaysia</option>
          <option value="UTM">University Technology Malaysia</option>
          <option value="UTP">University Technology Petronas</option>
          <option value="UUM">University Utara Malaysia</option>
          <option value="UTHM">University Tun Hussein Onn Malaysia</option>
          <option value="UKM" selected>Universiti Kebangsaan Malaysia</option>
        </select>
      </td>
    </tr>
  </table>
<hr>
<input type="hidden" name="matricnum" value="A223717">
<button type="submit" name="biodata_form" value="Submit My Biodata">Submit My Biodata
</button>
<input type="reset" name="reset_form" value="Reset Form">
</form>
 
</body>
</html>