<div class="py-4">
    <h5>Booking Servis Kendaraan</h5>
</div>
<form action="" method="post">
    <div class="row">
        <div class="col mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="">Tanggal Servis</label>
                                <input type="date" class="form-control" name="tgl_servis" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="">Jam Servis</label>
                                <select name="jam_sevis" id="jam_servis" class="form-control" required>
                                    <option value="">-- Pilih Jam --</option>
                                    <option value="09:00">09:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="17:00">17:00</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h5 class="card-title">Data Diri</h5>
                    <div class="mb-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_customer" placeholder="Silahkan Isi Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email_customer" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telp" placeholder="08xxxxxxxxxx" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <h5 class="card-title">Data Kendaraan</h5>
                    <div class="mb-3">
                        <label for="">Merk Kendaraan</label>
                        <select name="merk_mobil" id="merk_mobil" class="form-control" required>
                            <option value="">-- Pilih Merk --</option>
                            <option value="Toyota">Toyota</option>
                            <option value="Daihatsu">Daihatsu</option>
                            <option value="Honda">Honda</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="Hyundai">Hyundai</option>
                        </select>
                    </div>
                    <label for="">Tipe Kendaraan</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="font-weight: bold;">Model</span>
                        <input type="text" class="form-control" name="nama_mobil" placeholder="Contoh: Avanza, Ertiga, Agya dll..." required>
                        <span class="input-group-text" style="font-weight: bold;">Transmisi</span>
                        <select name="transmisi" id="transmisi" class="form-control" required>
                            <option value="">-- Pilih Transmisi --</option>
                            <option value="AT / Automatic">AT / Automatic</option>
                            <option value="MT / Manual">MT / Manual</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Plat Nomor</label>
                        <input type="text" class="form-control" name="plat_no" placeholder="Contoh: A 0001 XX" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Layanan Servis</label>
                        <select name="layanan_servis" id="layanan_servis" class="form-control" required>
                            <option value="">-- Pilih Layanan --</option>
                            <option value="1.000 KM / 1 Bulan">1.000 KM / 1 Bulan</option>
                            <option value="10.000 KM / 6 Bulan">10.000 KM / 6 Bulan</option>
                            <option value="20.000 KM / 12 Bulan">20.000 KM / 12 Bulan</option>
                            <option value="30.000 KM / 18 Bulan">30.000 KM / 18 Bulan</option>
                            <option value="40.000 KM / 24 Bulan">40.000 KM / 24 Bulan</option>
                            <option value="50.000 KM / 30 Bulan">50.000 KM / 30 Bulan</option>
                            <option value="Lebih Dari 50.000+ KM / 30 Bulan+">Lebih Dari 50.000+ KM / 30+ Bulan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Masalah Pada Kendaraan Anda</label>
                        <textarea class="form-control" name="keluhan" id="keluhan" cols="20" rows="5" placeholder="Beritahu kami keluhan kendaraan anda disini..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Konfirmasi Booking</button>
                    <button type="reset" class="btn btn-danger">Clear</button>
                </div>
            </div>
        </div>
    </div>
</form>