<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <?php echo $this->load->view('elements/head','',true) ?>
    <script type="text/javascript">
    <!--
            var CI = {
                    'site_url': '<?php echo site_url(); ?>/'
            };
    -->
    </script>
</head>
<body>

<div id="container">
    <!-- Fixed navbar -->
    <?php echo $this->load->view('elements/navbar','',true) ?>
    <div id = "body">
    <p>
        <div id="form_error_box"></div>
        <form role="form" id = "form_add">

            <table class="table table-bordered table-striped">
                <colgroup>
                    <col class="col-xs-1">
                    <col class="col-xs-7">
                </colgroup>
                <tbody>
                    <tr>
                        <td><strong>Add a new job</strong></td>
                    </tr>
                    <tr>
                        <td>Notify e-mail</td>
                        <td><?php echo $this->global_functions->get_user_email();?></td>
                    <tr>
                        <td>Yara Rules</td>
                        <td><pre autofocus id = "yara_rules" style = "height: 400px"></pre></td>
                    </tr>
                    <tr>
                    <td>

			  <input type="radio" name="operation_opt" value="1"> Repositories to scan<br>
			  <input type="radio" name="operation_opt" value="2"> List files and folders<br>
			  <input type="radio" name="operation_opt" value="3"> MD5 of files<br>

			</td>
                    <td>
						<input type="text" name = "yara_fileset_scan" placeholder="place the value">
					</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>  <button type = "submit" id = "form_add_job_submit" class = "btn btn-primary">Submit</button></td>
                    </tr>
                </tbody>
            </table>
        </form>



        <div style="clear:both"></div>
        
        <br/><br/><br/>
    </p>
    </div>
    <?php echo $this->load->view('elements/footer','',true) ?>
    <?php echo $this->load->view('elements/ace-editor','',true) ?>
</div>

</body>
</html>
