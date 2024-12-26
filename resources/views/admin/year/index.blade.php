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
                      <th>Id</th>
                      <th>Nom de la session</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($year as $content )
                    <tr class="session_info">
                        <td>
                          <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $content->id }}</strong>
                          <input type="hidden" value="{{ $content->id }}" class="session_id">
                        </td>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $content->annee_obtention }}</strong></td>
                        <td>
                            <a href="{{ url('admin/delete-session/'.$content->id) }}" class="btn btn-sm btn-danger delete-session"><i class="bx bx-trash"></i></a>
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
              <h5 class="modal-title" id="exampleModalLabel1">Ajouter une session</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row session_data">
                <div class="col mb-3">
                  <label for="nameBasic" class="form-label">Nom de la session</label>
                  <input type="text"  class="form-control year" placeholder="Entrer le nom de la session" />
                </div>
                <span class="session_error text-danger"></span>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                Annuler
              </button>
              <button type="button" class="btn btn-primary session_input">Enregistrer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('js')
    <script src="{{ asset('admin/js/session.js') }}"></script>
@endsection
