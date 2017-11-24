<?php
require_once('core/init.php');

if ( !getSession('user') ) {
        header('location: index.php');
    }

    $id_user = selectAuth ('users', $_SESSION['user'])['id'];

        if (post('updateProfile')) {
            if ( !empty(trim(post('email'))) AND !empty(trim(post('fullname'))) ){
                uploadImage($_FILES['avatar'], $id_user);
                // die(var_dump($_FILES['avatar']));
                updateProfile(post('email'), post('fullname'), post('hobi'), post('bio'), post('website'), post('instagram'), $id_user );
            }
        }

    if (post('updatepassword')){
        if (trim(post('newpassword')) == trim(post('repeatpassword'))) {
            // die();
            updatePassword($id_user, post('repeatpassword'), post('oldpassword'));
        }
    }

    require_once('templates/partial/head.php'); // Memasukkan File Partial Bagian Header

?>
<form method="post" enctype="multipart/form-data">
    <div class="homeWrapper">
        <div class="homeWrapper__leftMenu paddingLeft">
            <div class="profileSettingWrapper">
                <div class="profileSettingWrapper__content">
                    <div class="profileSetting__header">
                        <div id="pf_foto" class="profileSettingHeader__images" style="background-image: url('assets/images/cover.jpg');" alt="">
                            <div class="profileSettingHeaderImages__header-upload">
                                    <div class="profileAvatar" style="left: 40%; border: 5px solid white; background: #eee;">
                                            <img id="profileAvatarUpload"src="assets/images/toga.jpeg" alt="gambar profile">
                                            <input id="file-2" type="file" name="avatar" id="file-2"class="inputfile changeImagebutton" style="z-index: 1!important;"/>
                                            <label style="top: 35px; left: 29px; position: absolute;" for="file-2"><svg xmlns="http://www.w3.org/2000/svg" fill="white" stroke="#7c7c7c" stroke-width=".5px" width="40" height="37" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span></span></label>
                                    </div>
                                <h4><?= "@".selectOneWhere('users', 'id', $id_user, 'username'); ?></h4>
                                <div class="coverEditButtonWrapper">
                                    <!-- <input id="uploadButtonCover" type="file" name="ImageUpload" class="changeImageCoverbutton" /> -->
                                    <input type="file" name="file-1[]" id="background" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple="">
                                    <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" fill="white" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span></span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profileSettting__content">
                         <div style="padding-left:7px; margin-bottom: 30px; padding-bottom: 10px; color:#7b7b7b;width: 100%; border-bottom: 1px solid #cecece;">
                                    <h5>General config</h5>
                            </div>
                        <div class="settingGroup">
                                <div class="settingGroup__label">
                                    <h4>Username</h4>
                                </div>
                                <div class="settingGroup__input">
                                    <input class="input--home-small" value="<?= selectOneWhere('users', 'id', $id_user, 'username'); ?>" type="text" placeholder="@pampam" readonly disabled>
                                </div>
                        </div>
                        <div class="settingGroup">
                            <div class="settingGroup__label">
                                <h4>Nama lengkap</h4>
                            </div>
                            <div class="settingGroup__input">
                                <input class="input--home-small" name="fullname" type="text" value="<?= ucwords(selectOneWhere('users', 'id', $id_user, 'name')); ?>" placeholder="fahmi irysad khairi">
                            </div>
                        </div>
                        <div class="settingGroup">
                            <div class="settingGroup__label">
                                <h4>Email</h4>
                            </div>
                            <div class="settingGroup__input">
                                <input class="input--home-small" name="email" type="email" value="<?= strtolower(selectOneWhere('users', 'id', $id_user, 'email')); ?>" placeholder="fahmi irysad khairi">
                            </div>
                        </div>
                        <div class="settingGroup">
                                <div class="settingGroup__label">
                                    <h4>Bio</h4>
                                </div>
                                <div class="settingGroup__input">
                                    <input class="input--home-small" name="bio" type="text" value="<?= selectOneWhere('users', 'id', $id_user, 'bio'); ?>" placeholder="professional producer , also can design UI/UX.">
                                </div>
                        </div>
                         <div class="settingGroup">
                                <div class="settingGroup__label">
                                    <h4>Hobi</h4>
                                </div>
                                <div class="settingGroup__input">
                                    <input class="input--home-small" name="hobi" type="text" value="<?= selectOneWhere('users', 'id', $id_user, 'hobby'); ?>" placeholder="swimming , ride bicycle and run.">
                                </div>
                        </div>
                        <div class="settingGroup">
                                <div class="settingGroup__label">
                                    <h4>Website</h4>
                                </div>
                                <div class="settingGroup__input">
                                    <input class="input--home-small" name="website" value="<?= selectOneWhere('users', 'id', $id_user, 'website'); ?>" type="text" placeholder="facebook.com/pampam_AMD">
                                </div>
                        </div>
                        <div class="settingGroup">
                                <div class="settingGroup__label">
                                    <h4>Instagram</h4>
                                </div>
                                <div class="settingGroup__input">
                                    <input class="input--home-small" name="instagram" value="<?= selectOneWhere('users', 'id', $id_user, 'instagram'); ?>"  type="text" placeholder="@fahmiirsyadk">
                                </div>
                        </div>
    </form>

                          <div style="padding-left:7px; margin-bottom: 30px; padding-bottom: 10px; color:#7b7b7b;width: 100%; border-bottom: 1px solid #cecece;">
                                <h5>Setting config</h5>
                        </div>
                        <form method="post">
                        <div class="settingGroup">
                                <div class="settingGroup__label">
                                    <h4>Old Password</h4>
                                </div>
                                <div class="settingGroup__input">
                                    <input name="oldpassword" class="input--home-small" type="password">
                                </div>
                        </div>
                        <div class="settingGroup">
                                <div class="settingGroup__label">
                                    <h4>New password</h4>
                                </div>
                                <div class="settingGroup__input">
                                    <input name="newpassword" class="input--home-small" type="password">
                                </div>
                        </div>
                        <div class="settingGroup">
                                <div class="settingGroup__label">
                                    <h4>Confirm password</h4>
                                </div>
                                <div class="settingGroup__input">
                                    <input name="repeatpassword" class="input--home-small" type="password">
                                </div>
                        </div>
                        <div style="display: flex;justify-content: flex-end;">
                        <input type="submit" name="updatepassword" class="button-blue" value="Update password">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="homeWrapper__rightMenu">
            <div class="barProfileSettingWrapper">
                <div class="recomendWrapper" style="padding-top: 0;">
                    <div class="recomendWrapper__create">
                           <input type="submit" name="updateProfile" class="button-blue" value="Update profile saya">
                            <a href="profile.php" class="button-red">
                                    Kembali
                            </a>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function () {
  $("#file-1").on("change", function(){
   var files = !!this.files ? this.files : [];
   if (!files.length || !window.FileReader) return; // Check if File is selected, or no FileReader support
   if (/^image/.test( files[0].type)){ //  Allow only image upload
    var ReaderObj = new FileReader(); // Create instance of the FileReader
    ReaderObj.readAsDataURL(files[0]); // read the file uploaded
    ReaderObj.onloadend = function(){ // set uploaded image data as background of div
    $("#pf_foto").css("background-image", "url("+this.result+")");
   }
  }else{
    alert("Upload an image");
  }
 });
// kesel bangsatttt :'''v codingan kek semut
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profileAvatarUpload').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file-2").change(function () {
        readURL(this);
    });
});
</script>
<script>
    var inputs = document.querySelectorAll( '.inputfile' );
Array.prototype.forEach.call( inputs, function( input )
{
	var label	 = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener( 'change', function( e )
	{
		var fileName = '';
		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else
			fileName = e.target.value.split( '\\' ).pop();

		if( fileName )
			label.querySelector( 'span' ).innerHTML = fileName;
		else
			label.innerHTML = labelVal;
	});
});
</script>
</html>