                    <!-- Modal content-->
                    <div class="modal-content" id="div_modal_product">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body">
                            <div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="img-pill-1" class="tab-pane fade in active">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
                                            <figure class="fi-quick">
                                                <h1>QUICK VIEW</h1>
                                            </figure>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
                                        <h1>@{{ title_modal }}</h1>
                                        <p class="p1">@{{ deks_produk }}</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <span>10 Rating(s) | Add Your Rating</span>
                                        </div>
                                        <div class="prince"><span>@{{ currency }} @{{ Number(price).toLocaleString() }}</span><s class="strike">$300.02</s></div>
                                        <figure class="fi-option">
                                            <p class="option">Check your location (Kelurahan)</p>
                                        </figure>
                                        
                                        <div class="select-custom">
                                            <input type="text" class="input-text required-entry validate-email input-lg" id="txtLokasi" onkeyup="searchArea()">
                                            <img src="{{ asset('ladun/ebunga_asset/others/loading.svg') }}" style="width: 40px;" id="loaderLokasi">
                                            <hr/>
                                            <table class="table" id="txtTabelArea" style="font-family:Poppins;">
                                                <thead>
                                                    <tr>
                                                        <td>Area</td><td>Coverage status</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="ld in listDaerah">
                                                        <td>@{{ ld.nama }}</td>
                                                        <td>
                                                            <span v-if="ld.cover === 'yes'" class="material-icons">check_circle_outline</span>
                                                            <span v-else>Not available</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="require">Required Fields <span>*</span></p>
                                            <div class="Quality">

                                                <div class="input-group input-number-group">
                                                    <span class="text-qua">Quanty:</span>
                                                    <div class="input-group-button">
                                                        <span class="input-number-decrement">-</span>
                                                    </div>
                                                    <input class="input-number" type="number" min="0" max="1000" value="01">
                                                    <div class="input-group-button">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    <span class="dola">$ </span><span class="total">250.9</span>
                                                </div>

                                            </div>
                                            <div class="add-cart">
                                                <a href="#" class="btn-add-cart">Add to cart</a>
                                                <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                                                <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="img-pill-2" class="tab-pane fade">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
                                            <figure class="fi-quick">
                                                <h1>QUICK VIEW</h1>
                                            </figure>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <img src="http://landing.engotheme.com/html/jenstore/demo/img/queen.jpg" class="img-responsive" alt="holiwood">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
                                        <h1>Queen Rose</h1>
                                        <p class="p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <span>10 Rating(s) | Add Your Rating</span>
                                        </div>
                                        <div class="prince"><span>$300.02</span><s class="strike">$250.9</s></div>
                                        <figure class="fi-option">
                                            <p class="option">Option</p>
                                        </figure>
                                        <div class="size">
                                            <span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
                                        </div>
                                        <div class="select-custom">
                                            <select>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                            <a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a>
                                            <p class="require">Required Fields <span>*</span></p>
                                            <div class="Quality">

                                                <div class="input-group input-number-group">
                                                    <span class="text-qua">Quanty:</span>
                                                    <div class="input-group-button">
                                                        <span class="input-number-decrement">-</span>
                                                    </div>
                                                    <input class="input-number" type="number" min="0" max="1000" value="01">
                                                    <div class="input-group-button">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    <span class="dola">$ </span><span class="total">250.9</span>
                                                </div>

                                            </div>
                                            <div class="add-cart">
                                                <a href="#" class="btn-add-cart">Add to cart</a>
                                                <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                                                <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="img-pill-3" class="tab-pane fade">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
                                            <figure class="fi-quick">
                                                <h1>QUICK VIEW</h1>
                                            </figure>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <img src="http://landing.engotheme.com/html/jenstore/demo/img/queen.jpg" class="img-responsive" alt="holiwood">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
                                        <h1>Lavender</h1>
                                        <p class="p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <span>10 Rating(s) | Add Your Rating</span>
                                        </div>
                                        <div class="prince"><span>$300.02</span><s class="strike">$250.9</s></div>
                                        <figure class="fi-option">
                                            <p class="option">Option</p>
                                        </figure>
                                        <div class="size">
                                            <span class="lb-size">Size <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
                                        </div>
                                        <div class="select-custom">
                                            <select>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                            <a href="#"><span class="color-1"></span></a> <a href="#"><span class="color-2"></span></a> <a href="#"><span class="color-3"></span></a> <a href="#"><span class="color-4"></span></a>
                                            <p class="require">Required Fields <span>*</span></p>
                                            <div class="Quality">

                                                <div class="input-group input-number-group">
                                                    <span class="text-qua">Quanty:</span>
                                                    <div class="input-group-button">
                                                        <span class="input-number-decrement">-</span>
                                                    </div>
                                                    <input class="input-number" type="number" min="0" max="1000" value="01">
                                                    <div class="input-group-button">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    <span class="dola">$ </span><span class="total">250.9</span>
                                                </div>

                                            </div>
                                            <div class="add-cart">
                                                <a href="#" class="btn-add-cart">Add to cart</a>
                                                <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                                                <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="img-pill-4" class="tab-pane fade">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 title-quick">
                                            <figure class="fi-quick">
                                                <h1>QUICK VIEW</h1>
                                            </figure>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <img src="{{ asset('ladun/homepage/pic_asset/product/wedding-1.jpg') }}" class="img-responsive" alt="holiwood">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 detail">
                                        <h1>Queen Rose - Yellow</h1>
                                        <p class="p1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <span>10 Rating(s) | Add Your Rating</span>
                                        </div>
                                        <div class="prince"><span>$300.02</span><s class="strike">$250.9</s></div>
                                        
                                        <figure class="fi-option">
                                            <p class="option">Choose your location</p>
                                        </figure>
                                        <div class="size">
                                            <span class="lb-size">Province  <span class="sta-red">*</span></span><span class="lb-color">Color <span class="sta-red">*</span></span>
                                        </div>
                                        <div class="select-custom">
                                            <select>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>XL</option>
                                            </select>
                                            
                                            <p class="require">Required Fields <span>*</span></p>
                                            <div class="Quality">

                                                <div class="input-group input-number-group">
                                                    <span class="text-qua">Quanty:</span>
                                                    <div class="input-group-button">
                                                        <span class="input-number-decrement">-</span>
                                                    </div>
                                                    <input class="input-number" type="number" min="0" max="1000" value="01">
                                                    <div class="input-group-button">
                                                        <span class="input-number-increment">+</span>
                                                    </div>
                                                    <span class="dola">$ </span><span class="total">250.9</span>
                                                </div>

                                            </div>
                                            <div class="add-cart">
                                                <a href="#" class="btn-add-cart">Add to cart</a>
                                                <a href="#" class="list-icon icon-1"><i class="far fa-eye"></i></a>
                                                <a href="#" class="list-icon icon-2"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-pills col-lg-6 col-md-6 col-sm-6 col-xs-12 img-pill">
                                <li class="active col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a href="#!"><img src="{{ asset('ladun/ebunga_asset/image/product/EBUNGA891233.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                </li>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a href="#!"><img src="{{ asset('ladun/ebunga_asset/image/product/EBUNGA891233.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                </li>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a href="#!"><img src="{{ asset('ladun/ebunga_asset/image/product/EBUNGA891233.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                </li>
                                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <a href="#!"><img src="{{ asset('ladun/ebunga_asset/image/product/EBUNGA891233.jpg') }}" class="img-responsive" alt="holiwood"></a>
                                </li>
                            </ul>
                        </div>

                    </div>