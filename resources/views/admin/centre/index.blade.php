@extends('layouts.admin')

@section('content')
<div class="container">
        <!-- Bordered Table -->
        <div class="card">
            <h5 class="card-header">Liste des sessions d'examen</h5>
            <div class="row">
                <div class="col-md-3">
                    <button type="button" class="btn btn-primary btn-sm" style="margin-left: 45px;" data-bs-toggle="modal" data-bs-target="#basicModal">
                        Ajouter à nouveau
                    </button>
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Numéro du centre</th>
                      <th>Nom du centre d'examen</th>
                      <th>ville du centre d'examen</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($centre as $content )
                    <tr class="session_info">
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $content->num_centre }}</strong>
                          <input type="hidden" value="{{ $content->id }}" class="session_id">
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $content->nom_centre }}</strong></td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $content->ville_centre }}</strong></td>
                        <td>
                            <a href="{{ url('admin/delete-centre/'.$content->id) }}" class="btn btn-sm btn-danger delete-session"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!--/ Bordered Table -->
</div>

<div class="col-lg-4 col-md-6">
    <div class="mt-3">
        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Ajouter un centre d'examen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Champ Nom du centre -->
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Nom du centre</label>
                                <input type="text" class="form-control nom_centre" placeholder="Entrer le nom du centre d'examen" />
                            </div>
                            <span class="nom_error text-danger"></span>

                            <!-- Champ Numéro du centre -->
                            <div class="col mb-3">
                                <label for="nameBasic" class="form-label">Numéro du centre</label>
                                <input type="text" class="form-control num_centre" placeholder="Entrer le numéro du centre d'examen" />
                            </div>
                            <span class="num_error text-danger"></span>

                            <!-- Champ Ville avec Select2 -->
                            <div class="col mb-3">
                                <label for="villes_centrafrique" class="form-label">Ville du centre</label>
                                <select  id="villes_centrafrique" class="form-control ville_centre">
                                    <option value="Choississez une ville">Choississez une ville</option>
                                    <option value="Bangui">Bangui</option>
                                    <option value="Bimbo">Bimbo</option>
                                    <option value="Berberati">Berbérati</option>
                                    <option value="Bossangoa">Bossangoa</option>
                                    <option value="Bouar">Bouar</option>
                                    <option value="Bangassou">Bangassou</option>
                                    <option value="Bria">Bria</option>
                                    <option value="Carnot">Carnot</option>
                                    <option value="Kaga-Bandoro">Kaga-Bandoro</option>
                                    <option value="Mobaye">Mobaye</option>
                                    <option value="Mbaiki">Mbaïki</option>
                                    <option value="Bambari">Bambari</option>
                                    <option value="Alindao">Alindao</option>
                                    <option value="Ndele">Ndélé</option>
                                    <option value="Bozoum">Bozoum</option>
                                    <option value="Paoua">Paoua</option>
                                    <option value="Rafai">Rafaï</option>
                                    <option value="Sibut">Sibut</option>
                                    <option value="Zemio">Zémio</option>
                                    <option value="Ippy">Ippy</option>
                                    <option value="Ouadda">Ouadda</option>
                                    <option value="Obo">Obo</option>
                                    <option value="Gambo">Gambo</option>
                                    <option value="Bossembele">Bossembélé</option>
                                    <option value="Damara">Damara</option>
                                </select>
                            </div>
                            <span class="ville_error text-danger"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary centre_add">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </div>

  @endsection

@section('js')
    <script src="{{ asset('admin/js/centre.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.1/js/select2.min.js"></script>
    @if (session('status'))
    <script>
        swal("{{ session('status') }}");
    </script>

    @endif
    <script>
        $(document).ready(function () {
            // Initialisation du champ select avec Select2
            $('#villes_centrafrique').select2({
               placeholder: "Rechercher une ville...",
               allowClear: true,
               dropdownParent: $('#basicModal') // Fixe le conteneur pour éviter les bugs dans les modals
            });

            // Application de la classe 'form-control' pour le style Bootstrap
            $('.select2').addClass('form-control');
        });

    </script>
@endsection
