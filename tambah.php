<div class="container-sm">
    <div class="card p-5">
      <div class="mb-3 row">
        <label for="ket" class="col-sm-2 col-form-label">Nomor Surat</label>
          <div class="col-sm-10">
           <input type="text" class="form-control" id="ket" name="ket" value="" placeholder="-">
        </div>  
      </div>
      <div class="mb-3 row">
        <label for="ket" class="col-sm-2 col-form-label">Nama Instansi</label>
          <div class="col-sm-10">
           <input type="text" class="form-control" id="ket" name="ket" value="" placeholder="-">
        </div>  
      </div>
      <div class="mb-3 row">
        <label for="ket" class="col-sm-2 col-form-label">Tanggal Date</label>
          <div class="col-sm-10">
           <input type="date" class="form-control" id="ket" name="ket" value="" placeholder="-">
        </div>  
      </div>
      <div class="mb-3 row">
          <label for="Jenis" class="col-sm-2 col-form-label">Lampiran</label>
          <div class="col-sm-10">
            <div class="input-group">
              <select class="form-select" id="Jenis" name="Jenis" placeholder="-">
                <option selected>-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>  
          </div>  
        </div>
      <div class="mb-3 row">
        <label for="ket" class="col-sm-2 col-form-label">Isi Surat</label>
          <div class="col-sm-10">
           <input type="text" class="form-control" id="ket" name="ket" value="" placeholder="-">
        </div>  
      </div>
      <div class="mb-3 row">
        <label for="ket" class="col-sm-2 col-form-label">Surat</label>
          <div class="col-sm-10">
           <input type="file" class="form-control" id="ket" name="ket" value="" placeholder="-">
        </div>  
      </div>

      <div class="modal-footer d-flex flex-row justify-content-between">
        <a href="<?= BASEURL; ?>/surat" class="btn btn-back">Back</a>
        <button class="tombol btn btn-submit"type="submit">Upload</button>
      </div>
</div>