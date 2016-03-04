<?php include 'inc/db.php';?>
<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<div id="page-content" style="margin-top: -20px; min-height: 1000px;">
    <?php include 'inc/page_head.php'; ?>
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Create New</strong> Client</h2>
            </div>
            <!-- END Form Elements Title -->

            <!-- Basic Form Elements Content -->
            <form action="api.php" method="get" class="form-horizontal form-bordered">
                <input type="hidden" name="action" value="insert_client">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-text-input">Name</label>
                    <div class="col-md-9">
                        <input type="text" id="example-text-input" name="name" class="form-control" placeholder="Text">
                        <span class="help-block">ex: Jhon Smith</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-email-input">Email</label>
                    <div class="col-md-9">
                        <input type="email" id="example-email-input" name="email" class="form-control" placeholder="Enter Email">
                        <span class="help-block">ex: jhon.smith@webmail.com</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-password-input">Address</label>
                    <div class="col-md-9">
                        <input type="text" id="example-password-input" name="address" class="form-control" placeholder="Address">
                        <span class="help-block">ex: 8th Str. - Michigan</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-text-input">Cell Phone</label>
                    <div class="col-md-9">
                        <input type="tel" id="example-input" name="cell" class="form-control" placeholder="Enter Cell">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-text-input">Telephone</label>
                    <div class="col-md-9">
                        <input type="tel" id="example-input" name="tel" class="form-control" placeholder="Enter Tel">
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
                </div>
            </form>
            <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
    </div>

</div>