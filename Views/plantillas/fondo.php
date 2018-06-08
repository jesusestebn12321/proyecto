<?php
$pla=new plantilla();

class plantilla{
    public function __construct(){

?>
            <!DOCTYPE html>
            <html lang="en" >
            <head>
              <meta charset="UTF-8">
              <title></title>
                <link rel="stylesheet" href="Views/css/style.css">
                <script src="Views/js/prefixfree.min.js"></script>
                <script  src="Views/js/index.js"></script>
            </head>
            <body>
<?php
    }

    public function __destruct(){
?>
</body>

</html>

<?php
    }
}

?>
