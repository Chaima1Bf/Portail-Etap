<div class="col-12 ">
    <form wire:submit.prevent="register" class="wizard-content mt-2">
        <!-- Step 1 -->
        @if ($currentStep == 1)

            <div class="card step-one">
            <div class="card-header">
                    <h4>Ajouter un nouveau employé</h4>
                </div>
                <div class="card-body">
                    <div class="row mt-4">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                        <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                            <i class="far fa-user"></i>
                            </div>
                            <div class="wizard-step-label">
                            Info Personnelles
                            </div>
                        </div>
                        <div class="wizard-step">
                            <div class="wizard-step-icon">
                                <i class="fas fa-key"></i>
                            </div>
                            <div class="wizard-step-label">
                            Info du login
                            </div>
                        </div>
                        <div class="wizard-step">
                            <div class="wizard-step-icon">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="wizard-step-label">
                                Ajouter une photo
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    
                    <div class="wizard-pane">
                        <div class="form-group row align-items-center">
                        <label class="col-md-4 text-md-right text-left">Full Name :</label>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" name="name" class="form-control" 
                            wire:model="name" >
                            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                        </div>
                        </div>
                        <div class="form-group row align-items-center">
                        <label class="col-md-4 text-md-right text-left">Matricule :</label>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" name="matricule" class="form-control"
                            wire:model="matricule">
                            <span class="text-danger">@error('matricule'){{ $message }}@enderror</span>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-4 text-md-right text-left mt-2">CIN :</label>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" name="cin" class="form-control"
                            wire:model="cin">
                            <span class="text-danger">@error('cin'){{ $message }}@enderror</span>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 text-md-right text-left mt-2">Date de naissance :</label>
                            <div class="col-lg-4 col-md-6">
                            <input type="date" name="birth_date" class="form-control"
                            wire:model="birth_date">
                            <span class="text-danger">@error('birth_date'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label class="col-md-4 text-md-right text-left mt-2">Sexe</label>
                        <div class="col-lg-4 col-md-6">
                                <select class="form-group" wire:model="gender" >
                                    <option value="" selected>Choisir le sexe</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                </select>
                                <span class="text-danger">@error('gender'){{ $message }}@enderror</span>
                        </div>
                        </div>

                        
                    </div>
                    
                </div>
            </div>
        
        @endif

        @if ($currentStep == 2) 
        <!-- Step 2 -->
            <div class="card step-two">
                <div class="card-header">
                    <h4>Ajouter un nouveau employé</h4>
                </div>
                <div class="card-body">
                    <div class="row mt-4">
                    <div class="col-12 col-lg-8 offset-lg-2">

                        <div class="wizard-steps">
                        <div class="wizard-step">
                            <div class="wizard-step-icon">
                            <i class="far fa-user"></i>
                            </div>
                            <div class="wizard-step-label">
                            Info Personnelles
                            </div>
                        </div>

                        <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                            <i class="fas fa-key"></i>
                            </div>
                            <div class="wizard-step-label">
                            Info du login
                            </div>
                        </div>
                        <div class="wizard-step">
                            <div class="wizard-step-icon">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="wizard-step-label">
                                Ajouter une photo
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    
                    <div class="wizard-pane">
                        <div class="form-group row align-items-center">
                        <label class="col-md-4 text-md-right text-left">E-mail :</label>
                        <div class="col-lg-4 col-md-6">
                            <input type="email" name="email" class="form-control"
                            wire:model="email">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        </div>
                        <div class="form-group row align-items-center">
                        <label class="col-md-4 text-md-right text-left">Mot De Passe :</label>
                        <div class="col-lg-4 col-md-6">
                            <input type="text" name="password" class="form-control"
                            wire:model="password">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        </div>
                        
                        <div class=" form-group col-sm-6 col-md-4 text-md-right text-left mt-2">
                            {!! Form::label('is_admin', 'Compte Administrateur ?') !!} <br>
                            <label class="checkbox-inline">
                                {!! Form::hidden('is_admin', 0) !!}
                                {!! Form::checkbox('is_admin', '1', null) !!} OUI
                            </label>
                        </div>

                    </div>
                
                </div>
            </div>
        @endif

        @if ($currentStep == 3) 
        <!-- Step 3 -->
            <div class="card step-three">
            <div class="card-header">
                <h4>Ajouter un nouveau employé</h4>
            </div>
            <div class="card-body">
                <div class="row mt-4">
                <div class="col-12 col-lg-8 offset-lg-2">

                    <div class="wizard-steps">
                    <div class="wizard-step">
                        <div class="wizard-step-icon">
                        <i class="far fa-user"></i>
                        </div>
                        <div class="wizard-step-label">
                        Info Personnelles
                        </div>
                    </div>

                    <div class="wizard-step">
                        <div class="wizard-step-icon">
                            <i class="fas fa-key"></i>
                        </div>
                        <div class="wizard-step-label">
                        Info du login
                        </div>
                    </div>
                    <div class="wizard-step wizard-step-active">
                        <div class="wizard-step-icon">
                        <i class="fas fa-image"></i>
                        </div>
                        <div class="wizard-step-label">
                        Ajouter une photo
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                
                <div class="wizard-pane">
                    <div class="form-group row align-items-center">
                    <label class="col-md-4 text-md-right text-left">Votre Image :</label>
                    <div class="col-lg-4 col-md-6">
                        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"
                        wire:model="avatar">
                        <span class="text-danger">@error('avatar'){{ $message }}@enderror</span>
                    </div>
                    </div>

                </div>
            
            </div>
            
            @endif 

            <!-- Buttons -->
                <div class="action-button form-group d-flex  pt-2 pb-2 row">
                    <div class="col-lg-12 col-md-6 text-right">  
                        @if ($currentStep == 1) 
                            <div class="col-md-4"></div>
                        @endif    
                        @if ($currentStep == 2 || $currentStep == 3 )
                            <button type="button" class="btn btn-icon icon-right btn-warning" wire:click="decreaseStep()">Retour</button>
                        @endif 
                        @if ($currentStep == 1 || $currentStep == 2 )
                            <button type="button" class="btn btn-icon icon-right btn-info" wire:click="increaseStep()">Suivant</button>
                        @endif 
                        @if ($currentStep == 3)
                            <button type="submit" class="btn btn-icon icon-right btn-success">Confirmer</button>
                        @endif    
                    
                    
                    
                    </div>
                
                </div>
                
            
    
        
    </form>
</div>  