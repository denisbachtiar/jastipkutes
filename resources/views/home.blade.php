@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="center mt-4">
                    @foreach ($banner as $itembanner)
                    <div><img src="{{ $itembanner->picture}}" alt=""></div>
                        @endforeach
                  </div>
        <div class="card shadow-box no-border mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-3"><b>Kategori Pilihan</b></h5>
                        <div class="regular mt-4">
                            <div class="card p-1"><img src="https://ecs7.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_e5b3e074-c897-4cf0-9ced-5572d0538e7c.jpg" alt=""></div>
                            <div class="card p-1"><img src="https://ecs7.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_e30f557c-c2e1-4e9b-ab0f-505d5f965e7d.jpg" alt=""></div>
                            <div class="card p-1"><img src="https://ecs7.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_c6f70915-577f-4cd4-834c-daf892265ef0.jpg" alt=""></div>
                            <div class="card p-1"><img src="https://ecs7.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_d6452363-7d8c-4706-ac84-7f059a7d9a84.jpg" alt=""></div>
                            <div class="card p-1"><img src="https://ecs7.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_d7c67b76-9ff4-46f9-93a3-ec4be4918439.jpg" alt=""></div>
                            <div class="card p-1"><img src="https://ecs7.tokopedia.net/img/cache/200-square/attachment/2018/8/9/3127195/3127195_76d08c44-8194-4454-9fb0-1e7a64b656aa.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                                <h5><b>Top-Up & Tagihan</b></h5>
                            <h5 class="ml-auto"><b><small class=""><a href="javascript:void(0)" class="text-success">Lihat Semua</a></small></b></h5>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#pulsa" role="tab" aria-controls="home" aria-selected="true">Pulsa</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#paket" role="tab" aria-controls="profile" aria-selected="false">Paket Data</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#pln" role="tab" aria-controls="contact" aria-selected="false">Listrik PLN</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="contact" aria-selected="false">Flight</a>
                                      </li>
                              </ul>
                              <div class="tab-content mt-2" id="myTabContent">
                                <div class="tab-pane fade show active" id="pulsa" role="tabpanel" aria-labelledby="home-tab">
                                        <form>
                                                <div class="form-row">
                                                  <div class="col">
                                                        <label for="exampleInputEmail1">Nomor Telepon</label>
                                                    <input type="text" class="form-control" placeholder="082231562726">
                                                  </div>
                                                  <div class="col">
                                                        <label for="exampleInputEmail1">Nominal</label>
                                                        <select class="form-control" name="" id="">
                                                            <option value="">Pilih</option>
                                                        </select>
                                                  </div>
                                                  <div class="col">
                                                      <label for=""></label>
                                                      <button type="button" class="btn btn-secondary">Beli</button>
                                                  </div>
                                                </div>
                                              </form>
                                </div>
                                <div class="tab-pane fade" id="paket" role="tabpanel" aria-labelledby="profile-tab"><form>
                                        <div class="form-row">
                                          <div class="col">
                                                <label for="exampleInputEmail1">Nomor Telepon</label>
                                            <input type="text" class="form-control" placeholder="082231562726">
                                          </div>
                                          <div class="col">
                                                <label for="exampleInputEmail1">Nominal</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="">Pilih</option>
                                                </select>
                                          </div>
                                          <div class="col">
                                              <label for=""></label>
                                              <button type="button" class="btn btn-secondary">Beli</button>
                                          </div>
                                        </div>
                                      </form></div>
                                <div class="tab-pane fade" id="pln" role="tabpanel" aria-labelledby="contact-tab">
                                        <form>
                                                  <div class="form-row">
                                                        <div class="col">
                                                                <label for="exampleInputEmail1">Jenis produk listrik</label>
                                                                <select class="form-control" name="" id="">
                                                                    <option value="">Pilih</option>
                                                                </select>
                                                          </div>
                                                        <div class="col">
                                                              <label for="exampleInputEmail1">No. Meter/ID Pel</label>
                                                          <input type="text" class="form-control" placeholder="082231562726">
                                                        </div>
                                                        <div class="col">
                                                                <label for="exampleInputEmail1">Nominal</label>
                                                                <select class="form-control" name="" id="">
                                                                    <option value="">Pilih</option>
                                                                </select>
                                                          </div>
                                                  <div class="col">
                                                      <label for=""></label>
                                                      <button type="button" class="btn btn-secondary">Beli</button>
                                                  </div>
                                                </div>
                                              </form>
                                </div>
                                <div class="tab-pane fade" id="flight" role="tabpanel" aria-labelledby="contact-tab">Flight</div>
                            </div>
                    </div>
                </div>
                <div class="regularcat mt-1 mb-0">
                    @foreach ($listcat as $itemcat)
                <div class="category-badge"><p class="mb-0"><small>{{ $itemcat->category }}</small></p></div>
                    @endforeach
                              </div>
            </div>
        </div>

        <div class="mt-4 parent-product">
            @foreach ($product as $itemprod)
            <div class="card product pb-1">
                    <img src="{{ $itemprod->image1}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h6 class="card-title"><b>{{ $itemprod->productName}}</b></h6>
                      <p class="card-text text-danger"><b>Rp {{ number_format($itemprod->price,0,",",".") }}</b></p>
                      {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                  </div>
            @endforeach
        </div>

        <h5 class="mt-4"><b>Kategori</b></h5>
                <div class="mt-2 mb-4 pb-2 cat-box">
                        @foreach ($listcat as $itemcatx)
                        <div class="cat-item"><p class="mb-0"><small><a href="javascript(0)">{{ $itemcatx->category }}</a></small></p></div>
                        @endforeach
                </div>

                <p class="mb-1"><small><b>Lorem Ipsum</b></small></p>
                <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<span id="dots">...</span></small></p>

                <span id="more" style="display: none;">
                <p class="mb-1"><small><b>Lorem Ipsum</b></small></p>
                <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</small></p>

                <p class="mb-1"><small><b>Lorem Ipsum</b></small></p>
                <p><small>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</small></p>
            </span>
            <p><small><a href="javascript:void(0)" class="text-success" onclick="myFunction()" id="read">Selengkapnya...</a></small></p>
    </div>
@endsection