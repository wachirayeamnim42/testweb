<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $jsonfile = file_get_contents("../json/movies.json");
    $data = json_decode($jsonfile, true);
    ?>

    <select id="year_movie">
        <?php
        foreach ($data as $key => $value) {
            echo "<option value = {'$value'}>" . $value['year'] . " : " . $value['title'] . "</option>";
        }
        ?> 
    </select>
    
    <script type="text/javascript">
        var str = "";
        var jsonEx = <?php echo $jsonfile ?>;
    </script>
<br>
    <div id="output">
        <label for="output">OUTPUT:</label><br><br>
        <textarea id="review" name="review" rows="10" cols="90">
        <?php
            if(isset($value)){
                foreach ($data as $key => $value) {
                echo $value['year'] . " : " . $value['title'];
                echo "\n";
            }
        }
        ?>
  </textarea>
    </div>
</body>

</html>