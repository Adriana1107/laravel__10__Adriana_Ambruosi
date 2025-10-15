<x-layout> 
<div class="container-fluid">
    @if(session()->has('emailSent'))
    <div class="alert alert-success">
        {{session('emailSent')}}
    </div>

    @endif
     @if(session()->has('emailError'))
    <div class="alert alert-danger">
        {{session('emailError')}}
    </div>

    @endif

    @if(session()->has('successMessage'))
        <div class="alert alert-success">
            {{session('successMessage')}}
        </div>
         @endif
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 title vh-100 display-5">
            <h1>BENVENUTI</h1>
        </div>
    </div>
</div>

</x-layout>