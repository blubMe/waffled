<?php

  // REQUIRED CORE FILE
  require_once('core/init.php');

    // Mendapatkan Session User dan jika tidakada session user maka ke halaman login
    if ( !getSession('user') ) {
        header('location: index.php');
    }

        $id_user = selectAuth ('users', $_SESSION['user'])['id'];

  require_once('templates/partial/head.php'); // Memasukkan File Partial Bagian Header

?>

    <div class="homeWrapper">
        <div class="homeWrapper--profile">
            <div class="homeWrapper--profile__header">
                    <div class="bgCoverProfile" style="background-image: url(assets/images/cover.jpg);">
                        <div class="filterDown"></div>
                        <div class="profileAvatar">
                            <img src="assets/images/toga.jpeg" alt="">
                        </div>
                    </div>
            </div>
            <div class="homeWrapper--profile__content">
                <h2><?= ucwords(selectOneWhere('users', 'id', $id_user, 'name')); ?></h2>
                <span class="usernameProfile"><?= "@".selectOneWhere('users', 'id', $id_user, 'username'); ?></span>
                <div class="bioProfile">
                    <p><q><?= selectOneWhere('users', 'id', $id_user, 'bio'); ?></q></p>
                </div>
                <div class="socialProfile">
                <?php  if(exist('users', 'website', $id_user)): ?>
                    <p class="socialProfile__facebook"><a target="_blank" href="https://<?= selectOneWhere('users', 'id', $id_user, 'website'); ?>"><?= selectOneWhere('users', 'id', $id_user, 'website'); ?></a></p>
                    |
                <?php endif ?>
                <?php  if(exist('users', 'instagram', $id_user)): ?>
                    <p class="socialProfile__instagram"><a target="_blank" href="https://www.instagram.com/<?= selectOneWhere('users', 'id', $id_user, 'instagram'); ?>">Instagram</a></p>
                <?php endif ?>

                </div>
                <div class="editProfileWrapper">
                        <a href="edit-profile.php" class="button--editProfile">Edit profile</a>
                </div>
            </div>
            <div class="homeWrapper--profile__footer">
                <div class="postProfileFeed__header">
                    <h1>Posts</h1>
                </div>
                <div class="postProfileFeed__content">
                    <div class="postProfileFeed--items">
                        <div class="postProfileFeedItems--avatar">
                            <img src="assets/images/toga.jpeg" alt="">
                        </div>
                        <div class="postProfileFeedItems--content">
                            <div class="postProfileFeedItems--images">
                                <img src="assets/images/food.jpg" alt="">
                            </div>
                            <div class="postProfileFeedItems--desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Im a producer also can cook something specials</p>
                            </div>
                        </div>
                    </div>
                    <div class="postProfileFeed--items">
                            <div class="postProfileFeedItems--avatar">
                                <img src="assets/images/toga.jpeg" alt="">
                            </div>
                            <div class="postProfileFeedItems--content">
                                <div class="postProfileFeedItems--images">
                                    <img src="assets/images/bg.png" alt="">
                                </div>
                                <div class="postProfileFeedItems--desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Im a producer also can cook something specials</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>