<div class="modal fade" id="addlicensetype">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h4 class="modal-title">Sajili Aina ya Leseni</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addLicensetypeForm">
          <!-- <input type="hidden" name="businessid" id="businessid" class="form-control"> -->
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="lnumber">Aina ya Leseni
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="ltype" id="ltype" class="form-control" placeholder="Ingiza Aina ya Leseni" required="required" style="border: solid 1px green;">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="restaurentnumber">Kiwango
                  <span class="text-danger">*</span>
                </label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Ingiza kiwanga cha Pesa" required="required" style="border: solid 1px green;">
              </div>
            </div>
          </div>
          <input type="hidden" name="publicIPa" id="publicIPa" value="<?php echo $jsIPConnect1; ?>">
          <input type="hidden" name="localIPa" id="localIPa" value="<?php echo $locIP1; ?>">

          <button class="btn btn-info">
            <span class="far fa-save"></span>&nbsp;
            Sajili
          </button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<div class="modal fade" id="editLicensetype">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-default">
        <h4 class="modal-title">Badili taarifa za Leseni</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editLicensetypeForm">
        <input type="hidden" name="ltid" id="ltid" class="form-control">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="lnumber">Aina ya Leseni
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="ltypee" id="ltypee" class="form-control" placeholder="Ingiza Aina ya Leseni" required="required" style="border: solid 1px green;">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="restaurentnumber">Kiwango
                  <span class="text-danger">*</span>
                </label>
                <input type="number" name="pricee" id="pricee" class="form-control" placeholder="Ingiza kiwanga cha Pesa" required="required" style="border: solid 1px green;">
              </div>
            </div>
          </div>
          <input type="hidden" name="pubIPu" id="pubIPu" value="<?php echo $jsIPConnect1; ?>">
          <input type="hidden" name="locIPu" id="locIPu" value="<?php echo $locIP1; ?>">

          <button class="btn btn-info">
            <span class="far fa-save"></span>&nbsp;
            Badili
          </button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


