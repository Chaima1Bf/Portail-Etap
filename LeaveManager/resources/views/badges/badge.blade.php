@extends('layouts.app')
@section('title')
    Badges
@endsection

@section('content')
@include('flash::message')
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

                  <form action="{{ route('saveBadge') }}"  class="wizard-content mt-2" method="POST" enctype="multipart/form-data">
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

                    {{-- 
                      <div class="form-group row align-items-center">
                        <label class="col-md-4 text-md-right text-left">Fonction :</label>
                        <div class="col-lg-4 col-md-6">
                      <input type="file" id="photo" name="photo" accept="image/png, image/jpeg" >
                    </div>
                  </div> --}}


                  <span class="btn btn-file">Ajouter une photo
                    <input name="photo" class="file-upload" type="file" accept="image/*" formControlName="photo" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0]);" (change)="uploadImage($event)" />
                   </span>
                   
                   <div class="circle2">
                    <img class="profile-pic lord" id="blah" src="{{URL::to('assets/images/av2.png')}}">
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


          <style>
                .profile-pic {

                width: 200px;
                max-height: 200px;
                display: inline-block;
                }
                .circle2 {
                position: relative;
                left: 41.7%;
                border-radius: 100% !important;
                width: 180px;
                height: 180px;
                overflow: hidden;
                border: 2px solid #5460AB; 


                }
                .lord {
                max-width: 100%;
                width: 180px;
                height: 180px;
                }
                .p-image {
                position: relative;
                top: 167px;
                right: 30px;
                color: #5460AB;
                transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
                }
                .custom-file-upload {
                border: 1px solid #ccc;
                display: inline-block;
                padding: 6px 12px;
                cursor: pointer;
                }


                /* Give custom look and feel to file upload*/
                .btn-file input[type=file] {
                  position: absolute;
                  top: 10px;
                  right: 0;
                  min-width: 100%;
                  min-height: 100%;
                  font-size: 100px;
                  text-align: right;
                  filter: alpha(opacity=0);
                  opacity: 0;
                  outline: none;
                  cursor: inherit;
                  display: block;

                }
                .btn-file {
                  position: relative;
                  left: 43%;
                  top: -10px ;
                  overflow: hidden;
                  color: #5460AB;
                  font-weight: bold;
                  background-color: #e1e1e1;
                  width:150px;
                  height:30px;
                  line-height: 18px;
                  border: 2px solid #5460AB;
                }
                .btn-file:hover{
                  background: #363b5b;
                  color:#5460AB;
                }

          </style>
@endsection          