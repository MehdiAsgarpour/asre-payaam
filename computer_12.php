<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <style>
            @font-face {
                font-family:BNazaninBd;
                src:url("BNazaninBd.ttf");
            }
            body, header, nav, main {
                border: 1px solid red;
                margin: 20px;
                border-radius: 6px;
                padding: 10px;
                font-family:BNazaninBd;
                font-size: 24px;
                background-image:url("Floral1.jpg");
            }
            button, input {
                font-family:BNazaninBd;
                font-size:16px;
            }
            form {
                float:left;
                margin:0 20px;
            }
            #heading {color:red;}
        </style>
    </head>
    <body>
        <nav>
            <a href="http://asre-payaam.epizy.com">برگشت به سایت هنرستان</a>
            <form action="computer_12_1.php" method="post">
                <input type="submit" value="راه اندازی دوباره" name="restart">
            </form>
            <?php
                if (isset($_POST["restart"])) {
                    $f2 = fopen("user.txt", "w");
                    fwrite($f2, 0);
                    fclose($f2);
                    unset($_POST["restart"]);
                } 
            ?>
        </nav>
        <main>
            <!-- <p>پرسش های زیر را پاسخ دهید</p> -->
            <?php
                $f = fopen("user.txt", "r");
                $data = fgets($f);
                fclose($f);
                if ($data == 0) {
                    echo "<section id='section1'>
                                    <img src='pic1.png'>
                                    <form method='post'>
                                        <input type='text' name='ans1'>
                                        <input type='submit' value='Enter'>
                                    </form>
                                </section>";
                    echo "<form action='computer_12.php' method='post'>
                                <input name='guide1' type='submit' value='راهنمایی'>
                              </form>";
                    if (isset($_POST["guide1"])) {
                        echo "<img src='guide1.png'>";
                    }
                    if (isset($_POST["ans1"])) {
                        if ($_POST['ans1'] == 2) {
                            $f1 = fopen("user.txt", "w");
                            fwrite($f1, 1);
                            fclose($f1);
                            echo "<p>پاسخ شما درست می باشد</p>";
                            echo "<form action='computer_12.php' method='post'>
                                        <label>پرسش 2</label>
                                        <input type='submit'>
                                      </form>";
                        } else {
                            echo "<p>پاسخ شما نادرست است، دوباره تلاش کنید.</p>";
                        }
                    }    
                } else if ($data == 1) {
                    echo "<section id='section2'>
                                    <img src='pic2.png'>
                                    <form action='' method='post'>
                                        <input type='text' name='ans2'>
                                        <input type='submit' value='Enter'>
                                    </form>
                                </section>";
                  if (isset($_POST["ans2"])) {
                        if ($_POST['ans2'] == 9) {
                            $f1 = fopen("user.txt", "w");
                            fwrite($f1, 2);
                            fclose($f1);
                            echo "<p>پاسخ شما درست می باشد</p>";
                            echo "<form action='computer_12.php' method='post'>
                                        <label>پرسش 3</label>
                                        <input type='submit'>
                                      </form>";
                        } else {
                            echo "<p>پاسخ شما نادرست است، دوباره تلاش کنید.</p>";
                        }
                    }       
                } else  if ($data == 2) {
                    echo "<section id='section3'>
                                    <img src='pic3.png'>
                                    <form action='' method='post'>
                                        <input type='text' name='ans3'>
                                        <input type='submit' value='Enter'>
                                    </form>
                                </section>";
                    echo "<form action='computer_12.php' method='post'>
                                <input name='guide3' type='submit' value='راهنمایی'>
                              </form>";
                    if (isset($_POST["guide3"])) {
                        echo "<img src='guide3.png'>";
                  }
                    if (isset($_POST["ans3"])) {
                        if ($_POST['ans3'] == 2) {
                            $f1 = fopen("user.txt", "w");
                            fwrite($f1, 3);
                            fclose($f1);
                            echo "<p>پاسخ شما درست می باشد</p>";
                            echo "<form action='computer_12.php' method='post'>
                                        <label>پرسش 4</label>
                                        <input type='submit'>
                                    </form>";
                        } else {
                            echo "<p>پاسخ شما نادرست است، دوباره تلاش کنید.</p>";
                        }    
                    }
                }
            ?>
        </main>
    </body>
</html>
