Windows PowerShell
Copyright (C) Microsoft Corporation. All rights reserved.   

Try the new cross-platform PowerShell https://aka.ms/pscore6

PS C:\Users\Necip\dev\defence> php artisan route:list

  GET|HEAD        / ...................................................................................................... 
  POST            _ignition/execute-solution ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutionController  
  GET|HEAD        _ignition/health-check ........... ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController  
  POST            _ignition/update-config ........ ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigController  
  GET|HEAD        api/user ...............................................................................................  
  GET|HEAD        dashboard ......................................................... dashboard › DashboardController@idex  
  GET|HEAD        dashboard/pages .................................................... pages.index › SayfaController@index  
  POST            dashboard/pages .................................................... pages.store › SayfaController@store  
  GET|HEAD        dashboard/pages/create ........................................... pages.create › SayfaController@create  
  GET|HEAD        dashboard/pages/{page} ............................................... pages.show › SayfaController@show  
  PUT|PATCH       dashboard/pages/{page} ........................................... pages.update › SayfaController@update  
  DELETE          dashboard/pages/{page} ......................................... pages.destroy › SayfaController@destroy  
  GET|HEAD        dashboard/pages/{page}/edit .......................................... pages.edit › SayfaController@edit  
  GET|HEAD        dashboard/sections .............................................. sections.index › MaddeController@index  
  POST            dashboard/sections .............................................. sections.store › MaddeController@store  
  GET|HEAD        dashboard/sections/create ..................................... sections.create › MaddeController@create  
  GET|HEAD        dashboard/sections/{section} ...................................... sections.show › MaddeController@show  
  PUT|PATCH       dashboard/sections/{section} .................................. sections.update › MaddeController@update  
  DELETE          dashboard/sections/{section} ................................ sections.destroy › MaddeController@destroy  
  GET|HEAD        dashboard/sections/{section}/edit ................................. sections.edit › MaddeController@edit  
  GET|HEAD        dashboard/snippets .............................................. snippets.index › FikraController@index  
  POST            dashboard/snippets .............................................. snippets.store › FikraController@store  
  GET|HEAD        dashboard/snippets/create ..................................... snippets.create › FikraController@create  
  GET|HEAD        dashboard/snippets/{snippet} ...................................... snippets.show › FikraController@show  
  PUT|PATCH       dashboard/snippets/{snippet} .................................. snippets.update › FikraController@update  
  DELETE          dashboard/snippets/{snippet} ................................ snippets.destroy › FikraController@destroy  
  GET|HEAD        dashboard/snippets/{snippet}/edit ................................. snippets.edit › FikraController@edit  
  GET|HEAD        forgot-password ................ password.request › Laravel\Fortify › PasswordResetLinkController@create  
  POST            forgot-password ................... password.email › Laravel\Fortify › PasswordResetLinkController@store  
  GET|HEAD        livewire/livewire.js ............................ Livewire\Controllers › LivewireJavaScriptAssets@source  
  GET|HEAD        livewire/livewire.js.map .......................... Livewire\Controllers › LivewireJavaScriptAssets@maps  
  POST            livewire/message/{name} ................ livewire.message › Livewire\Controllers › HttpConnectionHandler  
  GET|HEAD        livewire/preview-file/{filename} livewire.preview-file › Livewire\Controllers › FilePreviewHandler@hand…  
  POST            livewire/upload-file ............ livewire.upload-file › Livewire\Controllers › FileUploadHandler@handle  
  GET|HEAD        login .................................. login › Laravel\Fortify › AuthenticatedSessionController@create  
  POST            login ........................................... Laravel\Fortify › AuthenticatedSessionController@store  
  POST            logout ............................... logout › Laravel\Fortify › AuthenticatedSessionController@destroy  
  GET|HEAD        register .................................. register › Laravel\Fortify › RegisteredUserController@create  
  POST            register .............................................. Laravel\Fortify › RegisteredUserController@store  
  POST            reset-password ......................... password.update › Laravel\Fortify › NewPasswordController@store  
  GET|HEAD        reset-password/{token} ................. password.reset › Laravel\Fortify › NewPasswordController@create  
  GET|HEAD        sanctum/csrf-cookie .................. sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show  
  GET|HEAD        two-factor-challenge two-factor.login › Laravel\Fortify › TwoFactorAuthenticatedSessionController@create  
  POST            two-factor-challenge ................... Laravel\Fortify › TwoFactorAuthenticatedSessionController@store  
  GET|HEAD        user/confirm-password ............................. Laravel\Fortify › ConfirmablePasswordController@show  
  POST            user/confirm-password ......... password.confirm › Laravel\Fortify › ConfirmablePasswordController@store  
  GET|HEAD        user/confirmed-password-status password.confirmation › Laravel\Fortify › ConfirmedPasswordStatusControl…  
  POST            user/confirmed-two-factor-authentication two-factor.confirm › Laravel\Fortify › ConfirmedTwoFactorAuthe…  
  PUT             user/password ....................... user-password.update › Laravel\Fortify › PasswordController@update  
  GET|HEAD        user/profile ............................. profile.show › Laravel\Jetstream › UserProfileController@show  
  PUT             user/profile-information user-profile-information.update › Laravel\Fortify › ProfileInformationControll…  
  POST            user/two-factor-authentication two-factor.enable › Laravel\Fortify › TwoFactorAuthenticationController@…  
  DELETE          user/two-factor-authentication two-factor.disable › Laravel\Fortify › TwoFactorAuthenticationController…  
  GET|HEAD        user/two-factor-qr-code .......... two-factor.qr-code › Laravel\Fortify › TwoFactorQrCodeController@show  
  GET|HEAD        user/two-factor-recovery-codes two-factor.recovery-codes › Laravel\Fortify › RecoveryCodeController@ind…  
  POST            user/two-factor-recovery-codes .......................... Laravel\Fortify › RecoveryCodeController@store  
  GET|HEAD        user/two-factor-secret-key . two-factor.secret-key › Laravel\Fortify › TwoFactorSecretKeyController@show