<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Past Papers</title>

    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/main.js"></script>

</head>

<body>

    <?php
    require('Header.php');
    require('config.php');

    if (!isset($_GET["p1"])) {
        $pageno1 = 0;
    } else {
        $pageno1 = $_GET["p1"];
    }

    if (!isset($_GET["p2"])) {
        $pageno2 = 0;
    } else {
        $pageno2 = $_GET["p2"];
    }

    if (!isset($_GET["p3"])) {
        $pageno3 = 0;
    } else {
        $pageno3 = $_GET["p3"];
    }

    if (!isset($_GET["p4"])) {
        $pageno4 = 0;
    } else {
        $pageno4 = $_GET["p4"];
    }

    if (!isset($_GET["p5"])) {
        $pageno5 = 0;
    } else {
        $pageno5 = $_GET["p5"];
    }

    $adminShow = "";
    if (isset($_SESSION['userID'])) {
        if ($_SESSION['userType'] == 1) {
            $adminShow = "<li><a href=\"admin.php\">Admin</a></li>";
        }
    }

    ?>

    <div class="nav">
        <ul>
            <li><a class="logoL">Library</a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="articles.php">Articles</a></li>
            <li><a href="past_papers.php" class="active">Past Papers</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="journals.php">Journals</a></li>
            <?php echo $adminShow; ?>
        </ul>
    </div><br>

    <div class="row">
        <div class="column side"></div>
        <div class="column middle">
            <form action="searchResult.php" class="input-container center" method="post">
                <input type="text" class="txtSearch" name="keyWord" placeholder="Search...">
                <input type="submit" name="Search" value="Search" class="btn primary">
            </form>
        </div>
    </div>


    <!-- 2020 -->

    <div class="card set">
        <div class="card title">
            <h1>2020</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php

                        if ($pageno1 != 0) {
                        ?>
                            <a href="past_papers.php?p1=<?php echo $pageno1 - 1; ?>" class="page_next">❮</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>
                </div>

                <?php



                $alldata20 = "SELECT i.Name, i.itemImgLoc, i.IID  FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2020-01-01' AND '2020-12-31';";
                $alldata20 = $con->query($alldata20);
                $n_all20 = $alldata20->num_rows;

                $resultset_per_new_arrivals = 5;
                $number_of_data20 = ceil($n_all20 / $resultset_per_new_arrivals);



                $offset1 = (int)$pageno1 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc, i.IID FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2020-01-01' AND '2020-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset1 . ";";
                $resultSelectBook = $con->query($sqlSelectBook);
                if ($resultSelectBook->num_rows > 0) {

                    while ($rowSelectBook = $resultSelectBook->fetch_assoc()) {

                        $Name = $rowSelectBook['Name'];
                        $IID = $rowSelectBook['IID'];
                        $itemImgLoc = $rowSelectBook['itemImgLoc'];

                ?>
                        <div class="card_column">
                            <a href="./bookView.php?IID=<?php echo $IID; ?>">
                            <div id="book1" class="card">
                                <img src="<?php echo $itemImgLoc; ?>" alt="book img">
                                <div><label><?php echo $Name; ?></label></div>
                            </div>
                            </a>
                        </div>


                <?php
                    }
                }


                ?>
                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php
                        $max1 = $number_of_data20 - 1;
                        if ($pageno1 != $max1) {
                        ?>
                            <a href="past_papers.php?p1=<?php echo $pageno1 + 1; ?>" class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>


                </div>


            </div>
        </div>
    </div>

    <!-- 2020 -->



    <!-- 2019 -->

    <div class="card set">
        <div class="card title">
            <h1>2019</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php

                        if ($pageno2 != 0) {
                        ?>
                            <a href="past_papers.php?p2=<?php echo $pageno2 - 1; ?>" class="page_next">❮</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>
                </div>

                <?php


                $alldata19 = "SELECT i.Name, i.itemImgLoc, i.IID FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2019-01-01' AND '2019-12-31' ;";
                $alldata19 = $con->query($alldata19);
                $n_all19 = $alldata19->num_rows;

                $resultset_per_new_arrivals = 5;
                $number_of_data19 = ceil($n_all19 / $resultset_per_new_arrivals);

                $offset2 = (int)$pageno2 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc, i.IID FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2019-01-01' AND '2019-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset2 . ";";
                $resultSelectBook = $con->query($sqlSelectBook);
                if ($resultSelectBook->num_rows > 0) {

                    while ($rowSelectBook = $resultSelectBook->fetch_assoc()) {

                        $Name = $rowSelectBook['Name'];
                        $IID = $rowSelectBook['IID'];
                        $itemImgLoc = $rowSelectBook['itemImgLoc'];


                ?>




                        <div class="card_column">
                            <a href="./bookView.php?IID=<?php echo $IID; ?>">
                            <div id="book1" class="card">
                                <img src="<?php echo $itemImgLoc; ?>" alt="book img">
                                <div><label><?php echo $Name; ?></label></div>
                            </div>
                        </div>





                <?php
                    }
                }


                ?>
                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php
                        $max2 = $number_of_data19 - 1;
                        if ($pageno2 != $max2) {
                        ?>
                            <a href="past_papers.php?p2=<?php echo $pageno2 + 1; ?>" class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>


                </div>


            </div>
        </div>
    </div>

    <!-- 2019 -->



    <!-- 2018 -->

    <div class="card set">
        <div class="card title">
            <h1>2018</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php

                        if ($pageno3 != 0) {
                        ?>
                            <a href="past_papers.php?p3=<?php echo $pageno3 - 1; ?>" class="page_next">❮</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>
                </div>

                <?php


                $alldata18 = "SELECT i.Name, i.itemImgLoc, i.IID   FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2018-01-01' AND '2018-12-31';";
                $alldata18 = $con->query($alldata18);
                $n_all18 = $alldata18->num_rows;

                $resultset_per_new_arrivals = 5;
                $number_of_data18 = ceil($n_all18 / $resultset_per_new_arrivals);

                $offset3 = (int)$pageno3 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc, i.IID  FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2018-01-01' AND '2018-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset3 . ";";
                $resultSelectBook = $con->query($sqlSelectBook);
                if ($resultSelectBook->num_rows > 0) {

                    while ($rowSelectBook = $resultSelectBook->fetch_assoc()) {

                        $Name = $rowSelectBook['Name'];
                        $IID = $rowSelectBook['IID'];
                        $itemImgLoc = $rowSelectBook['itemImgLoc'];


                ?>

                        <div class="card_column">
                            <a href="./bookView.php?IID=<?php echo $IID; ?>">
                            <div id="book1" class="card">
                                <img src="<?php echo $itemImgLoc; ?>" alt="book img">
                                <div><label><?php echo $Name; ?></label></div>
                            </div>
                        </div>


                <?php
                    }
                }


                ?>
                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php
                        $max3 = $number_of_data18 - 1;
                        if ($pageno3 != $max3) {
                        ?>
                            <a href="past_papers.php?p3=<?php echo $pageno3 + 1; ?>" class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2018 -->



    <!-- 2017 -->

    <div class="card set">
        <div class="card title">
            <h1>2017</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php

                        if ($pageno4 != 0) {
                        ?>
                            <a href="past_papers.php?p4=<?php echo $pageno4 - 1; ?>" class="page_next">❮</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>
                </div>

                <?php


                $alldata17 = "SELECT i.Name, i.itemImgLoc, i.IID   FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2017-01-01' AND '2017-12-31';";
                $alldata17 = $con->query($alldata17);
                $n_all17 = $alldata17->num_rows;

                $resultset_per_new_arrivals = 5;
                $number_of_data17 = ceil($n_all17 / $resultset_per_new_arrivals);

                $offset4 = (int)$pageno4 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc, i.IID  FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2017-01-01' AND '2017-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset4 . ";";
                $resultSelectBook = $con->query($sqlSelectBook);
                if ($resultSelectBook->num_rows > 0) {

                    while ($rowSelectBook = $resultSelectBook->fetch_assoc()) {

                        $Name = $rowSelectBook['Name'];
                        $IID = $rowSelectBook['IID'];
                        $itemImgLoc = $rowSelectBook['itemImgLoc'];

                ?>

                        <div class="card_column">
                            <a href="./bookView.php?IID=<?php echo $IID; ?>">
                            <div id="book1" class="card">
                                <img src="<?php echo $itemImgLoc; ?>" alt="book img">
                                <div><label><?php echo $Name; ?></label></div>
                            </div>
                        </div>


                <?php
                    }
                }


                ?>
                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php
                        $max4 = $number_of_data17 - 1;
                        if ($pageno4 != $max4) {
                        ?>
                            <a href="past_papers.php?p4=<?php echo $pageno4 + 1; ?>" class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2017 -->



    <!-- 2016 -->

    <div class="card set">
        <div class="card title">
            <h1>2016</h1>
        </div>

        <div class="row">
            <div class="column micro"></div>
            <div class="column large">

                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php

                        if ($pageno5 != 0) {
                        ?>
                            <a href="past_papers.php?p1=<?php echo $pageno5 - 1; ?>" class="page_next">❮</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>
                </div>

                <?php

                $alldata16 = "SELECT i.Name, i.itemImgLoc, i.IID   FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2016-01-01' AND '2016-12-31';";
                $alldata16 = $con->query($alldata16);
                $n_all16 = $alldata16->num_rows;

                $resultset_per_new_arrivals = 5;
                $number_of_data16 = ceil($n_all16 / $resultset_per_new_arrivals);

                $offset5 = (int)$pageno5 * $resultset_per_new_arrivals;

                $sqlSelectBook = "SELECT i.Name, i.itemImgLoc, i.IID  FROM `pastpaper` AS p , `inventory` AS i WHERE i.IID = p.IID AND i.Published_Date BETWEEN '2016-01-01' AND '2016-12-31' ORDER BY `Published_Date` DESC LIMIT 5 OFFSET " . $offset5 . ";";
                $resultSelectBook = $con->query($sqlSelectBook);
                if ($resultSelectBook->num_rows > 0) {

                    while ($rowSelectBook = $resultSelectBook->fetch_assoc()) {

                        $Name = $rowSelectBook['Name'];
                        $IID = $rowSelectBook['IID'];
                        $itemImgLoc = $rowSelectBook['itemImgLoc'];

                ?>


                        <div class="card_column">
                            <a href="./bookView.php?IID=<?php echo $IID; ?>">
                            <div id="book1" class="card">
                                <img src="<?php echo $itemImgLoc; ?>" alt="book img">
                                <div><label><?php echo $Name; ?></label></div>
                            </div>
                        </div>


                <?php
                    }
                }


                ?>
                <div class="card_column" style="width: 2%;">

                    <div class="cardnext">

                        <?php
                        $max5 = $number_of_data16 - 1;
                        if ($pageno5 != $max5) {
                        ?>
                            <a href="past_papers.php?p5=<?php echo $pageno5 + 1; ?>" class="page_next"> ❯</a>
                        <?php
                        } else {
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 2016 -->


    <?php
    require "Footer.php";
    ?>

</body>

</html>