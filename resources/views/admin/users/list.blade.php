@extends('front.layouts.app')
@section('main')

<section class="section-5 bg-2">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                    
            @Include('admin.sidebar')



            </div>
            <div class="col-lg-9">
                <div class="card border-0 shadow mb-4">
                  
                <div class="card-body card-form">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="fs-4 mb-1">My Jobs</h3>
                            </div>
                            <div style="margin-top: -10px;">
                                <a href="{{route('account.createTution')}}" class="btn btn-primary">Post a Job</a>
                            </div>
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table ">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="border-0">

                                @if($users->isNotEmpty())
                                    @foreach($users as $user)

                                        <tr class="active">
                                            <td>
                                                {{$user->id}}
                                            </td>
                                            <td>
                                                <div class="job-name fw-500">{{ $user->name}}</div>
                                               <td>
                                               <div class="info1">{{$user->email}}</div>
                                                

                                               </td> 
                                               <td>
                                               <div class="info1">{{$user->mobile}}</div>
                                               
                                               </td>
                                              
                                               

                                                <!-- <div class="job-status text-capitalize">active</div> -->
                                            </td>
                                            <td>
                                                <div class="action-dots ">
                                                    <button href="#" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="{{route('admin.users.edit', $user->id)}}"> <i class="fa fa-eye" aria-hidden="true"></i> Edit</a></li>
                                                      <li><a class="dropdown-item" href="#"  onClick="deleteUser({{$user->id}})" ><i class="fa fa-trash" aria-hidden="true"></i> Remove</a></li>
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
                            {{ $users->links()}}

                        </div>



                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>



@endsection



@section('customJs')

<script type= "text/javascript">

function deleteUser(id){
    if (confirm("Are you sure you want to delete!")) {
        $.ajax({
        url: '{{route("admin.users.destroy")}}',
        type: 'delete' ,
        data: {id: id},
        dataType: 'json',
        success: function (response) {
            window.location.href="{{route('admin.users')}}";
            
        }
    });
        
    }

}
</script>

@endsection