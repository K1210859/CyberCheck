
<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8">
        <link rel="stylesheet" href="posting.css" type="text/css">
        <title>Posting Page</title>
    </header>
    <body>
        <div class="grid">
            <div class="box a">
                <h1 id="title">Posting Page</h1>
            </div>
              <p>
                <a href="home.html">Home Page</a>
                <br>
                <a href="chatting.html">Chatting Page</a>
                <br>
                <a href="help.html">Help Page</a>
                <br>
                <a href="logout.php">Logout</a>
                <br>
                <a href="posting.html">Posting Page</a>
                <br>
                <a href="settings.html">Settings Page</a>
                <br>
                <br>

                </p>


            <div class="b">
              <br>
                <div class="SearchBarClass">
                    <form method="post"><p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            <input type="search" id="SearchBar" name="SearchBar" value=""></input>
                            <input type="submit" name="SubmitBttn" id="SubmitBttn" value="Search"></input>
                        </p>
                    </form>
                </div>
                <div class="tools">
                    <input type="button" id="Addbttn" name="Addbttn" value="Add"></input>
                    <br>
                    <input type="button" id="Savebttn" name="Savebttn" value="Saved"></input>
                </div>

                    <div class="box PostOfUser">
                      <?php


                      $sname = "localhost";
                      $uname = "root";
                      $password = "";
                      $db_name = "Social_Media";

                      $connection = mysqli_connect($sname, $uname, $password, $db_name);

                      if ($connection -> connect_errno) {
                        echo "Failed to connect to MySQL: " . $connection -> connect_error;
                        exit();
                      }
                      else {
                        echo "You have connected";
                      }
                      $sqli = "SELECT * FROM post";
                      $result = mysqli_query($connection,$sqli);
                      $resultCheck = mysqli_num_rows($result);
                      if($resultCheck>0)
                      {
                        //gains value inside textbox
                        $ValueInSearchBar = $_POST['SearchBar'];
                        //Does an action we=hen clicked isset=clicking

                          while($row = mysqli_fetch_assoc($result))
                                {
                                    if(isset($_POST['SubmitBttn']))
                                    {
                                       if($row['User']==mysqli_real_escape_string($connection, $_POST['SearchBar']))
                                       {

                                           echo "<div class=\"UserBox\">
                                            <h1>&ensp;&ensp;".$row['User']."</h1>
                                            </div>";
                                            echo "<div class=\"Post\">
                                            <img src=\"https://cdn.vox-cdn.com/thumbor/GfIcxmidImgO63DFMWWO28jVWjk=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19157811/ply0947_fall_reviews_2019_tv_anime.jpg\" class=\"ImageInPost\"/>
                                            </div>";
                                            $likesforPost = $row['Likes']+1;
                                            echo "<div class=\"Toolbar\">
                                            <form method=\"post\">
                                            <input type=\"submit\" id=\"Likebttn\" name=\"Likebttn\" value=\"(".$row['Likes'].")\"></input>";
                                            echo "<input type=\"button\" id=\"Savebttn\" name=\"Savebttn\" value=\"Save\"></input></div></form>";
                                            if(isset($_POST['Likebttn']))
                                            {
                                                mysqli_query($connection, "UPDATE `post` SET `Likes` = ".$likesforPost." WHERE `post`.`Number` = ".$row['Number'].";");
                                            }
                                       }
                                    }
                                       else
                                       {
                                           if((isset($_POST['SubmitBttn']) and mysqli_real_escape_string($connection, $_POST['SearchBar'])=="") or (isset($_POST['SubmitBttn'])==false))
                                           {
                                                echo "<div class=\"UserBox\">
                                                <h1>&ensp;&ensp;".$row['User']."</h1>
                                                </div>";
                                                echo "<div class=\"Post\">
                                                <img src=\"https://cdn.vox-cdn.com/thumbor/GfIcxmidImgO63DFMWWO28jVWjk=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19157811/ply0947_fall_reviews_2019_tv_anime.jpg\" class=\"ImageInPost\"/>
                                                </div>";
                                                $likesforPost = $row['Likes']+1;
                                                echo "<div class=\"Toolbar\">
                                                <form method=\"post\">
                                                <input type=\"submit\" id=\"Likebttn\" name=\"Likebttn\" value=\"(".$row['Likes'].")\"></input>";
                                                echo "<input type=\"button\" id=\"Savebttn\" name=\"Savebttn\" value=\"Save\"></input></div></form>";
                                                if(isset($_POST['Likebttn']))
                                                {
                                                    mysqli_query($connection, "UPDATE `post` SET `Likes` = ".$likesforPost." WHERE `post`.`Number` = ".$row['Number'].";");
                                                }
                                           }
                                       }
                                }

                      }

                      ?>
                        <p>
                          Sirish
                          </p>
                          <br>
                        <img src="https://cdn.vox-cdn.com/thumbor/GfIcxmidImgO63DFMWWO28jVWjk=/1400x1050/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/19157811/ply0947_fall_reviews_2019_tv_anime.jpg" height="320" width="780px">

                        <br>
                        <button type="button" name="Like">Like</button>
                        <br><br><br>
                        <p>
                          Sanjay
                          </p>
                          <img src="https://i.ytimg.com/vi/Kp2bYWRQylk/maxresdefault.jpg" height="320" width="780px">
                          <br>
                          <button type="button" name="Like">Like</button>
                        </div>
                    </div>
                 </div>
    </body>
</html>
