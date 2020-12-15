<div class="card card-primarya">
    <div class="card-header">
        <h4>Coverage Area</h4>
        <div class="card-header-action">
            <a href="#!" class="btn btn-primary" style="border:0px solid white;color:#fff;"><i class="fas fa-arrow-circle-left"></i> Back</a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div id="maps" style="width:100%px;height:400px;"></div>
            </div>
        </div>
        <hr/>
        <div class="row" id="divAddCoverage">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group">
                    <label>List coverage area</label>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Village</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="kel in kelurahanDipilih">
                                <td>@{{ kel.nama }}</td>
                                <td></td>
                                <td><a href="#!" class="view"><i class="fas fa-trash-alt"></i> Remove</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group" id="divCountry">
                    <label>Add new coverage area (choose country first)</label>
                    <select class="form-control" id="txtCountry" onchange="countryPilih()">
                        <option value='none'>--- Choose country ---</option>
                        <option value='id'>Indonesia</option>
                        <option value='my'>Malaysia</option>
                    </select>
                </div>
                <div class="form-group" id="divProvinsi">
                    <label>Province</label>
                    <select class="form-control" id="txtProvinsi" onchange="provinsiPilih()">
                        <option value='none'>--- Choose province ---</option>
                    @foreach($dataProvinsi as $provinsi)
                        <option value="{{ $provinsi -> id_prov }}">{{ $provinsi -> nama }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group" id="divKabupaten">
                    <label>Regency</label>
                    <select class="form-control" id="txtKabupaten" onchange="kabupatenPilih()">
                        <option value='none'>--- Choose regency ---</option>
                        <option v-for="kab in kabupaten" v-bind:value="kab.id_kab">@{{ kab.nama }}</option>
                    </select>
                </div>
                <div class="form-group" id="divKecamatan">
                    <label>Sub-District</label>
                    <select class="form-control" id="txtKecamatan" onchange="kecamatanPilih()">
                        <option value='none'>--- Choose sub-district ---</option>
                        <option v-for="kec in kecamatan" v-bind:value="kec.id_kec">@{{ kec.nama }}</option>
                    </select>
                </div>
                <div class="form-group" id="divKelurahan">
                    <label>Choode Urban Village (Keluarahan)</label>
                    <table class="table table-bordered">
                        <tr v-for="kel in kelurahan">
                            <td>@{{ kel.nama }}</td>
                            <td>
                                <a class="view btnAdd" href='#!' v-bind:data-id="kel.id_kel" @click="addKel(kel.id_kel+'-'+kel.nama)"><i class="fas fa-plus-circle"></i> Add</a>
                            </td>
                        </tr>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('ladun/account_asset/js_custom/seller/coverageArea.js') }}"></script>