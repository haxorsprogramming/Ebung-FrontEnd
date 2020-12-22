<div class="row" id="conVariant" style="display: none;">
    <div class="col-12 col-md-12 col-lg-12">
        <!-- Variant 2  -->
        <label><strong>Variant 2</strong></label>
        <table class="table">
            <tr>
                <td style="vertical-align: top;">
                    <div class="form-group">
                        <label>Name Variant</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deks Variant</label>
                        <textarea id="txtDeksVar2" class="form-control" name="txtDeksVar2" rows="10" cols="50" v-model="variantProduct[0].desk"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" v-model="variantProduct[0].price">
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" v-model="variantProduct[0].stock">
                    </div>
                </td>
                <td style="vertical-align: top;">
                    <div class="form-group">
                        <label>Image for variant 2</label><br />
                        <div class="cropme" style="width: 450px;height:450px;"></div>
                    </div>
                    <br/>
                    <small>@{{variantProduct[0].deksBot}}</small><br/>
                    <a href="#!" class="view">Set</a>
                </td>
            </tr>
        </table>
        <!-- End variant 2 -->
        </hr>
        <!-- Variant 3  -->
        <label><strong>Variant 3</strong></label>
        <table class="table">
            <tr>
                <td style="vertical-align: top;">
                    <div class="form-group">
                        <label>Name Variant</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deks Variant</label>
                        <textarea id="txtDeksVar3" class="form-control" name="txtDeksVar3" rows="10" cols="50"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deks Variant</label>
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td style="vertical-align: top;">
                    <div class="form-group">
                        <label>Image for variant 2</label><br />
                        <div class="cropme" style="width: 450px;height:450px;"></div>
                    </div>
                </td>
            </tr>
        </table>
        <!-- End variant 3 -->
        <hr/>
        <!-- Variant 4  -->
        <label><strong>Variant 4</strong></label>
        <table class="table">
            <tr>
                <td style="vertical-align: top;">
                    <div class="form-group">
                        <label>Name Variant</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deks Variant</label>
                        <textarea id="txtDeksVar4" class="form-control" name="txtDeksVar4" rows="10" cols="50"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Deks Variant</label>
                        <input type="text" class="form-control">
                    </div>
                </td>
                <td style="vertical-align: top;">
                    <div class="form-group">
                        <label>Image for variant 4</label><br />
                        <div class="cropme" style="width: 450px;height:450px;"></div>
                    </div>
                </td>
            </tr>
        </table>
        <!-- End variant 4 -->
        <hr/>
    </div>
</div>

<div>
    <a href="#!" class="view">Save new product</a>
</div>