<table class="table table-bordered">
    <tbody>
        <tr>
            <th class="bg-light" id="name">NAMA</th>
            <td><?= $_POST['nama']; ?></td>
        </tr>
        <tr>
            <th class="bg-light" id="email">EMAIL</th>
            <td><?= $_POST['email']; ?></td>
        </tr>
        <tr>
            <th class="bg-light">FOTO PROFIL</th>
            <td><img src="<?= $_POST['img']; ?>" id="photo" class="img-circle" style="width:50px; height:50px"></td>
        </tr>
        <?php
        // require "assets/connect-db.php";
        // $nama = $_POST['nama'];
        // $email = $_POST['email'];
        // $img = $_POST['img'];
        // // Attempt insert query execution
        // $sql = "INSERT INTO user_profile (username, email, photo) VALUES ('$nama', '$email', '$img')";
        // if (mysqli_query($link, $sql)) {
        //     echo "Records inserted successfully.";
        // } else {
        //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        // }

        // // Close connection
        // mysqli_close($link);
        ?>
    </tbody>
</table>

<button id="signout_button">Sign Out</button>