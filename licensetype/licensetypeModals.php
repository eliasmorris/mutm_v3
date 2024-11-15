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
          <input type="hidden" name="publicIPa" id="publicIPa" value="<?php echo $publicIPConnent; ?>">
          <input type="hidden" name="localIPa" id="localIPa" value="<?php echo $localIp; ?>">

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
          <input type="hidden" name="pubIPu" id="pubIPu" value="<?php echo $publicIPConnent; ?>">
          <input type="hidden" name="locIPu" id="locIPu" value="<?php echo $localIp; ?>">

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


<div class="modal fade" id="addAccountNo">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title">Sajili akaunti namba ya malipo ya Taasisi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addAccountNoForm" method="POST">
          <input type="hidden" name="instituteidacc" id="instituteidacc" class="form-control">
          <input type="hidden" name="insertAccount" id="insertAccount" class="form-control">

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="instcodeacc">Namba ya Usajili wa Taasisi (SubSP Code)
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="instcodeacc" id="instcodeacc" class="form-control" placeholder="Ingiza Namba ya taasisi" required="required" style="border: solid 1px green;" readonly="readonly">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="instnameacc">Jina la Taasisi
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="instnameacc" id="instnameacc" class="form-control" placeholder="Ingiza Jina la Taasisi" required="required" style="border: solid 1px green;" readonly="readonly">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="accname">Jina la Akaunti
                  <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" id="accname" name="accname" required="required" style="border: solid 1px green;">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="accnum">Namba ya Malipo
                  <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" id="accnum" name="accnum" required="required" style="border: solid 1px green;">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="bankcode">Jina la Benki
                  <span class="text-danger">*</span>
                </label>
                <select class="form-control" id="bankcode" name="bankcode" required="required" style="border: solid 1px green;">
                  <option value="" hidden>Chagua Benki</option>
                  <option value="PBZ">PBZ</option>
                  <!-- <option value="CRDB">CRDB</option>
                    <option value="NBC">NBC</option>
                    <option value="AMANA BANK">AMANA BANK</option>
                    <option value="AFRICAN BANK">AFRICAN BANK</option>
                    <option value="EXIM BANK">EXIM BANK</option>
                    <option value="APSA BANK">APSA BANK</option>
                    <option value="EQUITY BANK">EQUITY BANK</option> -->
                </select>
              </div>
            </div>
          </div>

          <input type="hidden" name="pubIPac" id="pubIPac" value="<?php echo $jsIPConnect; ?>">
          <input type="hidden" name="locIPac" id="locIPac" value="<?php echo $locIP; ?>">

          <button class="btn btn-success">
            <span class="fas fa-save"></span>&nbsp;Sajili
          </button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="addPOS">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h4 class="modal-title">Sajili POS mpya kwa matumizi ya Taasisi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addPOSForm" method="POST">
          <input type="hidden" name="instituteidps" id="instituteidps" class="form-control">

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="instcodeps">Namba ya Usajili wa Taasisi (SubSP Code)
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="instcodeps" id="instcodeps" class="form-control" placeholder="Ingiza Namba ya taasisi" required="required" style="border: solid 1px green;" readonly="readonly">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="instnameps">Jina la Taasisi
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="instnameps" id="instnameps" class="form-control" placeholder="Ingiza Jina la Taasisi" required="required" style="border: solid 1px green;" readonly="readonly">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="imeino">POS/IMEI No.
                  <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" id="imeino" name="imeino" required="required" style="border: solid 1px green;">
              </div>
            </div>
          </div>

          <input type="hidden" name="pubIPap" id="pubIPap" value="<?php echo $jsIPConnect; ?>">
          <input type="hidden" name="locIPap" id="locIPap" value="<?php echo $locIP; ?>">

          <button class="btn btn-success">
            <span class="fas fa-save"></span>&nbsp;Sajili
          </button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->