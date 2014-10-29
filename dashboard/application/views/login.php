<?php
/**
 * Created by PhpStorm.
 * User: LEEYOOL
 * Date: 10/20/14
 * Time: 2:12 PM
 */
?>
<div id="login-container">
    <div class="panel panel-default login-form">
        <div class="panel-heading">Sign in</div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="do_login/" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Username:</label>
                    <div class="col-sm-9">
                        <input type="text" name="txt_username" class="form-control" id="inputEmail3" placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" name="btn_login" class="btn btn-default">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
