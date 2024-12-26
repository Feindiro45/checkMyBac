@extends("layouts.Master")


@section("content")
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <h1 class="mb-4">
                CheckMyBac <br /><span class="accent-text"
                  >Vérification de mon bac</span
                >
              </h1>
              <p class="mb-4 mb-md-5">
                Vous êtes sur le site officiel de la Vérification de l'état de
                votre diplôme du baccalauréat Centrafrique
              </p>
              <div class="hero-buttons">
                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1"
                  >Cliquer par ici</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="{{ asset("frontend/img/Image1.png") }}" alt="Hero Image" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
      <div class="container data" data-aos="fade-up" data-aos-delay="100">
        <div
          class="row justify-content-center align-items-center position-relative"
        >
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="display-8 mb-4">Je vérifie maintenant!</h2>
            <form action="" method="get">
              <div class="row justify-content-center">
                <div class="col-md-6">
                  <input
                    type="text"
                    class="form-control mb-2 matricule"
                    autofocus
                    placeholder="Votre matricule"
                    name="matricule"
                  />
                  <span class="text-white m1 bg-danger"></span>
                </div>
                <div class="col-md-6">
                  <select name="année" class="form-control mb-2 année">
                    <option selected>Choississez l'année de votre bac</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                  </select>
                  <span class="text-white m2 bg-danger"></span>
                </div>
              </div>
              <button type="button" class="btn btn-cta" id="search">
                <i class="bi bi-search"></i> Vérifier
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Nouveau Modal pour Bravo -->
            <div
              id="successModal"
              class="modal"
              tabindex="-1"
              aria-labelledby="successModalLabel"
              aria-hidden="true"
              style="display: none"
            >
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Succès</h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <p>Bravo !</p>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-primary float-start"
                      data-bs-dismiss="modal"
                    >
                      Fermer
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </main>
@endsection
