@extends('back-office.layouts.app_admin')
@section('content')
<div class="modal fade" id="deleteModeratorModal" tabindex="-1" aria-labelledby="deleteModeratorModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sure to delete <span id="name"></span> ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NO</button>
          <button type="button" class="btn btn-danger">Yes</button>
        </div>
      </div>
    </div>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Moderators list</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<table class="table table-striped moderators">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($moders as $moder)
            <tr>
                <th scope="row">{{ $moder->id }}</th>
                <td>{{ $moder->name }}</td>
                <td>{{ $moder->email }}</td>
                <td>
                    <a href="#"
                    id="toDelete"
                    class="btn btn-danger"
                    data-bs-toggle="modal" data-bs-target="#deleteModeratorModal"
                    data-name="{{ $moder->name }}"
                    >Deactivate</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
@section('js')
<script >
//    $(document).ready(function () {
//         var $modalDelete = $('#deleteModeratorModal')
//         var $table = $("table").find("tr")
//         var $delete = $table.find("#toDelete")
//         $delete.each(function(){
//             $(this).click(function(){
//                 // var action = $(this).data('action')
//                 var name = $(this).data('name')
//                 // $modalDelete.attr('action', action)
//                 $modalDelete.find("#name").val(name)
//             })
//         })
//     });
</script>
@endsection
