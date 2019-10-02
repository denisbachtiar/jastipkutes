<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content pl-3 pr-3">
            <div class="modal-header no-border">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="d-flex align-items-center mb-4">
                    <h5 class="mb-0"><b>Masuk</b></h5>
                    <p class="mb-0 ml-auto text-success">Daftar</p>
                </div>
                <form action="{{ route('login.api') }}" method="POST">
                    @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1"><small>Nomor Ponsel atau Email</small></label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name="nohp" aria-describedby="emailHelp" placeholder="+6285799365743">
                          <label for="exampleInputEmail1"><small>Password</small></label>
                          <input type="password" class="form-control" id="exampleInputEmail1" name="password" aria-describedby="emailHelp" placeholder="rahasia">
                          <small id="emailHelp" class="form-text text-muted">Contoh: email@gmail.com</small>
                        </div>
                        <button type="submit" class="btn btn-secondary" style="width: 100%;">Selanjutnya</button>
                      </form>
                      <p class="text-center mt-4 mb-4"><small>atau masuk dengan</small></p>
                      <button type="submit" class="btn btn-light mb-2" style="width: 100%;"><i class="icon-google alt-icon"></i><span>Google</span></button>
                      <button type="submit" class="btn btn-light mb-2" style="width: 100%;"><i class="icon-google alt-icon"></i><span>Facebook</span></button>
                      <p class="text-center mt-3">Belum punya akun Tokopedia? <span class="text-success">Daftar</span></p>
            </div>
          </div>
        </div>
      </div>