  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="https://adminlte.io">PSCD</a>.</strong> All rights
    reserved.
  </footer>

  <aside class="control-sidebar control-sidebar-dark"></aside>
  
</div>
<!-- ./wrapper -->

<div class="modal fade" tabindex="-1" role="dialog" id="changePassword">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Change password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div id="change-password-status" class="alert alert-danger d-none form-group row" role="alert"> 
              <button type="button" class="close hide" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
              <p class="message"></p>
          </div>
          <div class="form-group row">
            <label for="current_password" class="col-sm-4 control-label">Current Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="current_password" placeholder="Password">
            </div>
          </div>
          <div class="form-group row form-group-pass">
            <label for="new_password" class="col-sm-4 control-label">New Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="new_password" placeholder="New Password">
            </div>
          </div>
          <div class="form-group row form-group-pass">
            <label for="confirm_password" class="col-sm-4 control-label">Confirm Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password">
              <span id="error-confirm-password" class="help-block"></span>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="savePassword">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="<?php echo VendorURI; ?>almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo LibsURI; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo VendorURI; ?>almasaeed2010/adminlte/dist/js/adminlte.min.js"></script>

<?php echo vendor_html_helper::_jsFooter(); ?>
</body>
</html>