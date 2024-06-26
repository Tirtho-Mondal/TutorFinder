@extends('front.layouts.app')
@section('main')

<!-- <section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Account Settings</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                    
            @Include('front.account.sidebar')



            </div>
            <div class="col-lg-9">
                <div class="card border-0 shadow mb-4">
                   
                </div>

                           
            </div>
        </div>
    </div>
</section> -->



@endsection



@section('customJs')

<script type="text/javascript">

    $("#userForm").submit(function(e)){
        e.preventDefault();

        $.ajax({
            url: '{{route('account.updateProfile')}}',
            type:'put',
            dataType: 'json',
            data: $("#userForm").serializeArray(),
            success: function(response)
            {
                if(response.status==true)
                {
                    $("#name").removeClass("is-invalid")
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')

                        $("#email").removeClass("is-invalid")
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')

                    window.location.href= "{{ route ('account.profile')}}";

                }
                else{
                    var errors = response.error;

                    if(errors.name)
                    {
                        $("#name").addClass("is-invalid")
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.name)
                    }else{
                        $("#name").removeClass("is-invalid")
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')
                    }
                    if(errors.email)
                    {
                        $("#email").addClass("is-invalid")
                        .siblings('p')
                        .addClass('invalid-feedback')
                        .html(errors.email)
                    }else{
                        $("#email").removeClass("is-invalid")
                        .siblings('p')
                        .removeClass('invalid-feedback')
                        .html('')
                    }
                    
                }

            }

        });
    }

</script>

@endsection