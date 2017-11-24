<?php

    // Memasukkan semua fungsi lewat file init.php
    require_once('core/init.php');

    // Mengecek Session user dan mengubah variable session
    $_session = 0;
    if (getSession('user')) {
        $_session = 1;
    } else {
        $_session = 0;
    }

    require_once('templates/partial/head.php'); // Memasukkan File Partial Bagian Header

?>
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
                            <div class="articleFeed">
                                <div class="articleFeed__header">
                                    <div class="postFeed">
                                        <div class="postAvatar">
                                            <img src="assets/images/toga.jpeg" class="" alt="">
                                        </div>
                                        <a href="">Fahmi irsyad khairi</a>
                                    </div>
                                    <div class="postReply">
                                        <button id="replyAdd" class="button--ghost">Reply post</button>
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
                                        <button id="" class="button--ghost">Reply post</button>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="homeWrapper__rightMenu">
                <div class="recomendWrapper">
                    <div class="recomendWrapper__create">
                        <a href="" id="postingAdd" class="button-blue">
                            Buat postingan baru
                        </a>
                    </div>
                    <div class="recomendWrapper__friends">
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
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
<script>
    $(document).ready(function () {
        $('#replyPopup').hide();
        $('#replyAdd').click(function () {
            $('#replyPopup').toggle();
            return false;
        });
        $('#replyPostClose').click(function (){
            $('#replyPopup').hide();
            return false;
        });
        $('#divB-holder').hide();
        $('#divB-link').click(function () {
            $('#divB').toggle(400);
            return false;
        });
    });
</script>
<script>

</script>

</html>