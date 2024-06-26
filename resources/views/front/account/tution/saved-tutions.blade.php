@extends('front.layouts.app')
@section('main')

<section class="section-5 bg-2">
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
            <div class="card border-0 shadow mb-4 p-3">
                    <div class="card-body card-form">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="fs-4 mb-1">Tution Saved</h3>
                            </div>
                           
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Saved Date</th>
                                        <th scope="col"></th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="border-0">

                                @if($savedTutions->isNotEmpty())
                                    @foreach($savedTutions as $savedTution)

                                        <tr class="active">
                                            <td>
                                                <div class="job-name fw-500">{{ $savedTution->tution->title}}</div>
                                                <div class="info1">Subject: {{$savedTution->tution->category->name}}</div>
                                                
                                                <div class="info1">Class: {{$savedTution->tution->classType->name}}</div>
                                                <div class="info1">Location: {{$savedTution->tution->location}}</div>
                                            </td>
                                            <td>{{\Carbon\Carbon::parse($savedTution->created_at)->format('d M, Y')}}</td>
                                            <td>0 Applications</td>
                                            <td>
                                                @if($savedTution->status==1)
                                                <div class="job-status text-capitalize">Active</div>

                                                @else

                                                <div class="job-status text-capitalize">Block</div>

                                                @endif


                                                <!-- <div class="job-status text-capitalize">active</div> -->
                                            </td>
                                            <td>
                                                <div class="action-dots ">
                                                    <button href="#" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <!-- <li><a class="dropdown-item" href="job-detail.html"> <i class="fa fa-eye" aria-hidden="true"></i> View</a></li> -->
                                                        <li><a class="dropdown-item" href="{{route('tutionDetail', $savedTution->tution_id)}}"><i class="fa fa-edit" aria-hidden="true"></i> View</a></li>
                                                        <li><a class="dropdown-item" href="#"  onClick="deleteTution({{$savedTution->tution_id}})" ><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach


                                @endif



                                    <!-- <tr class="active">
                                        <td>
                                            <div class="job-name fw-500">Web Developer</div>
                                            <div class="info1">Fulltime . Noida</div>
                                        </td>
                                        <td>05 Jun, 2023</td>
                                        <td>130 Applications</td>
                                        <td>
                                            <div class="job-status text-capitalize">active</div>
                                        </td>
                                        <td>
                                            <div class="action-dots float-end">
                                                <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="job-detail.html"> <i class="fa fa-eye" aria-hidden="true"></i> View</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr class="pending">
                                        <td>
                                            <div class="job-name fw-500".html Developer</div>
                                            <div class="info1">Part-time . Delhi</div>
                                        </td>
                                        <td>13 Aug, 2023</td>
                                        <td>20 Applications</td>
                                        <td>
                                            <div class="job-status text-capitalize">pending</div>
                                        </td>
                                        <td>
                                            <div class="action-dots float-end">
                                                <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="job-detail.html"> <i class="fa fa-eye" aria-hidden="true"></i> View</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="expired">
                                        <td>
                                            <div class="job-name fw-500">Full Stack Developer</div>
                                            <div class="info1">Fulltime . Noida</div>
                                        </td>
                                        <td>27 Sep, 2023</td>
                                        <td>278 Applications</td>
                                        <td>
                                            <div class="job-status text-capitalize">expired</div>
                                        </td>
                                        <td>
                                            <div class="action-dots float-end">
                                                <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="job-detail.html"> <i class="fa fa-eye" aria-hidden="true"></i> View</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td>
                                            <div class="job-name fw-500">Developer for IT company</div>
                                            <div class="info1">Fulltime . Goa</div>
                                        </td>
                                        <td>14 Feb, 2023</td>
                                        <td>70 Applications</td>
                                        <td>
                                            <div class="job-status text-capitalize">active</div>
                                        </td>
                                        <td>
                                            <div class="action-dots float-end">
                                                <a href="#" class="" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="job-detail.html"> <i class="fa fa-eye" aria-hidden="true"></i> View</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                                
                            </table>
                        </div>

                        <div>
                            {{ $savedTutions->links()}}

                        </div>



                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>



@endsection



@section('customJs')
<script type="text/javascript">

    function deleteTution(id){

        alert(id)




            
        $.ajax({
        url: '{{ route("account.removeSavedJob") }}',
        type: 'post',
        data: { id: id },
        dataType: 'json',
        success: function(response) {
            if (response.status) {
                window.location.href = '{{ route("account.saveTutions") }}';
            } else {
                // Handle error
                console.error('Error:', response.message);
            }
        },
        error: function(xhr, status, error) {
            // Handle AJAX error
            console.error('AJAX Error:', error);
        }
    });

        
    }

</script>





<!-- 
<script type="text/javascript">

    $("#userForm").submit(function(e){
        e.preventDefault();

        $.ajax({
            url: '{{route('account.updateProfile')}}',
            type:'post',
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
    });

</script> -->

@endsection