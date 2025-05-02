<?= $this->extend('layout/template'); ?>





<?= $this->section('content'); ?>
<h1 class="text-center font-weight-bold">Menu</h1>
<div>
    <!-- drop down-->
    <div class="d-flex container justify-content-end">
        <div class="btn-group">
            <button type="button" class="btn justify-content-lg-center btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                category menu
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><button class="dropdown-item" type="button">Action</button></li>
                <li><button class="dropdown-item" type="button">Another action</button></li>
                <li><button class="dropdown-item" type="button">Something else here</button></li>
            </ul>
        </div>
    </div>
</div>
<h2 class="container font-weight-bold">Makanan</h2>
<div class="container">
    <div class="card" style="width: 18rem; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary float-end">+</a>
        </div>
    </div>
</div>
<h2 class="container font-weight-bold">minuman</h2>
<div class="container">
    <div class="card" style="width: 18rem; transition: transform 0.2s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary float-end">+</a>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>