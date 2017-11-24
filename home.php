<?php

    // Memasukkan semua fungsi lewat file init.php
    require_once('core/init.php');

    // Mengecek Session user dan mengubah variable session
    $_session = 0;
    if (getSession('user')) {
        $_session = 1;
        $id_user = selectAuth ('users', $_SESSION['user'])['id'];
    } else {
        $_session = 0;
        $id_user = null;
    }

    if (post('deletepost')) {
        deletePost(post('idpost'));
        header('location: home.php');
    }

    if (post('commented')){
        comment($id_user, post('comment'), post('idpostcomment'));
    }

    if (post('posted')) {
        if ( !empty( trim( post('post') ) ) ){
            postUpdate($id_user, post('post'));
        }

    }
    require_once('templates/partial/head.php'); // Memasukkan File Partial Bagian Header

?>
<body>
    <div id="createPostPopup" class="overlay">
        <div class="createPostWrapper">
            <div class="createPostWrapper__header">
                <h4>Create post</h4>
                <span id="createPostClose">X</span>
            </div>
            <div class="createPostWrapper__content">
                <form method="post">
                <div class="postInputWrapper">
                    <div class="postUploadImages">
                        <input type="file" id="files" accept="image/jpeg, image/jpg" name="files[]" multiple="">
                    </div>
                    <div id="postInput" class="postInputWrapper__core" contenteditable="true" placeholder="Post here here...">
                    </div>
                </div>
            </div>
            <div class="createPostWrapper__footer">
                <input name="post" id="a" type="hidden" value="">
                <input type="submit" value="Reply now" name="posted" class="button-blue--small">
                 </form>
                   <script>
                $("#postInput").keydown(function() {
                $("#a").val($("#postInput").html());
            });
            </script>
            </div>
        </div>
    </div>
    <header class="homePageHeader">
        <nav class="homePageNavbar">
            <div class="homePageNavbar__wrapper">
                <div class="homePageNavbar--items">
                    <div class="logo--small">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 300 300"
                            width="40" height="40">
                            <defs>
                                <clipPath id="_clipPath_MFMQeZITMfVg9AvXI7AkjxBm0EF0lAqf">
                                    <rect width="300" height="300" />
                                </clipPath>
                            </defs>
                            <g clip-path="url(#_clipPath_MFMQeZITMfVg9AvXI7AkjxBm0EF0lAqf)">
                                <path d=" M 1.563 151.563 C 1.563 69.638 68.075 3.125 150 3.125 C 231.925 3.125 298.437 69.638 298.437 151.562 C 298.438 233.487 231.925 300 150 300 C 68.075 300 1.563 233.487 1.563 151.563 Z "
                                    fill="rgb(0,130,255)" />
                                <clipPath
                                    <path d=" M 1.563 151.563 C 1.563 69.638 68.075 3.125 150 3.125 C 231.925 3.125 298.437 69.638 298.437 151.562 C 298.438 233.487 231.925 300 150 300 C 68.075 300 1.563 233.487 1.563 151.563 Z "
                                        fill="rgb(0,130,255)" />
                                </clipPath>
                                <g clip-path="url(#_clipPath_UeOLf7w0FYxgirY9mYCZjuFOZqamEC3Q)">
                                    <path d=" M 66 261.438 C 66 179.513 132.513 113 214.437 113 C 296.362 113 362.875 179.513 362.875 261.437 C 362.875 343.362 296.362 409.875 214.438 409.875 C 132.513 409.875 66 343.362 66 261.438 Z "
                                        fill="rgb(255,181,62)" />
                                </g>
                                <g id="Group">
                                    <path d="M 139.309 211.357 L 211.171 158.306 C 213.868 156.315 217.674 156.889 219.665 159.586 L 219.665 159.586 C 221.656 162.283 221.083 166.089 218.386 168.08 L 146.524 221.13 C 143.827 223.121 140.021 222.548 138.03 219.851 L 138.03 219.851 C 136.039 217.154 136.612 213.348 139.309 211.357 Z"
                                        style="stroke:none;fill:#E6A43B;stroke-miterlimit:10;" />
                                    <path d="M 222.423 232.301 L 168.194 161.323 C 166.159 158.659 166.669 154.844 169.333 152.809 L 169.333 152.809 C 171.997 150.774 175.812 151.284 177.847 153.948 L 232.076 224.926 C 234.111 227.589 233.6 231.404 230.937 233.44 L 230.937 233.44 C 228.273 235.475 224.458 234.965 222.423 232.301 Z"
                                        style="stroke:none;fill:#E6A43B;stroke-miterlimit:10;" />
                                    <path d="M 197.112 254.141 L 142.884 183.163 C 140.849 180.5 141.359 176.685 144.023 174.649 L 144.023 174.649 C 146.686 172.614 150.501 173.124 152.537 175.788 L 206.765 246.766 C 208.8 249.43 208.29 253.245 205.626 255.28 L 205.626 255.28 C 202.962 257.315 199.147 256.805 197.112 254.141 Z"
                                        style="stroke:none;fill:#E6A43B;stroke-miterlimit:10;" />
                                    <path d="M 160.596 236.603 L 232.458 183.553 C 235.155 181.562 238.962 182.135 240.953 184.832 L 240.953 184.832 C 242.944 187.529 242.37 191.335 239.673 193.326 L 167.811 246.377 C 165.114 248.368 161.308 247.794 159.317 245.097 L 159.317 245.097 C 157.326 242.4 157.899 238.594 160.596 236.603 Z"
                                        style="stroke:none;fill:#E6A43B;stroke-miterlimit:10;" />
                                </g>
                            </g>
                        </svg>
                        <input class="input--home" placeholder="search" type="text" style="margin-left: 15px;">
                    </div>
                    <div class="navbarRightMenu">
                        <a href="profile.php">
                            <div class="face-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate;width: 40px;height: 40px;"
                                    viewBox="0 0 100 125" width="100" height="125">
                                    <defs>
                                        <clipPath id="_clipPath_Bjj3T8W0Qg2ijcImIzIHyCRqgE3b2Pqk">
                                            <rect width="100" height="125"></rect>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#_clipPath_Bjj3T8W0Qg2ijcImIzIHyCRqgE3b2Pqk)">
                                        <g id="Group">
                                            <g id="Group">
                                                <g id="Group">
                                                    <path d=" M 50 3 C 77.313 3 99.45 25.247 99.45 52.45 C 99.45 79.763 77.203 101.9 50 101.9 C 22.797 101.9 0.55 79.763 0.55 52.45 C 0.55 25.137 22.687 3 50 3 Z  M 94.604 52.45 C 94.604 27.89 74.56 7.846 50 7.846 C 25.44 7.846 5.396 27.89 5.396 52.45 C 5.396 77.01 25.44 97.054 50 97.054 C 74.56 97.054 94.604 77.01 94.604 52.45 Z "
                                                        fill="rgb(0,0,0)"></path>
                                                    <path d=" M 73.789 40.225 L 73.789 48.155 C 73.789 49.807 72.467 51.239 70.705 51.239 C 68.943 51.239 67.621 49.917 67.621 48.155 L 67.621 40.225 C 67.621 38.573 68.943 37.141 70.705 37.141 C 72.467 37.141 73.789 38.573 73.789 40.225 Z "
                                                        fill="rgb(0,0,0)"></path>
                                                    <path d=" M 68.502 72.604 C 69.494 73.596 69.494 75.138 68.502 76.019 C 63.657 80.864 57.159 83.618 50.441 83.618 L 49.559 83.618 C 42.841 83.618 36.454 80.975 31.498 76.019 C 30.506 75.027 30.506 73.486 31.498 72.604 C 32.489 71.613 34.031 71.613 34.912 72.604 C 38.877 76.569 44.053 78.772 49.559 78.772 L 50.441 78.772 C 55.947 78.772 61.123 76.569 65.088 72.604 C 65.969 71.723 67.511 71.723 68.502 72.604 Z "
                                                        fill="rgb(0,0,0)"></path>
                                                    <path d=" M 53.414 40.225 L 53.414 56.965 C 53.414 61.921 49.449 65.886 44.493 65.886 L 43.943 65.886 C 42.621 65.886 41.52 64.785 41.52 63.463 C 41.52 62.142 42.621 61.04 43.943 61.04 L 44.493 61.04 C 46.696 61.04 48.568 59.168 48.568 56.965 L 48.568 40.225 C 48.568 38.904 49.67 37.802 50.991 37.802 C 52.313 37.802 53.414 38.904 53.414 40.225 Z "
                                                        fill="rgb(0,0,0)"></path>
                                                    <path d=" M 30.727 40.225 L 30.727 48.155 C 30.727 49.807 29.405 51.239 27.643 51.239 C 25.991 51.239 24.559 49.917 24.559 48.155 L 24.559 40.225 C 24.559 38.573 25.881 37.141 27.643 37.141 C 29.405 37.252 30.727 38.573 30.727 40.225 Z "
                                                        fill="rgb(0,0,0)"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </a>
                                            <?php if($_session == 1): ?>

                        <a href="logout.php">
                            <div style="margin:5px 0">
                            <svg xmlns="http://www.w3.org/2000/svg"isolation="isolate" width="40px" height="40" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><path fill="none" stroke="#000000" stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" d="M71.31,71.294  c-11.761,11.761-30.828,11.761-42.589,0s-11.761-30.828,0-42.589s30.828-11.761,42.589,0"/><line fill="none" stroke="#000000" stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" x1="90" y1="50" x2="50.015" y2="50"/><polyline fill="none" stroke="#000000" stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" points="81.957,60.647   92.604,50 81.957,39.353 "/><line fill="none" stroke="#000000" stroke-width="5" stroke-linecap="round" stroke-miterlimit="10" x1="92.604" y1="50" x2="92.604" y2="50"/><circle fill="#000000" stroke="#000000" stroke-width="5" stroke-miterlimit="10" cx="50.015" cy="50" r="12.485"/></svg>
                            </div>
                        </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </nav>
    </header>
    <section id="">
        <div class="homeWrapper">
            <div class="homeWrapper__leftMenu">
                <div class="feedWrapper">
                    <!-- <div class="feedHighlights">
                        <div class="feedHighlights--items">

                        </div>
                        <div class="feedHighlights--items">

                        </div>
                        <div class="feedHighlights--items">

                        </div>
                    </div> -->
                    <div class="feedContent">
                        <div class="feedCreateStatus">

                        </div>
                        <div>
                                               <!--  -->
            <?php $_SQL = "SELECT posts.id_user  AS id_user_post, users.name AS fullname, users.username AS username, posts.id AS idpost, posts.post AS posted
                           FROM users, posts  WHERE posts.id_user = users.id
                           ORDER BY posts.id DESC";
            $aa = mysqli_query($conn, $_SQL);
            while($status = mysqli_fetch_array($aa)):
            ?>
                            <div class="articleFeed">
                                    <div class="articleFeed__header">
                                        <div class="postFeed">
                                            <div class="postAvatar">
                                                <img src="assets/images/toga.jpeg" class="" alt="">
                                            </div>
                                            <a href=""><?= $status['fullname'] ?></a>
                                        </div>
                                        <div class="postReply">
                                            <?php if($_session == 1 AND $status['id_user_post'] == $id_user): ?>
                                            <form method="post">
                                                <input name="postid" type="hidden" value="<?=$status['idpost']; ?>">
                                                <input type="submit" name="deletepost" value="Delete Post" style="color: #F44646; border-color: #F44646;" class="button--ghost red-ghost">
                                            </form>
                                                <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="articleFeed__footer">
                                        <div class="postDesc">
                                            <span>
                                                <span class="postDescOwner"><?= $status['fullname'] ?> - </span> <?= $status['posted'] ?></span>
                                        </div>
                                        <div class="postCommentShow">
                                            <!--  -->
                                            <?php
                                            $sqlcomment= "SELECT users.name AS namauser, comments.comment AS komentar
                                             FROM users, comments
                                             WHERE comments.id_post = $status[idpost] AND comments.id_user = users.id";
                                            $parafans = mysqli_query($conn, $sqlcomment);
                                            while($lambeturah = mysqli_fetch_array($parafans)): ?>
                                            <div class="postCommentShow__people">
                                                <div class="CommentAvatar">
                                                    <img src="assets/images/bg.png" alt="">
                                                </div>
                                                <span>
                                                    <b><?= $lambeturah['namauser'] ?></b>
                                                </span>
                                                <span><?= $lambeturah['komentar'] ?></span>
                                            </div>
                                            <?php endwhile ?>
                                            <!--  -->
                                            <div class="postCommentShow__people">
                                                <div class="CommentAvatar">
                                                    <img src="assets/images/toga.jpeg" alt="">
                                                </div>
                                                <span>
                                                    <b>Fahmi irsyad Khairi</b>
                                                </span>
                                                <span>paan kentod</span>
                                            </div>
                                            <div class="postCommentShow__people">
                                                <div class="CommentAvatar">
                                                    <img src="assets/images/bg4.jpg" alt="">
                                                </div>
                                                <span>
                                                    <b>Kyoto A</b>
                                                </span>
                                                <span>cyka b</span>
                                            </div>
                                        </div>
                                        <div class="replyInputWrapper">
                                            <form action="" method="post" name="replyComment">
                                                <input type="hidden" name="idpostcomment" value="<?=$status['idpost']; ?>">
                                                <input type="text" name="comment" class="replyInputWrapper__core" contenteditable="true" placeholder="reply here...">
                                                <input type="submit" name="commented" style="display:none;">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                <?php endwhile ?>

                                <!--  -->
                            <div class="articleFeed">
                                <div class="articleFeed__header">
                                    <div class="postFeed">
                                        <div class="postAvatar">
                                            <img src="assets/images/toga.jpeg" class="" alt="">
                                        </div>
                                        <a href="">Fahmi irsyad khairi</a>
                                    </div>
                                    <div class="postReply">
                                        <button style="color: #F44646; border-color: #F44646;" class="button--ghost red-ghost">Delete post</button>
                                    </div>
                                </div>
                                <div class="articleFeed__content">
                                    <div class="filterDown"></div>
                                    <div class="imageFeedContent">
                                        <img src="assets/images/food.jpg" alt="">
                                    </div>
                                    <div class="postLove">
                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" fill="white" viewBox="0 0 100 125" width="35px" x="0px" y="0px">
                                            <title>heart</title>
                                            <path d="M71.32,11.51A23.66,23.66,0,0,1,88,51.93l-1,1L61.19,78.79l-4.6,4.61h0l-1.68,1.68-2.38,2.38a3.63,3.63,0,0,1-5.1,0L45,85l-0.2-.21,0,0,0,0-6-6-1.48-1.46L13,53l-1-1A23.67,23.67,0,0,1,28.69,11.51a23.5,23.5,0,0,1,16.72,6.92l1,1L50,23l3.54-3.54,1-1a23.55,23.55,0,0,1,16.77-6.92m0-5A28.62,28.62,0,0,0,51,14.9l-1,1-1-1A28.68,28.68,0,0,0,8.39,55.46l1,1L35.24,82.32h0l6,6,0.1,0.11L43.9,91a8.63,8.63,0,0,0,12.17,0l2.38-2.37h0l6.28-6.28h0L90.55,56.5l1-1a28.67,28.67,0,0,0-20.26-49h0Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                                <div class="articleFeed__footer">
                                    <div class="postDesc">
                                        <span>
                                            <span class="postDescOwner">Fahmi irsyad khairi - </span> dolor sit amet consectetur adipisicing elit. Nihil,
                                            quisquam? Atque suscipit, dolor cumque necessitatibus qui, ex facilis modi deserunt
                                            obcaecati error.</span>
                                    </div>
                                    <div class="postCommentShow">
                                        <div class="postCommentShow__people">
                                            <div class="CommentAvatar">
                                                <img src="assets/images/bg.png" alt="">
                                            </div>
                                            <span>
                                                <b>Choirul Mh</b>
                                            </span>
                                            <span>heheheh...</span>
                                        </div>
                                        <div class="postCommentShow__people">
                                            <div class="CommentAvatar">
                                                <img src="assets/images/toga.jpeg" alt="">
                                            </div>
                                            <span>
                                                <b>Fahmi irsyad Khairi</b>
                                            </span>
                                            <span>paan kentod</span>
                                        </div>
                                        <div class="postCommentShow__people">
                                            <div class="CommentAvatar">
                                                <img src="assets/images/bg4.jpg" alt="">
                                            </div>
                                            <span>
                                                <b>Kyoto A</b>
                                            </span>
                                            <span>cyka b</span>
                                        </div>
                                    </div>
                                    <div class="replyInputWrapper">
                                        <form action="" name="replyComment">
                                        <input type="text" class="replyInputWrapper__core" contenteditable="true" placeholder="reply here...">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="articleFeed">
                                    <div class="articleFeed__header">
                                        <div class="postFeed">
                                            <div class="postAvatar">
                                                <img src="assets/images/toga.jpeg" class="" alt="">
                                            </div>
                                            <a href="">Fahmi irsyad khairi</a>
                                        </div>
                                        <div class="postReply">
                                                <button style="color: #F44646; border-color: #F44646;" class="button--ghost red-ghost">Delete post</button>

                                        </div>
                                    </div>
                                    <div class="articleFeed__footer">
                                        <div class="postDesc">
                                            <span>
                                                <span class="postDescOwner">Fahmi irsyad khairi - </span> dolor sit amet consectetur adipisicing elit. Nihil,
                                                quisquam? Atque suscipit, dolor cumque necessitatibus qui, ex facilis modi deserunt
                                                obcaecati error.</span>
                                        </div>
                                        <div class="postCommentShow">
                                            <div class="postCommentShow__people">
                                                <div class="CommentAvatar">
                                                    <img src="assets/images/bg.png" alt="">
                                                </div>
                                                <span>
                                                    <b>Choirul Mh</b>
                                                </span>
                                                <span>heheheh...</span>
                                            </div>
                                            <div class="postCommentShow__people">
                                                <div class="CommentAvatar">
                                                    <img src="assets/images/toga.jpeg" alt="">
                                                </div>
                                                <span>
                                                    <b>Fahmi irsyad Khairi</b>
                                                </span>
                                                <span>paan kentod</span>
                                            </div>
                                            <div class="postCommentShow__people">
                                                <div class="CommentAvatar">
                                                    <img src="assets/images/bg4.jpg" alt="">
                                                </div>
                                                <span>
                                                    <b>Kyoto A</b>
                                                </span>
                                                <span>cyka b</span>
                                            </div>
                                        </div>
                                        <div class="replyInputWrapper">
                                            <form action="" name="replyComment">
                                                <input type="text" class="replyInputWrapper__core" contenteditable="true" placeholder="reply here...">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <div class="articleFeed">
                                <div class="articleFeed__header">
                                    <div class="postFeed">
                                        <div class="postAvatar">
                                            <img src="assets/images/toga.jpeg" class="" alt="">
                                        </div>
                                        <a href="">Fahmi irsyad khairi</a>
                                    </div>
                                    <div class="postReply">
                                            <button style="color: #F44646; border-color: #F44646;" class="button--ghost red-ghost">Delete post</button>
                                    </div>
                                </div>
                                <div class="articleFeed__content">
                                    <div class="filterDown"></div>
                                    <div class="imageFeedContent">
                                        <iframe width="654" height="480" src="https://www.youtube.com/embed/OC7cNS0GINo" frameborder="0" gesture="media" allowfullscreen></iframe>
                                    </div>
                                    <div class="postLove">
                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" fill="white" viewBox="0 0 100 125" width="35px" x="0px" y="0px">
                                            <title>heart</title>
                                            <path d="M71.32,11.51A23.66,23.66,0,0,1,88,51.93l-1,1L61.19,78.79l-4.6,4.61h0l-1.68,1.68-2.38,2.38a3.63,3.63,0,0,1-5.1,0L45,85l-0.2-.21,0,0,0,0-6-6-1.48-1.46L13,53l-1-1A23.67,23.67,0,0,1,28.69,11.51a23.5,23.5,0,0,1,16.72,6.92l1,1L50,23l3.54-3.54,1-1a23.55,23.55,0,0,1,16.77-6.92m0-5A28.62,28.62,0,0,0,51,14.9l-1,1-1-1A28.68,28.68,0,0,0,8.39,55.46l1,1L35.24,82.32h0l6,6,0.1,0.11L43.9,91a8.63,8.63,0,0,0,12.17,0l2.38-2.37h0l6.28-6.28h0L90.55,56.5l1-1a28.67,28.67,0,0,0-20.26-49h0Z"
                                            />
                                        </svg>
                                    </div>
                                </div>
                                <div class="articleFeed__footer">
                                    <div class="postDesc">
                                        <span>
                                            <span class="postDescOwner">Fahmi irsyad khairi - </span> dolor sit amet consectetur adipisicing elit. Nihil,
                                            quisquam? Atque suscipit, dolor cumque necessitatibus qui, ex facilis modi deserunt
                                            obcaecati error.</span>
                                    </div>
                                    <div class="postCommentShow">
                                        <div class="postCommentShow__people">
                                            <div class="CommentAvatar">
                                                <img src="assets/images/bg.png" alt="">
                                            </div>
                                            <span>
                                                <b>Choirul Mh</b>
                                            </span>
                                            <span>heheheh...</span>
                                        </div>
                                        <div class="postCommentShow__people">
                                            <div class="CommentAvatar">
                                                <img src="assets/images/toga.jpeg" alt="">
                                            </div>
                                            <span>
                                                <b>Fahmi irsyad Khairi</b>
                                            </span>
                                            <span>paan kentod</span>
                                        </div>
                                        <div class="postCommentShow__people">
                                            <div class="CommentAvatar">
                                                <img src="assets/images/bg4.jpg" alt="">
                                            </div>
                                            <span>
                                                <b>Kyoto A</b>
                                            </span>
                                            <span>cyka b</span>
                                        </div>
                                    </div>
                                    <div class="replyInputWrapper">
                                            <form action="" name="replyComment">
                                                    <input type="text" class="replyInputWrapper__core" contenteditable="true" placeholder="reply here...">
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeWrapper__rightMenu">
                <div class="recomendWrapper">
                    <div class="recomendWrapper__create">
                    <?php if($_session == 1): ?>
                        <a href="" id="postingAdd" class="button-blue">
                            Buat postingan baru
                        </a>
                    <?php else: ?>
                        <a href="index.php" class="button-blue">
                          Login untuk membuat Post
                        </a>
                    <?php endif ?>
                    </div>
                    <div class="recomendWrapper__friends">
                        <?php if($_session == 1): ?>
                        <div class="recomendFriends__header">
                            <h4>Your friends list</h4>
                        </div>
                        <div class="recommendFriends__content">
                            <div class="friendStickProfile">
                                <div class="friendStickProfile__avatar">
                                    <img src="assets/images/bg.png" alt="">
                                </div>
                                <div class="friendStickProfile__title">
                                    <h5>Choirul Mh</h5>
                                    <span>@zbedjo</span>
                                </div>
                            </div>
                            <div class="friendStickProfile">
                                <div class="friendStickProfile__avatar">
                                    <img src="assets/images/toga.jpeg" alt="">
                                </div>
                                <div class="friendStickProfile__title">
                                    <h5>Fahmi irsyad khairi</h5>
                                    <span>@pampam</span>
                                </div>
                            </div>
                            <div class="friendStickProfile">
                                <div class="friendStickProfile__avatar">
                                    <img src="assets/images/love.jpg" alt="">
                                </div>
                                <div class="friendStickProfile__title">
                                    <h5>Cyntia</h5>
                                    <span>@cpy</span>
                                </div>
                            </div>
                        </div>
                         <?php endif ?>
                    </div>
                    <div class="recomendWrapper__friends">
                            <div class="recomendFriends__header">
                                <h4>Might friends you know</h4>
                            </div>
                            <div class="recommendFriends__content">
            <?php $_SQLf = "SELECT * FROM users WHERE NOT id = $id_user ORDER BY rand() DESC";
            $friends = mysqli_query($conn, $_SQLf);
            while($friend = mysqli_fetch_array($friends)):
                                    ?>
                                <div class="friendStickProfile">
                                    <div class="friendStickProfile__avatar">
                                        <img src="assets/images/bg.png" alt="">
                                    </div>
                                    <div class="friendStickProfile__title">
                                        <h5><?= ucwords($friend['name']) ?></h5>
                                        <span><?= '@'.$friend['username'];?></span>
                                    </div>
                                </div>
                                <?php endwhile ?>
                                <div class="friendStickProfile">
                                        <div class="friendStickProfile__avatar">
                                            <img src="assets/images/bg.png" alt="">
                                        </div>
                                        <div class="friendStickProfile__title">
                                            <h5>Sakura mawada Warohma</h5>
                                            <span>@zbedjo</span>
                                        </div>
                                    </div>
                                <div class="friendStickProfile">
                                    <div class="friendStickProfile__avatar">
                                        <img src="assets/images/toga.jpeg" alt="">
                                    </div>
                                    <div class="friendStickProfile__title">
                                        <h5>Fahmi irsyad khairi</h5>
                                        <span>@pampam</span>
                                    </div>
                                </div>
                                <div class="friendStickProfile">
                                    <div class="friendStickProfile__avatar">
                                        <img src="assets/images/love.jpg" alt="">
                                    </div>
                                    <div class="friendStickProfile__title">
                                        <h5>Cyntia</h5>
                                        <span>@cpy</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
<script>
    $(document).ready(function () {
        // $('#replyPopup').hide();
        // $('#replyAdd').click(function () {
        //     $('#replyPopup').toggle();
        //     return false;
        // });
        // $('#replyPostClose').click(function () {
        //     $('#replyPopup').hide();
        //     return false;
        // });
        $('#createPostPopup').hide();
        $('#postingAdd').click(function () {
            $('#createPostPopup').toggle();
            return false;
        });
        $('#createPostClose').click(function () {
            $('#createPostPopup').hide();
            return false;
        });
    });
</script>
<script>
    $(document).ready(function () {
        if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function (e) {
                var files = e.target.files,
                    filesLength = files.length;
                for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function (e) {
                        var file = e.target;
                        $("<span class=\"pip\">" +
                            "<img class=\"imageThumb\" src=\"" + e.target.result +
                            "\" title=\"" + file.name + "\"/>" +
                            "<br/><span class=\"remove\">Remove image</span>" +
                            "</span>").insertAfter("#files");
                        $(".remove").click(function () {
                            $(this).parent(".pip").remove();
                        });
                    });
                    fileReader.readAsDataURL(f);
                }
            });
        } else {
            alert("Your browser doesn't support to File API kasian kentod")
        }
    });
</script>

</html>