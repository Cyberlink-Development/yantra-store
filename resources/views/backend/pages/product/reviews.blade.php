@extends('backend.layouts.master')
@section('content') 
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="box-header">
                    <h3 class="box-title">Reviews of {{$product->product_name}}</h3>
                </div>
                <div class="box-body">
                    <table id="package_table" class="table table-bordered datatable123">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Rating</th>
                            <th>Show</th>
                            <th>Created At</th>
                            <th class="sorting-false">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product->reviews as $key=>$value)
                            <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->email}}</td>
                                <td>
                                    @for($i=0; $i<(int)$value->rating; $i++)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    @endfor
                                </td>
                                <td>
                                    @if($value->show)
                                    <a href="{{route('update-review', [$value->id, 0])}}">Click here to Hide</a>
                                    @else
                                    <a href="{{route('update-review', [$value->id, 1])}}">Click here to Show</a>
                                    @endif
                                </td>
                                <td>{{$value->created_at->format('d M Y')}}</td>
                                <td>
                                    <a class="btn btn-danger btn btn-sm confirm" href="{{route('delete-review',$value->id)}}"  onclick="return confirm('Confirm Delete?')"><i class="fa fa fa-trash"></i> </a>
                                    <a class="btn btn-outline-primary btn btn-sm confirm view" data-name="{{$value->name}}" data-review="{{$value->review}}" data-toggle="modal" data-target="#exampleModal"><i class="fa fa fa-eye"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->

                <!-- /.box -->
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="modal-review"></p>
        </div>
    </div>
  </div>
</div>

@stop
@push('scripts')
   

    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $('.datatable123').DataTable({

        });
    </script>
    <script>
        $(".view").click(function(e){
            e.preventDefault();
            let review = $(this).attr('data-review');
            $("#modal-review").html(review);
            let name = $(this).attr('data-name');
            $("#exampleModalLabel").html(name);
        });
    </script>
@endpush
