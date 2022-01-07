0<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Pemesanan </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>

    <?php
    if (isset($validation)) {
        echo $validation->listErrors();
    }
    ?>
    <div class="row">
        <?= form_open('Pemesanan/inputdata') ?>
        
        <div class="mb-3">
            <label for="nama_pemesanan" class="form-label">Nama Pemesanan</label>
            <input type="text" class="form-control" id="nama" name="nama_pemesanan" value="<?= set_value('nama_pemesanan') ?>" placeholder="Diisi dengan nama pemesanan">
        </div>
        <div class="mb-3">
            <label for="total_pemesanan" class="form-label">Total pemesanan</label>
            <input type="text" class="form-control" id="nama" name="total_pemesanan" value="<?= set_value('total_pemesanan') ?>" placeholder="Diisi dengan total pemesanan">
        </div>
        <div class="mb-3">
            <label for="total_bayar" class="form-label">Total Bayar</label>
            <input type="text" class="form-control" id="total_bayar" name="total_bayar" value="<?= set_value('total_bayar') ?>" placeholder="Diisi dengan nominal bayar">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</main>
</div>
</div>

<!-- Bootstrap JS -->
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="<?= base_url('dashboard/dashboard.js') ?>"></script>
</body>

</html>