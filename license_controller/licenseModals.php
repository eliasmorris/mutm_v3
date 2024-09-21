<div class="modal fade" id="addlicense">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h4 class="modal-title">Sajili Leseni Mpya</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addLicenseForm">
          <!-- <input type="hidden" name="businessid" id="businessid" class="form-control"> -->
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="lnumber">Namba ya Leseni
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="lnumber" id="lnumber" class="form-control" placeholder="Ingiza Namba ya Leseni" required="required" style="border: solid 1px green;">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="licensetype">Aina ya Leseni
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="licensetype" id="licensetype" class="form-control" placeholder="Ingiza Namba ya Leseni" required="required" style="border: solid 1px green;">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <?php

              $json = file_get_contents($publicIPConnent . 'mutm/api/getAllBusiness?pageNum=1&pageSize=20'); //receive json from url

              $arr = json_decode($json, true); //covert json data into array format
              ?>
              <div class="form-group">
                <label for="bname">Biashara
                  <span class="text-danger">*</span>
                </label>
                <select class="form-control" id="bname" name="bname" required="required" style="border: solid 1px green;">
                  <option value="" hidden>Chagua Biashara</option>
                  <?php
                  foreach ($arr as $key => $value) {
                    echo '<option value="' . $value['bussid'] . '">' . $value['bname'] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="restaurentnumber">Kiwango
                  <span class="text-danger">*</span>
                </label>
                <input type="number" name="amount" id="amount" class="form-control" placeholder="Ingiza kiwanga cha Pesa" required="required" style="border: solid 1px green;">
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


<div class="modal fade" id="editLicense">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-default">
        <h4 class="modal-title">Badili taarifa za Leseni</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="addLicenseForm">
          <input type="hidden" name="lid" id="lid" class="form-control">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="lnumber">Namba ya Leseni
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="lnumberr" id="lnumberr" class="form-control" placeholder="Ingiza Namba ya Leseni" required="required" style="border: solid 1px green;">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="licensetype">Aina ya Leseni
                  <span class="text-danger">*</span>
                </label>
                <input type="text" name="licensetypee" id="licensetypee" class="form-control" placeholder="Ingiza Namba ya Leseni" required="required" style="border: solid 1px green;">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <?php

              $json = file_get_contents($publicIPConnent.'mutm/api/getAllBusiness?pageNum=1&pageSize=20'); //receive json from url

              $arr = json_decode($json, true); //covert json data into array format
              ?>
              <div class="form-group">
                <label for="bname">Biashara
                  <span class="text-danger">*</span>
                </label>
                <select class="form-control" id="bnamee" name="bnamee" required="required" style="border: solid 1px green;">
                  <option id="bssname" value="" hidden>Chagua Biashara</option>
                  <?php
                  foreach ($arr as $key => $value) {
                    echo '<option value="' . $value['bussid'] . '">' . $value['bname'] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="restaurentnumber">Kiwango
                  <span class="text-danger">*</span>
                </label>
                <input type="number" name="amountt" id="amountt" class="form-control" placeholder="Ingiza kiwanga cha Pesa" required="required" style="border: solid 1px green;">
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