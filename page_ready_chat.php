<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<div id="page-content">
    <!-- Chat Header -->
    <div class="content-header">
        <div class="header-section">
            <h1>
                <i class="fa fa-comments"></i>Chat<br><small>Your Social Center</small>
            </h1>
        </div>
    </div>
    <ul class="breadcrumb breadcrumb-top">
        <li>Pages</li>
        <li><a href="">Chat</a></li>
    </ul>
    <!-- END Chat Header -->

    <!-- Chat Block -->
    <div class="block">
        <!-- Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <div class="btn-group btn-group-sm">
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Status"><i class="fa fa-cog"></i></a>
                    <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                        <li class="active">
                            <a href="javascript:void(0)"><i class="fa fa-check pull-right"></i>Online</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-circle pull-right"></i>Away</a>
                            <a href="javascript:void(0)"><i class="fa fa-circle pull-right"></i>Busy</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-power-off pull-right text-muted"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <h2><i class="fa fa-pencil animation-pulse"></i> <strong>Shirley</strong> Wells</h2>
        </div>
        <!-- END Title -->

        <!-- Content -->
        <div class="chatui-container block-content-full">
            <!-- People -->
            <div class="chatui-people themed-background-dark">
                <div class="chatui-people-scroll">
                    <!-- Online -->
                    <h2 class="chatui-header"><i class="fa fa-circle text-success pull-right"></i><strong>Online</strong></h2>
                    <div class="list-group">
                        <a href="javascript:void(0)" class="list-group-item active">
                            <span class="badge">2</span>
                            <img src="img/placeholders/avatars/avatar6.jpg" alt="Avatar" class="img-circle">
                            <h5 class="list-group-item-heading"><strong>Shirley</strong> Wells</h5>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                            <span class="badge">5</span>
                            <img src="img/placeholders/avatars/avatar9.jpg" alt="Avatar" class="img-circle">
                            <h5 class="list-group-item-heading"><strong>Craig</strong> West</h5>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                            <span class="badge">1</span>
                            <img src="img/placeholders/avatars/avatar10.jpg" alt="Avatar" class="img-circle">
                            <h5 class="list-group-item-heading"><strong>Brenda</strong> Silva</h5>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                            <img src="img/placeholders/avatars/avatar15.jpg" alt="Avatar" class="img-circle">
                            <h5 class="list-group-item-heading"><strong>George</strong> Peterson</h5>
                        </a>
                    </div>
                    <!-- END Online -->

                    <!-- Away -->
                    <hr>
                    <h2 class="chatui-header"><i class="fa fa-circle text-warning pull-right"></i><strong>Away</strong></h2>
                    <div class="list-group">
                        <a href="javascript:void(0)" class="list-group-item">
                            <img src="img/placeholders/avatars/avatar4.jpg" alt="Avatar" class="img-circle">
                            <h5 class="list-group-item-heading"><strong>John</strong> West</h5>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                            <img src="img/placeholders/avatars/avatar16.jpg" alt="Avatar" class="img-circle">
                            <h5 class="list-group-item-heading"><strong>Matteo</strong> Galli</h5>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                            <span class="badge">6</span>
                            <img src="img/placeholders/avatars/avatar8.jpg" alt="Avatar" class="img-circle">
                            <h5 class="list-group-item-heading"><strong>Dimitri</strong> Robin</h5>
                        </a>
                    </div>
                    <!-- END Away -->

                    <!-- Busy -->
                    <hr>
                    <h2 class="chatui-header"><i class="fa fa-circle text-danger pull-right"></i><strong>Busy</strong></h2>
                    <div class="list-group">
                        <a href="javascript:void(0)" class="list-group-item">
                            <img src="img/placeholders/avatars/avatar5.jpg" alt="Avatar" class="img-circle">
                            <h5 class="list-group-item-heading"><strong>Louis</strong> Peters</h5>
                        </a>
                        <a href="javascript:void(0)" class="list-group-item">
                            <span class="badge">4</span>
                            <img src="img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle">
                            <h5 class="list-group-item-heading"><strong>Julia</strong> Warren</h5>
                        </a>
                    </div>
                    <!-- END Busy -->
                </div>
            </div>
            <!-- END People -->

            <!-- Talk -->
            <div class="chatui-talk">
                <div class="chatui-talk-scroll">
                    <ul>
                        <li class="text-center"><small>yesterday, 23:10</small></li>
                        <li class="chatui-talk-msg">
                            <img src="img/placeholders/avatars/avatar6.jpg" alt="Avatar" class="img-circle chatui-talk-msg-avatar"> Hey admin?
                        </li>
                        <li class="chatui-talk-msg">
                            <img src="img/placeholders/avatars/avatar6.jpg" alt="Avatar" class="img-circle chatui-talk-msg-avatar"> How are you?
                        </li>
                        <li class="text-center"><small>just now</small></li>
                        <li class="chatui-talk-msg chatui-talk-msg-highlight themed-border">
                            <img src="img/placeholders/avatars/avatar2.jpg" alt="Avatar" class="img-circle chatui-talk-msg-avatar"> I'm fine, thanks!
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Talk -->

            <!-- Input -->
            <div class="chatui-input">
                <form action="page_ready_chat.php" method="post" class="form-horizontal form-control-borderless remove-margin">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                        <input type="text" id="chatui-message" name="chatui-message" class="form-control input-lg" placeholder="Type a message and hit enter..">
                    </div>
                </form>
            </div>
            <!-- END Input -->
        </div>
        <!-- END Content -->
    </div>
    <!-- END Chat Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyChat.js"></script>
<script>$(function(){ ReadyChat.init(); });</script>

<?php include 'inc/template_end.php'; ?>