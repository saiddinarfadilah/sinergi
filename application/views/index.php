<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- link css manual -->
    <style>
        .content {
            padding: 20px;
        }

        .button {
            margin-top: 10px;
            margin-bottom: 20px;
        }

        span a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <button type="button" class="btn btn-primary disabled">Info Permintaan Pengeluaran Dana</button>
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-light" role="alert">
                    Data Berhasil <?= $this->session->flashdata('flash'); ?>
                <?php endif; ?>
                <?php if (validation_errors()) :  ?>
                    <div class="alert alert-danger" role="alert">
                        Tanda yang berbintang tidak boleh kosong.
                    </div>
                <?php endif; ?>
                <?= validation_errors(); ?>
                <form action="" method="POST" class="row g-3">
                    <div class="col-md-6">
                        <input type="hidden" name="id">
                        <label for="inputEmail4" class="form-label">
                            <font style="color: red;">*</font> Tanggal
                        </label>
                        <input type="date" class="form-control" id="inputEmail4" name="tgl" autofocus>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">
                            <font style="color: red;">*</font> Pemohon
                        </label>
                        <select name="pemohon" id="inputState" class="form-select">
                            <option selected>Pilih</option>
                            <option value="Said Dinar">Said Dinar</option>
                            <option value="Vicky">Vicky</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Divisi</label>
                        <select name="divisi" id="inputState" class="form-select">
                            <option selected>Pilih</option>
                            <option value="IT DEVELOPMENT">IT DEVELOPMENT</option>
                            <option value="IT SUPPORT">IT SUPPORT</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">
                            <font style="color: red;">*</font> Tipe PPD
                        </label>
                        <select name="tipe" id="inputState" class="form-select">
                            <option selected>Pilih</option>
                            <option value="Zakat">Zakat</option>
                            <option value="Infak">Infak</option>
                            <option value="Sedekah">Sedekah</option>
                        </select>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">
                            <font style="color: red;">*</font> Metode
                        </label>
                        <select name="metode" id="inputState" class="form-select">
                            <option selected>Pilih</option>
                            <option value="non-tunai">Non-Tunai</option>
                            <option value="tunai">Tunai</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">No. Rek</label>
                        <input type="text" name="no_rek" class="form-control" id="inputCity" placeholder="No. Rek">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">
                            <font style="color: red;">*</font> Penerima
                        </label>
                        <input type="text" name="penerima" class="form-control" id="inputCity" placeholder="Penerima">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Keterangan</label>
                        <textarea name="keterangan" id="inputCity" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="file" name="lampiran" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Lampiran</label>
                        </div>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Uraian</a>
                        </li>
                    </ul>
                    <div class="col-12">
                        <button type="button" class="btn btn-primary">Pilih Anggaran</button>
                    </div>
                    <table class="table">
                        <thead class="table-responsive">
                            <tr>
                                <th scope="col">Anggaran</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Kas SF - Infak</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" name="jml" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </td>
                                <td>
                                    <textarea name="keterangan" class="form-control" rows="1" cols="1"></textarea>
                                </td>
                                <td>
                                    <span class="badge bg-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></span>
                                </td>
                            </tr>
                            <tr>
                                <td>Kas SF - Amil</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" name="jml" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </td>
                                <td>
                                    <textarea name="keterangan" id="" class="form-control" rows="1" cols="1"></textarea>
                                </td>
                                <td>
                                    <span class="badge bg-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">Total</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" name="total" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end button">
                        <button class="btn btn-primary me-md-2" type="reset">RESET</button>
                        <button class="btn btn-primary" type="submit" name="simpan">SIMPAN</button>
                    </div>
                </form>
                </div>
        </div>
</body>

</html>