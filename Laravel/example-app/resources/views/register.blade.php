<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account baru</h1>
    <h3>Syarat Dan Ketentuan</h3>
    <ul>
        <li>Tamatan SMA/SMK </li>
        <li>Tamatan Perguruan Tinggi</li>
        <li>Pekerja IT</li>
        <li>Freelancer</li>
        </ul>
        <h3>Cara Bergabung</h3>
        <ol>
        <li>kunjungi website GC-INS</li>
        <li>Register</li>
        <li>Lakukan Pembayaran</li>
        </ol>
        <form action="/register" method="post">
            @csrf
            <label>First Name:</label><br>
            <input type="text" name="firstName"><br><br>
            <label>Last Name:</label><br>
            <input type="text" name="lastName"><br><br>
            <label>Gender:</label><br>
            <input type="radio" name="gender">Male<br>
            <input type="radio" name="gender">Female<br>
            <input type="radio" name="gender">Other<br><br>
            <label>nationality</label><br><br>
        <select name="indonesia">
            <option value="indonesia">indonesia</option>
            <option value="inggris">inggris</option>
            <select><br><br>
                <label>Language Spoken</label><br>
                <input type="checkbox" name="Language Spoken">Bahasa Indonesia<br>
                <input type="checkbox" name="Language Spoken">English<br>
                <input type="checkbox" name="Language Spoken">Other<br><br>
                <label>Bio:</label><br><br>
                <textarea name="message" rows="10" cols="30"></textarea>
                <br><br>
                <input type="submit" value="Submit">
              </form>
</body>
</html>