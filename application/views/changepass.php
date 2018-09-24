
<div class="wells">

    <div class="panel panel-info" style="padding: 8px;">
        <div class="panel-heading">
            <div class="panel-title">
                <i class="fa fa-print"></i> CHANGE PASSWORD
                <span class="pull-right" id="close" style="cursor:pointer;"><i class="glyphicon glyphicon-off"></i></span>
            </div>
        </div>
        <br />

     <form role="form" method="post" action="<?php echo base_url('user/updateUser'); ?>">
                          
          <div class="form-group">
              <select class="form-control" name="changename"> 

                <option value="<?php echo $this->session->userdata('user_id'); ?>"><?php echo $this->session->userdata('user_name'); ?></option>

              </select>
          </div>

          <div class="form-group">
              <input class="form-control" placeholder="New Password" name="nwpass" id="nwpass" type="password">
          </div>

          <div class="form-group">
              <input class="form-control" placeholder="Confirm New Password" id="nwcpass" type="password">
          </div>

          <input class="btn btn-lg btn-primary btn-block" type="submit" value="Change Password" id="btnchgpass" name="changepass" >
                 
    </form>

    <script type="text/javascript">
    	$(function(){

            $(document).on('click','#btnchgpass',function(){

                var nwpass=$("#nwpass").val();
                var nwcpass=$("#nwcpass").val();

                if(nwpass=='' || nwcpass==''){
                    error("Please Fill All Field...");
                    return false;
                }

                if(nwpass != nwcpass){
                    error("Password is not match...");
                    return false;
                }
            });

            $.pgwModal("close");
	    });

    </script>
</div>