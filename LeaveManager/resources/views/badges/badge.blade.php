@extends('layouts.app')
@section('title')
    Badges
@endsection

@section('content')
    <section class="section">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3> Génération du Badge</h3>
                </div>
                <div class="card-body ">
                  <div class="row mt-4 ">
                    <div class="col-12 col-lg-8 offset-lg-2 ">
                      <div class="wizard-steps ">
                        <div class="wizard-step wizard-step-active ">
                          <div class="wizard-step-icon">
                            <i class="far fa-id-badge"></i>
                          </div>
                          <div class="wizard-step-label">
                            Génération du Badge
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <form action="{{ route('saveBadge') }}"  class="wizard-content mt-2" method="POST">
                      @csrf
                    <div class="wizard-pane">
                      <div class="form-group row align-items-center">
                        <label class="col-md-4 text-md-right text-left">Nom & Prénom :</label>
                        <div class="col-lg-4 col-md-6">
                          <input type="text" name="full_name" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label class="col-md-4 text-md-right text-left">Fonction :</label>
                        <div class="col-lg-4 col-md-6">
                          <input type="text" name="fonction" class="form-control">
                        </div>
                      </div>

                      
                      <div class="form-group row align-items-center">
                        <label class="col-md-4 text-md-right text-left">Fonction :</label>
                        <div class="col-lg-4 col-md-6">
                      <input type="file" id="photo" name="photo" accept="image/png, image/jpeg" >
                    </div>
                  </div>


                      <div class="form-group row">
                        <div class="col-md-4"></div>
                        <div class="col-lg-4 col-md-6 text-right">
                            <button type="submit" class="btn btn-icon icon-right btn-primary"> Génerer Badge </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

@endsection          