<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Дубровских Никита 221-361 лаб 5</title>
    <link rel="stylesheet" href="style.css" />
    <?php include("db.php"); ?>
</head>

<body>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Term</th>
                    <th>Definition</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($mysql, "SELECT * FROM `terms`");

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td>
                            <span class="definition">
                                <?php echo $row['name'] ?>:
                            </span>
                        </td>
                        <td>
                            <?php echo $row['definition'] ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </section>

    <section>
        <div class="image-grid">
            <?php
            $result = mysqli_query($mysql, "SELECT * FROM `images`");

            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <a href="#" title="<?php echo $row['title'] ?>">
                    <img src="images/<?php echo $row['src'] ?>" alt="Image" />
                </a>
            <?php } ?>
        </div>
    </section>
</body>

</html>