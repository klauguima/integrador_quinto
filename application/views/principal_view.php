<script src="<?= base_url(); ?>assets/js/feed.js"></script>
<div class="col-lg-9 pull-right">
    <div class="widget-container fluid-height">
        <form id="feed_form" enctype="multipart/form-data">
            <div class="heading tabs">
                <ul class="nav nav-tabs pull-right" data-tabs="tabs" id="tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#tab1"><i class="icon-comments"></i><span>Seus Comentários</span></a>
                    </li>
                </ul>
            </div>
            <div class="tab-content padded" id="my-tab-content">
                <div class="tab-pane active" id="tab1">
                    <textarea name='texto' class="form-control " placeholder="Share what's new..." rows="4"></textarea><br>
                    <input type="file" name="midias" id="upload_file"/><br>
                    <!--<span class="btn btn-success fileinput-button"><i class="fa fa-plus"></i><span>Add files...</span><input type="file" name="midias" id="upload_file"/></span>-->
                    <input type='submit' name="postar" value="Postar" class="btn btn-lg btn-block btn-primary"/>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-md-9">
    <div class="social-wrapper">
        <div id="social-container">
            <div class="item widget-container share-widget fluid-height clearfix">
                <form id="form_feed" enctype="multipart/form-data">
                    <div class="widget-content padded">
                        <textarea class="form-control" placeholder="Share what's new..." rows="4"></textarea>
                    </div>
                    <div class="clearfix">
                        <div class="col-xs-3 share-options active">
                            <input type="file" name="userfile" size="20"/>
                            <i class="icon-pencil"></i>
                            <p>
                                Text
                            </p>
                        </div>
                        <div class="col-xs-3 share-options">
                            <i class="icon-camera"></i>
                            <p>
                                Photo
                            </p>
                        </div>
                        <div class="col-xs-3 share-options">
                            <i class="icon-link"></i>
                            <p>
                                Link
                            </p>
                        </div>
                        <div class="col-xs-3 share-options">
                            <i class="icon-youtube-play"></i>
                            <p>
                                Video
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="item widget-container fluid-height profile-widget">
                <div class="widget-content padded">
                    <div class="profile-info clearfix">
                        <img width="70" height="70" class="social-avatar pull-left" src="<?= base_url(); ?>/assets/img/family_guy__peter.gif" />
                        <div class="profile-details">
                            <a class="user-name" href="">Cláudia</a>
                            <p>
                                Sharp&Nimble Designer
                            </p>
                            <em><i class="icon-map-marker"></i>Washington, D.C.</em>
                        </div>
                    </div>
                    <div class="profile-stats">
                        <div class="col-xs-4">
                            <a href="#">
                                <h2>
                                    245
                                </h2>
                            </a>
                            <p>
                                Posts
                            </p>
                        </div>
                        <div class="col-xs-4">
                            <a href="#">
                                <h2>
                                    150
                                </h2>
                            </a>
                            <p>
                                Amigos
                            </p>
                        </div>
                        <div class="col-xs-4">
                            <a href="#">
                                <h2>
                                    12
                                </h2>
                            </a>
                            <p>
                                Videos
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item widget-container fluid-height social-entry">
                <div class="widget-content padded">
                    <div class="profile-info clearfix">
                        <img width="50" height="50" class="social-avatar pull-left" src="<?= base_url(); ?>/assets/img/hetaliafangirl.gif" />
                        <div class="profile-details">
                            <a class="user-name" href="#">Stan Humanbot</a>
                            <p>
                                <em>2 days ago</em>
                            </p>
                        </div>
                    </div>
                    <p class="content">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                    </p>
                    <div class="btn btn-sm btn-default-outline">
                        <i class="icon-thumbs-up-alt"></i>
                    </div>
                    <div class="btn btn-sm btn-default-outline">
                        <i class="icon-mail-forward"></i>
                    </div>
                </div>
                <div class="comments padded">
                    <div class="comment">
                        <img width="40" height="40" class="social-avatar pull-left" src="<?= base_url(); ?>/assets/img/avatar-female.png" />
                        <div class="profile-details clearfix">
                            <a class="user-name" href="#">Fishy Robertson</a>
                            <p>
                                <em>1 day ago</em>
                            </p>
                        </div>
                        <p class="content">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                        </p>
                    </div>
                    <div class="comment">
                        <img width="40" height="40" class="social-avatar pull-left" src="<?= base_url(); ?>/assets/img/family_guy__peter.gif" />
                        <div class="profile-details clearfix">
                            <a class="user-name" href="#">John Smith</a>
                            <p>
                                <em>16 minutes ago</em>
                            </p>
                        </div>
                        <p class="content">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                        </p>
                    </div>
                    <form role="form">
                        <div class="form-group">
                            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
                        </div>
                    </form>
                </div>
            </div>
            <div class="item widget-container clearfix social-entry">
                <div class="widget-content">
                    <div class="profile-info clearfix padded">
                        <img width="50" height="50" class="social-avatar pull-left" src="<?= base_url(); ?>/assets/img/family_guy__peter.gif" />
                        <div class="profile-details">
                            <a class="user-name" href="#">Sad Franklin</a>
                            <p>
                                <em>12 days ago</em>
                            </p>
                        </div>
                    </div>
                    <img width="100%" class="social-content-media" src="<?= base_url(); ?>/assets/img/social-image.jpg" />
                    <div class="padded">
                        <p class="content">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Donec odio. Quisque volutpat mattis eros.
                        </p>
                        <div class="btn btn-sm btn-default-outline">
                            <i class="icon-thumbs-up-alt"></i>
                        </div>
                        <div class="btn btn-sm btn-default-outline">
                            <i class="icon-mail-forward"></i>
                        </div>
                    </div>
                </div>
                <div class="comments padded">
                    <form role="form">
                        <div class="form-group">
                            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
                        </div>
                    </form>
                </div>
            </div>
            <div class="item widget-container fluid-height clearfix social-entry">
                <div class="widget-content">
                    <div class="profile-info clearfix padded">
                        <img width="50" height="50" class="social-avatar pull-left" src="<?= base_url(); ?>/assets/img/hetaliafangirl.gif" />
                        <div class="profile-details">
                            <a class="user-name" href="#">Stan Humanbot</a>
                            <p>
                                <em>2 days ago</em>
                            </p>
                        </div>
                    </div>
                    <iframe allowfullscreen="" class="social-content-media" frameborder="0" height="200" mozallowfullscreen="" src="http://player.vimeo.com/video/16202331?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen="" width="100%"></iframe>
                    <div class="padded">
                        <p class="content">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Donec odio. Quisque volutpat mattis eros.
                        </p>
                        <div class="btn btn-sm btn-default-outline">
                            <i class="icon-thumbs-up-alt"></i>
                        </div>
                        <div class="btn btn-sm btn-default-outline">
                            <i class="icon-mail-forward"></i>
                        </div>
                    </div>
                </div>
                <div class="comments padded">
                    <form role="form">
                        <div class="form-group">
                            <input class="form-control" id="exampleInputEmail1" placeholder="Add a comment..." type="email">
                        </div>
                    </form>
                </div>
            </div>
            <!-- end Media Post -->