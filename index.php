<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="insert.php" method="POST" >
  <h1>Students Informations </h1>
    <section>
      <table>
        <h3>Personal information</h3>
          <tr>
            <td>Image : </td>
            <td><input type="text" name="avatar" id="avatar" ></td>
          </tr>
          <tr>
            <td>ID : </td>
            <td><input type="int" name="ID" id="ID" ></td>
          </tr>
          <tr>
            <td>Username : </td>
            <td><input type="text" name="username" id="username" value=""></td>
          </tr>
          <tr>
            <td>First name : </td>
            <td><input type="text" name="first_name" id="first_name" value="" ></td>
          </tr>
          <tr>
            <td>Last name : </td>
            <td><input type="text" name="last_name" id="last_name" value=""></td>
          </tr>
          <tr>
            <td>Gender : </td>
            <input type="radio" name="gender_1" id="gender_1" value="m">
            <input type="radio" name="gender_2" id="gender_2" value="f">
            <input type="radio" name="gender_3" id="gender_3" value="n">
          </tr>
          <tr>
            <td>Email : </td>
            <td><input type="text" name="email" id="email" ></td>
          </tr>
          <tr>
            <td>Preferred language : </td>
            <td><input type="text" name="preferred_language" id="linkedin" value="" ></td>
        </tr> 
      </table>
      <table>
          <h3>Social Network</h3>
            <tr>
              <td>Linkedin(url) : </td>
              <td><input type="text" name="linkedin" id="linkedin" value="" ></td>
            </tr>    
            <tr>
              <td>Github(url) : </td>
              <td><input type="text" name="github" id="github" value="" ></td>
            </tr> 
      </table>
      <table>
        <h3>Extral informations</h3>
        <tr>
          <label for="quote">Favourite quote: </label>
          <textarea name="quote" id="quote" cols="20" rows="10"></textarea>
        </tr>
        <tr>
          <td>By the author : </td>
          <td><input type="text" name="quote_author" ></td>
        </tr>
        <tr>
          <td>Favourite video : </td>
          <td><input type="text" name="video" id="video" value="" ></td>
        </tr>         
        <tr>
          <td>Created at : </td>
          <td><input type="text" name="created_at" ></td>
        </tr>
      </table>
      <input type="submit" name="submit" id="submit" >
    </form>
</body>
</html>