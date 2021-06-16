<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <h6>
                    <a class="nav-link disabled" aria-current="page" href="#">
                        <i class="bi bi-person-fill"></i> <?= "{$_SESSION['nome']} {$_SESSION['apelido']}" ?>
                    </a>
                </h6>
            </li>
            <li class="nav-item">
                <h6>
                    <a class="nav-link" href="../home.php">
                        <i class="bi bi-house-door-fill"></i> Home
                    </a>
                </h6>
            </li>
            <div class="accordion" id="accordionExample">



                <div class="accordion-item">
                    <h6 class="accordion-header" id="headingThree">
                        <a class="collapsed bg-light nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="bi bi-lightbulb-fill"></i> Gestão de Animes
                        </a>
                    </h6>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="text-dark" href="index.php?source=todos" style="text-decoration: none;">
                                        <i class="bi bi-table"></i> Todos os Animes
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a class="text-dark" href="index.php?source=adicionar" style="text-decoration: none;"><i class="bi bi-plus-circle-fill"></i> Adicionar Anime</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Só o master admin tem acesso á gestão de utilizadores -->
            <?php if ($_SESSION['level'] === 'master admin'): ?>
                <li class="nav-item">
                    <h6>
                        <a class="nav-link" href="index.php?source=utilizadores">
                            <span data-feather="users"></span>
                            <i class="bi bi-people-fill"></i> Gestão de Utilizadores
                        </a>
                    </h6>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>