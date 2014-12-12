    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
            	<!-- Header -->
            	<div class="panel-heading">
                	<div class="panel-title">Sign In</div>
                </div>
                <!-- End Header -->     
            	<div style="padding-top:30px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
                    </div> 
                    	<!-- Form -->
                        <form id="loginform" method="post" class="form-horizontal" role="form" action="<?php echo HOME_PAGE ."/login";?>">  
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <!-- Username -->
                                <input id="login-username" type="text" class="form-control" name="username" placeholder="username">
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <!-- Password -->
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                	<input type="submit" id="btn-login" class="btn btn-success" value="Login"  />
                                </div>
                                <!-- End Button -->
                            </div>
                        </form>   
                        <!-- End Form -->  
        	</div>                     
    	</div>  
    </div>
    