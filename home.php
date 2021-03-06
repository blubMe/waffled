<?php
    require_once('core/init.php');
    $_session = 0;
    if (getSession('user')) {
        $_session = 1;
    } else {
        $_session = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sosial Hukum</title>
    <link rel="stylesheet" href="lib/css/style.css">
    <script src="lib/js/vanilla.min.js"></script>
</head>

<body>
    <header class="homePageHeader">
        <nav class="homePageNavbar">
            <div class="homePageNavbar__wrapper">
                <div class="homePageNavbar--items">
                    <div class="logo--small">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate"
                            viewBox="0 0 300 300" width="40" height="40">
                            <defs>
                                <clipPath id="_clipPath_MFMQeZITMfVg9AvXI7AkjxBm0EF0lAqf">
                                    <rect width="300" height="300" />
                                </clipPath>
                            </defs>
                            <g clip-path="url(#_clipPath_MFMQeZITMfVg9AvXI7AkjxBm0EF0lAqf)">
                                <path d=" M 1.563 151.563 C 1.563 69.638 68.075 3.125 150 3.125 C 231.925 3.125 298.437 69.638 298.437 151.562 C 298.438 233.487 231.925 300 150 300 C 68.075 300 1.563 233.487 1.563 151.563 Z "
                                    fill="rgb(0,130,255)" />
                                <clipPath id="_clipPath_UeOLf7w0FYxgirY9mYCZjuFOZqamEC3Q">
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
                        <a href="">
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
                            <div class="articleFeed">
                                <div class="articleFeed__header">
                                    <div class="postFeed">
                                        <div class="postAvatar">
                                            <img src="assets/images/toga.jpeg" class="" alt="">
                                        </div>
                                        <a href="">Fahmi irsyad khairi</a>
                                    </div>
                                    <div class="postReply">
                                        <button class="button--ghost">Reply post</button>
                                    </div>
                                </div>
                                <div class="articleFeed__content">
                                    <div class="filterDown"></div>
                                    <div class="imageFeedContent">
                                        <img src="assets/images/food.jpg" alt="">
                                    </div>
                                    <div class="postLove">
                                            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" fill="white" viewBox="0 0 100 125" width="35px" x="0px" y="0px"><title>heart</title><path d="M71.32,11.51A23.66,23.66,0,0,1,88,51.93l-1,1L61.19,78.79l-4.6,4.61h0l-1.68,1.68-2.38,2.38a3.63,3.63,0,0,1-5.1,0L45,85l-0.2-.21,0,0,0,0-6-6-1.48-1.46L13,53l-1-1A23.67,23.67,0,0,1,28.69,11.51a23.5,23.5,0,0,1,16.72,6.92l1,1L50,23l3.54-3.54,1-1a23.55,23.55,0,0,1,16.77-6.92m0-5A28.62,28.62,0,0,0,51,14.9l-1,1-1-1A28.68,28.68,0,0,0,8.39,55.46l1,1L35.24,82.32h0l6,6,0.1,0.11L43.9,91a8.63,8.63,0,0,0,12.17,0l2.38-2.37h0l6.28-6.28h0L90.55,56.5l1-1a28.67,28.67,0,0,0-20.26-49h0Z"/></svg>
                                    </div>
                                </div>
                                <div class="articleFeed__footer">
                                    <div class="postDesc">
                                        <span><span class="postDescOwner">Fahmi irsyad khairi - </span> dolor sit amet consectetur adipisicing elit. Nihil, quisquam? Atque suscipit, dolor cumque necessitatibus qui, ex facilis modi deserunt obcaecati error.</span>
                                    </div>
                                    <div class="postCommentShow">
                                        <div class="postCommentShow__people">
                                            <div class="CommentAvatar">
                                                <img src="assets/images/bg.png" alt="">
                                            </div>
                                            <span><b>Choirul Mh</b></span>
                                            <span>heheheh...</span>
                                        </div>
                                        <div class="postCommentShow__people">
                                                <div class="CommentAvatar">
                                                    <img src="assets/images/toga.jpeg" alt="">
                                                </div>
                                                <span><b>Fahmi irsyad Khairi</b></span>
                                                <span>paan kentod</span>
                                            </div>
                                            <div class="postCommentShow__people">
                                                    <div class="CommentAvatar">
                                                        <img src="assets/images/bg4.jpg" alt="">
                                                    </div>
                                                    <span><b>Kyoto A</b></span>
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
                                            <button class="button--ghost">Reply post</button>
                                        </div>
                                    </div>
                                    <div class="articleFeed__content">
                                        <div class="filterDown"></div>
                                        <div class="imageFeedContent">
                                            <iframe width="654" height="480" src="https://www.youtube.com/embed/OC7cNS0GINo" frameborder="0" gesture="media" allowfullscreen></iframe>
                                        </div>
                                        <div class="postLove">
                                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" fill="white" viewBox="0 0 100 125" width="35px" x="0px" y="0px"><title>heart</title><path d="M71.32,11.51A23.66,23.66,0,0,1,88,51.93l-1,1L61.19,78.79l-4.6,4.61h0l-1.68,1.68-2.38,2.38a3.63,3.63,0,0,1-5.1,0L45,85l-0.2-.21,0,0,0,0-6-6-1.48-1.46L13,53l-1-1A23.67,23.67,0,0,1,28.69,11.51a23.5,23.5,0,0,1,16.72,6.92l1,1L50,23l3.54-3.54,1-1a23.55,23.55,0,0,1,16.77-6.92m0-5A28.62,28.62,0,0,0,51,14.9l-1,1-1-1A28.68,28.68,0,0,0,8.39,55.46l1,1L35.24,82.32h0l6,6,0.1,0.11L43.9,91a8.63,8.63,0,0,0,12.17,0l2.38-2.37h0l6.28-6.28h0L90.55,56.5l1-1a28.67,28.67,0,0,0-20.26-49h0Z"/></svg>
                                        </div>
                                    </div>
                                    <div class="articleFeed__footer">
                                        <div class="postDesc">
                                            <span><span class="postDescOwner">Fahmi irsyad khairi - </span> dolor sit amet consectetur adipisicing elit. Nihil, quisquam? Atque suscipit, dolor cumque necessitatibus qui, ex facilis modi deserunt obcaecati error.</span>
                                        </div>
                                        <div class="postCommentShow">
                                            <div class="postCommentShow__people">
                                                <div class="CommentAvatar">
                                                    <img src="assets/images/bg.png" alt="">
                                                </div>
                                                <span><b>Choirul Mh</b></span>
                                                <span>heheheh...</span>
                                            </div>
                                            <div class="postCommentShow__people">
                                                    <div class="CommentAvatar">
                                                        <img src="assets/images/toga.jpeg" alt="">
                                                    </div>
                                                    <span><b>Fahmi irsyad Khairi</b></span>
                                                    <span>paan kentod</span>
                                                </div>
                                                <div class="postCommentShow__people">
                                                        <div class="CommentAvatar">
                                                            <img src="assets/images/bg4.jpg" alt="">
                                                        </div>
                                                        <span><b>Kyoto A</b></span>
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
                        <a href="" class="button-blue">
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

</html>