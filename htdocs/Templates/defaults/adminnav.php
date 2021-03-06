<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../admin/addProduct">sportapparaat toevoegen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/deleteproduct">sportapparaat verwijderen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../admin/products">products</a>
                </li>
            </ul>
            <ul class='navbar-nav ms-auto' >
                <?php
                if(isset($_SESSION['email'])) {
                    echo "
                <li class='nav-item' >
                    <a class='nav-link' href='/profile'> 
                        <img><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
                        <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
                        <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
                        </svg>". $_SESSION['email'] . "
                    </a>
                </li>
                ";
                } ?>
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION) && $_SESSION['inlog']): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">uitloggen</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/inlog">inloggen</a>
                        </li>
                    <?php endif; ?>
                </ul>
        </div>
    </div>
</nav>